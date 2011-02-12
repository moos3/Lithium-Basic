<?php echo $this->view()->render( array('element' => 'menu'), array('posts' => false,'feeds'=>false,'family'=>false,'brewer'=>false) ); ?>
<div id="home">
	<div id="postform">
		<?=$this->form->create(null, array('url' => '/users/login', 'class' => 'postform')); ?>
		<fieldset>
			<?=$this->form->field('username'); ?>
			<?=$this->form->field('password', array('type' => 'password')); ?>
			<?=$this->form->submit('Login in', array('class' => 'button')); ?>
		</fieldset>
		<?=$this->form->end(); ?>
	</div>
