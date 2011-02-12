<?php

namespace app\controllers;
use app\models\Post;

class PostsController extends \lithium\action\Controller{
	
	/**
	*	View list of all posts
	*/
	public function index(){
		$posts = Post::find('all');
		return compact('posts');
	}
	
	/**
	*	View a Post
	*/
	public function view($slug = null){
		$post = Post::find('first', array('conditions' => array('slug' => $this->request->slug)));
		if (!$post){
			return $this->redirect('Posts::index');
		}
		return compact('post');
	}

	/**
	*	View Posts by tag
	*/
	public function tags($tag = null){
		$tag = $this->request->slug;
		$posts = Post::find('all', array('conditions' => array('tags'=>$tag)));
		if (!$posts){
			return $this->redirect('Posts::index');
		}
		return compact('posts');
	}
	
	/**
	*	Add a Post
	*/
	public function add(){
		if (!Auth::check('blogger',$this->request)){
			return $this->redirect('/login');
		}
		$post = Post::create();	
		if ($this->request->data){
			$data = $this->request->data;
			$data['created'] = mktime();
			$data['modified'] = mktime();
			$data['author'] = 'moose';
			$data['slug'] = strtolower(Post::slug($data['title'],'-'));
			$data['tags'] = explode(',',$data['tags']);
			$data['comments'] = array();
			if ($post->save($data)){
				return $this->redirect('/posts/'.$post->slug.'.html');
			}
		}
		return compact('post');
	}

	/**
	*	Edit a post
	*/
	public function edit(){
        if(!Auth::check('blogger',$this->request)){
			return $this->redirect('/login');
		}
		$post = Post::find('first', array('conditions' => array('_id' => $this->request->id)));
		if(!$post){
			$this->redirect('Posts::index');
		}
		if($this->request->data){
			$data = $this->request->data;
			$data['modified'] = mktime();
			$data['tags'] = explode(',',$data['tags']);
			if (!isset($post['comments'])){
				$post['comments'] = array();
			}
			if ($post->save($data)){
				$this->redirect('/posts/'.$post->slug.'.html');
			}
		}
		$m ="";
		$tags = $post['tags'];
		foreach($tags as $tag){
			$m .= $tag.",";
		}
		$post['tags'] = $m;
		return compact('post');
	}
	
	/**
	*	Add a comment to a post
	*/
	public function comment(){
		$conditions = array(
			'conditions' => array(
				'_id' => $this->request->data['post_id']
			)
		);
		$post = Post::find('first', $conditions);
		if (!$post){
			$this->redirect('Post::index');
		}
		if ($this->request->data){
			$data = $this->request->data;
			$comment = array(
				'name' => $data['name'],
				'email' => $data['email'],
				'url' => $data['url'],
				'content' => $data['comment'],
				'created' => mktime()
			);
			$toSave = array(
				'$push' => array(
					'comments' => $comment
				)
			);
			$result = Post::update($toSave, $conditions['conditions'], array('atomic' => false));
			if ($result){
				$this->redirect('/posts/'.$post->slug.'.html');
			}
		}
	}
	
	/**
	*	Delete Comment in a Post
	*/
	public function comment_delete(){
		if (!Auth::check('blogger',$this->request)){
			return $this->redirect('/login');
		}
		
	}
	
	/**
	*	Delete Complete Full Post
	*/
	public function delete(){
		if (!Auth::check('blogger',$this->request)){
			return $this->redirect('/login');
		}
		$post = Post::find('first', array('conditions' => array( '_id' => $this->request->id)));
		if (!$post){
			$this->redirect('Posts::index');
		}
		if ($post->delete()){
			$this->redirect('Posts::index');
		}
	}

}

?>
