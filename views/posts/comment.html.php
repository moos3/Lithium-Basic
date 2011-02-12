<div id="postform">
<?php
echo $this->form->create($post,array('class'=>'postform'));
echo '<fieldset>';
echo $this->form->field('name',array('class'=>'text-input'));
echo $this->form->field('url',array('class'=>'text-input'));
echo $this->form->field('email',array('class'=>'text-input'));
echo $this->form->field('body',array('type'=>'textarea','class'=>'text-input'));
echo $this->form->field('submit',array('class'=>'button'));
echo '<fieldset>';
echo $this->form->end();
?>
</div>
