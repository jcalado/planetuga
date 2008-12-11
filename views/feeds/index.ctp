    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
        <h3 class="title">Blogs Agregados</h3>

			<?php foreach ($feeds as $feed): ?>
        	<div class="article box">
				<div class="article-img">
	                <img src="/img/avatars/<? echo $feed['Feed']['user_id'] ?>.png" width="65" height="65" alt="" />
           		</div> <!-- /article-img -->
	
	            <div class="article-desc">
	                <h3><a href="<? echo $feed['Feed']['url'] ?>"><? echo $feed['Feed']['name']; ?></a></h3>
	                <p class="info"><strong><? echo $feed['Feed']['feed'] ?></strong></p>
	                <p class="nomb"><? echo $feed['Feed']['description'] ?></p>
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