<?php echo $this->view()->render( array('element' => 'menu'), array('posts' => true,'feeds'=>false,'family'=>false,'brewer'=>false) ); ?>
<div id="home">
<h1>Blog Posts</h1>
<ul class="posts">
	<?php if (count($posts) == 0){ ?>
		<li>No Posts Found</li>
	<?php } else { ?>
		<?php foreach ($posts as $post){ ?>
			<li><span><?=date('D M Y',$post->created)?></span> &raquo; <?=$this->html->link($post->title, '/posts/'.$post->slug.'.html')?></li>
		<?php } ?>
	<?php } ?>
</ul> 
</div>
