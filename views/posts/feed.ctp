<?php header('Content-Type: application/rss+xml; charset=utf-8');  ?> 
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel> 
		<atom:link href="<? echo Configure::read('Site.url'); ?>/feed" rel="self" type="application/rss+xml" />
		<title>Planetuga</title> 
		<link><? echo Configure::read('Site.url'); ?></link> 
    	<description>A Internet, em Português.</description> 
    	<language>pt-PT</language> 
    	<pubDate><?php echo date("D, j M Y H:i:s", gmmktime()) . ' +0100';?></pubDate> 
    	<docs>http://blogs.law.harvard.edu/tech/rss</docs> 
    	<generator><? echo Configure::read('Site.name'); ?></generator> 
    	<managingEditor><? echo Configure::read('Site.email'); ?> (<? echo Configure::read('Site.name'); ?>)</managingEditor> 
    	<webMaster>joelcalado@gmail.com (Joel Calado)</webMaster> 
    	<?php foreach ($posts as $post): ?> 
    	<item> 
      		<title><?php echo $post["User"]['name']; ?>: <?php echo $post["Post"]['title']; ?></title> 
      		<link><? echo Configure::read('Site.url'); ?>/posts/view/<?php echo $post["Post"]['slug']; ?></link> 
      		<description><?php echo Sanitize::html($post["Post"]['content']); ?></description>
       		<pubDate><?php echo date('D, d M Y H:i:s O', strtotime($post["Post"]["created_at"])); ?> </pubDate> 
      		<guid><? echo Configure::read('Site.url'); ?>/posts/view/<?php echo $post["Post"]['slug']; ?></guid> 
			<author><?php echo $post["User"]['email']; ?> (<? echo $post["User"]['name']; ?>)</author>
    	</item> 
    	<?php endforeach; ?> 
	</channel> 
</rss>

<? die()?>
