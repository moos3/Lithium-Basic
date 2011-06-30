<?php echo $this->view()->render( array('element' => 'menu'), array('posts' => false,'feeds'=>false,'family'=>false,'brewer'=>false) ); ?>
<div id="home">
	<div id="postform">
		<?php echo $this->form->create(null, array('url' => '/users/login', 'class' => 'postform')); ?>
		<fieldset>
			<?php echo $this->form->field('username'); ?>
			<?php echo $this->form->field('password', array('type' => 'password')); ?>
			<?php echo $this->form->submit('Login in', array('class' => 'button')); ?>
		</fieldset>
		<?php echo $this->form->end(); ?>
	</div>
