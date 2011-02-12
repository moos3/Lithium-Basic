<div id="commentform">
<?php
	echo $this->form->create($post,array('class'=>'postform'));
	echo "<fieldset>";
	echo $this->form->field('Name',array('class'=>'text-input'));
	echo $this->form->field('Email',array('class'=>'text-input'));
	echo $this->form->field('Url',array('class'=>'text-input'));

	echo $this->form->field('comment', array('type' => 'textarea','class'=>'text-input'));
?>
<script type="text/javascript">
	CKEDITOR.replace('PostBody');
</script>
<?php
	echo $this->form->hidden('post_id',array('value' => $post->id));
	echo $this->form->submit('submit',array('class'=>'button'));
	echo "</fieldset>";
	echo $this->form->end();
?>
</div>
