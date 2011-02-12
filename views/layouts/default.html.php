<!DOCTYPE html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>guthnur.net</title>
	<meta name="author" content="Richard Genthner" />
	<?php echo $this->html->style(array('syntax','system')); ?>
	<?= $this->html->link('RSS-Feed','/posts/posts.rss',array('type'=>'rss')); ?>
	<link rel="openid.server" href="http://www.myopenid.com/server" /> 
    	<link rel="openid.delegate" href="http://moos3.myopenid.com/" /> 
    	<link rel="openid2.local_id" href="http://moos3.myopenid.com" /> 
    	<link rel="openid2.provider" href="http://www.myopenid.com/server" /> 
    	<meta http-equiv="X-XRDS-Location" content="http://www.myopenid.com/xrds?username=moos3.myopenid.com" />
        <link rel="stylesheet" href="css/jquery.tweet.css" type="text/css" />
	<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>	
	<script language="javascript" src="js/jquery.js" type="text/javascript"></script>
	<script language="javascript" src="js/jquery.tweet.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".tweet").tweet({
				username: "moos3",
				join_text: "auto",
				avatar_size: 24,
				count: 5,
				auto_join_text_daefult: "we said,",
				auto_join_text_ed: "we",
				auto_join_text_ing: "we were",
				auto_join_text_reply: "we replied to",
				auto_join_text_url: "we were checking out",
				loading_text: "loading tweets...."
			});
		});
	</script>

</head>
<body>
	<div class="site">
		<? echo $this->content(); ?>
		<div class="footer">
			<div class="contact">
				<p>
					Richard Genthner<br />
					Systems Engineer (aka SystemAdmin) at <a href="http://www.symplicity.com">Symplicity</a><br/>
					richard {[ shift 2]} guthnur {[ period || dot ]} net
				</p>
			</div>
			<div class="social">
				<p>
					<a href="http://github.com/moos3">GitHub.com</a><br/>
					<a href="http://twitter.com/moos3">Twitter</a><br/>
					<a href="http://www.facebook.com/richard.genthner">Facebook</a><br/>
					<a href="http://lithify.me"><img src="/img/lithium.png" width="16px" height="16px" /></a><br/>
					<a href="http://mongodb.org"><img src="/img/mongo.png" width="16px" height="16px" /></a><br/>
				</p>
			</div>
		</div>
	</div>
</body>
