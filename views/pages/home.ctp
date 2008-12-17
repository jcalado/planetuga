<div id="content-left">

    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
        <h3 class="title"><? __('Featured posts')?></h3>
		
<? $posts = $this->requestAction('posts/featured');  ?>


		<?php foreach ($posts as $post): ?>
    	<div class="article box featured">
			<div class="article-img">
                <img src="/img/avatars/<? echo $post['Post']['feed_id'] ?>.png" width="32" height="32" alt="" />
            </div> <!-- /article-img -->

            <div class="article-desc">
                <h4><a href="/posts/view/<? echo $post['Post']['slug'] ?>"><? echo $post['Post']['title'] ?></a></h4>
                <p class="info"><strong><? echo date('d M @ H:i',strtotime($post['Post']['created_at'])); ?></strong> por: <strong><a href="/users/view/<? echo $post['User']['id'] ?>"><? echo $post['User']['name'] ?></a></strong></p>
                <p class="nomb"></p>
            </div>
    	</div> <!-- /article -->
		<?php endforeach; ?>


        <p class="t-right"><a href="/posts" class="more">Mais artigos</a></p>

    </div> <!-- /content-left-in -->

</div> <!-- /content-left -->

<hr class="noscreen" />

<div id="content-right">

    <!-- Ads 125x125 -->
    <div class="box">
		<span class="f-right"><a href="/pub"><img src="/img/pubaqui.gif" width="125" height="125" alt="Anuncie aqui" /></a></span>
        <span class="f-left"><a href="/pub"><img src="/img/pubaqui.gif" width="125" height="125" alt="Anuncie aqui" /></a></span>
    </div>
    
    <!-- News -->
    <div class="box-01-top"></div>
    <div class="box-01-top-b box">
        <span class="f-right">Novidades e anúncios</span>
        <span class="f-left"><strong>Notícias</strong></span>
    </div> <!-- /box-01-top-b -->
    <div class="box-01">
   <? $announces = $this->requestAction('announces/index'); ?>
<?		$bg = "0"; ?>
		<?php foreach ($announces as $announce): ?>
 		<?
 			if ($bg != "0") {
 				echo "<div class='bg'>";
 			}
 		?>
        <dl class="news box">
            <dt><? echo date('M',strtotime($announce['Announce']['date'])) ?><br /><span><? echo date('d',strtotime($announce['Announce']['date'])) ?></span></dt>
            <dd><span>@ <? echo date('H:i',strtotime($announce['Announce']['date'])) ?></span><br /><? echo $announce['Announce']['content'] ?></dd>
        </dl>
		
		<? if ($bg != "0") {
			echo "</div>";
			$bg = "0";} else {
				$bg = "1";
			} ?>
		
		<?php endforeach; ?>

        
    </div> <!-- /box-01 -->
    <div class="box-01-bottom"></div>

    <!-- Most read articles -->
    <div class="box-02-top"></div>
    <div class="box-02-top-b box">
        <span class="f-left"><strong>Artigos + lidos esta semana</strong></span>
    </div> <!-- /box-02-top-b -->
    <div class="box-02 box">

        <ul class="mostreaded">
			<? $posts = $this->requestAction('posts/top');  ?>
			<?php foreach ($posts as $post): ?>
				<li><span class="f-right"><? echo $post['Post']['hits'] ?> hits</span>
					<a href="/posts/view/<? echo $post['Post']['slug'] ?>"><? echo $post['Post']['title'] ?></a></li>
			<?php endforeach; ?>
        </ul>

    </div> <!-- /box-02 -->
    <div class="box-02-bottom"></div>

</div> <!-- /content-right -->

<script type="text/javascript">
			$('#fade').innerfade({ 
			    speed:    400, 
			    timeout:  5000,
				animationtype: 'slide',
				containerheight: '200px'
			});
</script>