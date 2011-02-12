<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
  <head> 
    <title>Richard Genthner -- Resume</title> 
    <link href="/css/reset.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/resume2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/css/print.css" rel="stylesheet" type="text/css" media="print" />
    <link rel="openid.server" href="http://www.myopenid.com/server" /> 
    <link rel="openid.delegate" href="http://moos3.myopenid.com/" /> 
    <link rel="openid2.local_id" href="http://moos3.myopenid.com" /> 
    <link rel="openid2.provider" href="http://www.myopenid.com/server" /> 
    <meta http-equiv="X-XRDS-Location" content="http://www.myopenid.com/xrds?username=moos3.myopenid.com" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$(window).scroll(function(){
			$('#messgae_box').animate({top:$(window).scrollTop()+"px"},{queue: false, duration: 350});
		});
		$('#close_message').click(function(){
			$('#message_box').animate({top:"+=15px", opacity: 0}, "slow");
		});
	});
    </script>
  </head> 
  <body>
	<?php echo $this->content(); ?>
  </body> 
</html>