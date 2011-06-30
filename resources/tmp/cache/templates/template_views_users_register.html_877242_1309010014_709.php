<?php echo $this->view()->render( array('element' => 'menu'), array('posts' => false,'feeds'=>false,'family'=>false,'brewer'=>false) ); ?>
<div id="home">
	<div id="postform">
		<?php echo $this->form->create($user,array('class' => 'postform')); ?>
		<fieldset>
			<?php echo $this->form->field('username',array('class' => 'text-input')); ?>
			<?php echo $this->form->field('password', array('type' => 'password', 'class' => 'text-input')); ?>
			<?php echo $this->form->field('confirmPassword', array('type' => 'password', 'class' => 'text-input')); ?>
			<?php echo $this->form->field('email', array('class' => 'text-input')); ?>
			<?php echo $this->form->submit('Join', array('class' => 'button')); ?>
		</fieldset>
		<?php echo $this->form->end(); ?>
	</div>
