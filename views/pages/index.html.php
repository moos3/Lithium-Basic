<?php echo $this->view()->render( array('element' => 'menu'),array('posts' => false,'feeds'=>false,'family'=>false,'brewer'=>false)); ?>
<div id="home">  
<div id="twitter_div">
	<ul id="twitter_update_list"></ul>
</div>
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/moos3.json?callback=twitterCallback2&amp;count=5"></script>
<?php echo $this->view()->render(array('element'=>'projects')); ?>
</div>
