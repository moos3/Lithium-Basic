<?php echo '<?xml version="1.0" encoding="UTF-8" ?>';?>
<rss version="2.0">
	<channel>
		<title>My Feed</title>
		<description>My update feeds from the blog</description>
		<link>http://guthnur.net/blog</link>
		<lastBuildDate><?= date('D, d M Y g:i:s 0'); ?></lastbuildDate>
		<pubDate><?= date('D, d M Y g:i:s 0'); ?></pubDate>
		<?= $this->content(); ?>
	</channel>
</rss>