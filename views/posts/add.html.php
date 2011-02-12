<?php echo $this->view()->render( array('element' => 'menu'), array('posts' => true,'feeds'=>false,'family'=>false,'brewer'=>false) ); ?>
<div id="home">
<div id="postform">
<?php
	echo $this->form->create($post,array('class'=>'postform'));
	echo "<fieldset>";
	echo $this->form->field('title',array('class'=>'text-input'));

	echo $this->form->field('body', array('type' => 'textarea','class'=>'text-input'));
?>
<script type="text/javascript">
	CKEDITOR.replace('PostBody');
</script>
<?php
	echo $this->form->field('tags',array('class','text-input'));
	echo $this->form->submit('submit',array('class'=>'button'));
	echo "</fieldset>";
	echo $this->form->end();
?>
</div>

</div>
