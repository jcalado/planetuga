<?		$this->pageTitle = "Artigos contendo: " . $this->passedArgs[0];
$paginator->options(array('url' => $this->passedArgs[0])); ?>

    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
        <h3 class="title">Pesquisa por artigos contendo '<? echo $this->passedArgs[0]; ?>'</h3>

			<?php foreach ($posts as $post): ?>
        	<div class="article box">
				<div class="article-img">
	                <img src="/img/avatars/<? echo $post['Post']['feed_id'] ?>.png" width="65" height="65" alt="" />
           		</div> <!-- /article-img -->
	
	            <div class="article-desc">
	                <h3><a href="/posts/view/<? echo $post['Post']['slug'] ?>"><? echo TextHelper::highlight($post['Post']['title'],$this->passedArgs[0]); ?></a></h3>
	                <p class="info"><strong><? echo date('d M - H:i',strtotime($post['Post']['created_at'])); ?></strong>
		 				por: <strong><a href="#"><? echo $post['User']['name'] ?></a></strong>
					<? $userid = $session->read('Auth.User.id'); $postid = $post['User']['id']; if ($post['User']['id'] == "$userid") { echo "<a href='/posts/delete/$postid'>Apagar</a>"; }?>
					</p>
	                <p class="nomb"><? $content = TextHelper::truncate($post['Post']['content'],400,'...',true,true);  ?> <? echo TextHelper::highlight($content,$this->passedArgs[0],'<span class="highlight">\1</span>',true) ?></p>
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