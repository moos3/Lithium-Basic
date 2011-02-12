<?php echo $this->view()->render( array('element' => 'menu'), array('posts' => true,'feeds'=>false,'family'=>false,'brewer'=>false) ); ?>
<div id="home">
<div id="post">
	<h1><?=$post->title?></h1>
	<?php echo $post->body; ?>
	<br/>
	<small>
		tags:
		<?php 
			foreach ($post->tags as $tag){
			 	echo $this->html->link($tag,'/posts/tags/'.$tag).', ';
			}
		?>
	</small> |<small><?=$this->html->link('Edit',array('Posts::edit','id'=>$post->_id))?> </small><br/>
	<small>by <?=$post->author?> on <?=date('D M y H:i',$post->created)?> updated last on <?=date('D M y H:i',$post->modified)?></small>
	<br/>
	<?
		if (count($post->comments) !=0){
			echo "<ul>";
			$comments = $post->comments;
			foreach ($comments as $comment){
				$comment = compact('comment');
				echo $this->view()->render(array('element' => 'comment'), $comment);
			}
			echo "<ul>";
		}else{
			echo "<p>No Comments yet. Why not be the first?</p>";
		}
		echo "<br/>";
		//echo $this->view()->render(array('element' => 'commentAdd'), $post );
	?>
<div id="commentform">
<?php
	echo $this->form->create(null, array('url' => '/posts/comment', 'class' => 'postform'));
	echo "<fieldset>";
	echo $this->form->field('name',array('class'=>'text-input'));
	echo $this->form->field('email',array('class'=>'text-input'));
	echo $this->form->field('url',array('class'=>'text-input'));
	echo $this->form->hidden('post_id',array('value' => $post->_id));

	echo $this->form->field('comment', array('type' => 'textarea','class'=>'text-input'));
?>
<script type="text/javascript">
	CKEDITOR.replace('comment');
</script>
<?php
	echo $this->form->submit('submit',array('class'=>'button'));
	echo "</fieldset>";
	echo $this->form->end();
?>
</div>
</div>
</div>
