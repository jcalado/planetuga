<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
	<channel> 
		<atom:link href="http://beta.planetuga.com/feed" rel="self" type="application/rss+xml" />
		<title>Planetuga</title> 
		<link>http://planetuga.com/</link> 
    	<description>A Internet, em Português.</description> 
    	<language>pt-PT</language> 
    	<pubDate><?php echo date("D, j M Y H:i:s", gmmktime()) . ' +0100';?></pubDate> 
    	<docs>http://blogs.law.harvard.edu/tech/rss</docs> 
    	<generator>Planetuga 2.0</generator> 
    	<managingEditor>geral@planetuga.com (Planetuga)</managingEditor> 
    	<webMaster>joelcalado@gmail.com (Joel Calado)</webMaster> 
    	<?php foreach ($posts as $post): ?> 
    	<item> 
      		<title><?php echo $post["Post"]['title']; ?></title> 
      		<link>http://planetuga.com/posts/view/<?php echo $post["Post"]['id']; ?></link> 
      		<description><?php $post["Post"]['content']; ?></description>
       		<pubDate><?php echo date('D, d M Y H:i:s O', strtotime($post["Post"]["created_at"])); ?> </pubDate> 
      		<guid>http://planetuga.com/posts/view/<?php echo $post["Post"]['id']; ?></guid> 
    	</item> 
    	<?php endforeach; ?> 
	</channel> 
</rss>
<? die()?>
