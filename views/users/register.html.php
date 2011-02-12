<?php echo $this->view()->render( array('element' => 'menu'), array('posts' => false,'feeds'=>false,'family'=>false,'brewer'=>false) ); ?>
<div id="home">
	<div id="postform">
		<?=$this->form->create($user,array('class' => 'postform')); ?>
		<fieldset>
			<?=$this->form->field('username',array('class' => 'text-input')); ?>
			<?=$this->form->field('password', array('type' => 'password', 'class' => 'text-input')); ?>
			<?=$this->form->field('confirmPassword', array('type' => 'password', 'class' => 'text-input')); ?>
			<?=$this->form->field('email', array('class' => 'text-input')); ?>
			<?=$this->form->submit('Join', array('class' => 'button')); ?>
		</fieldset>
		<?=$this->form->end(); ?>
	</div>
