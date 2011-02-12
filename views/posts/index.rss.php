<?php foreach($posts as $post): ?>
<item>
	<title><?= $post->title; ?></title>
	<description><?= $this->teaser; ?></description>
	<link><?= $this->html->link($post->title, array('Post::view', 'slug' => $post->slug)); ?></link>
	<guid isPermalink="true">http://guthnur.net/blog/<?= $post->slug ?></guid>
	<pubDate><?= date('D, d M Y g:i:s 0', $post->created->sec); ?></pubDate>
</item>
<?php endforeach; ?>