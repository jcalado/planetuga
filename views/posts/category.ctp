<?		$this->pageTitle = "Artigos da categoria: " . $this->params["pass"]["0"];
$paginator->options(array('url' => $this->passedArgs)); ?>

    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
        <h3 class="title">Categoria <? echo $this->params["pass"]["0"] ?></h3>

			<?php foreach ($posts as $post): ?>
        	<div class="article box">
				<div class="article-img">
	                <img src="/img/avatars/<? echo $post['Post']['feed_id'] ?>.png" width="65" height="65" alt="" />
           		</div> <!-- /article-img -->
	
	            <div class="article-desc">
	                <h3><a href="/posts/view/<? echo $post['Post']['slug'] ?>"><? echo $post['Post']['title']; ?></a></h3>
	                <p class="info"><strong><? echo date('d M // H:i',strtotime($post['Post']['created_at'])); ?></strong>
		 				por: <strong><a href="#"><? echo $post['User']['name'] ?></a></strong></p>
	                <p class="nomb"><? echo TextHelper::truncate($post['Post']['content'],200,'...',true,true) ?></p>
	            </div>
        	</div> <!-- /article -->

			<?php endforeach; ?>
			
    </div> <!-- /content-left-in -->


	<div class="pagination">
		<?php echo $paginator->prev("Anterior"); ?>
		<?php echo $paginator->numbers(array("separator" =>" ")); ?>
		<?php echo $paginator->next("Seguinte"); ?>
	</div>


<hr class="noscreen" />