    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
        <h3 class="title">Membros</h3>

			<?php foreach ($users as $user): ?>
        	<div class="article box">
				<div class="article-img">
	                <img src="/img/avatars/<? echo $user['User']['id'] ?>.png" width="65" height="65" alt="" />
	            </div> <!-- /article-img -->
	
	            <div class="article-desc">
	                <h3><a href="/users/view/<? echo $user['User']['id'] ?>"><? echo $user['User']['name'] ?></a></h3>
	                <p class="info"><strong><? echo $user['User']['created_at'] ?></strong></p>
	                <p class="nomb"></p>
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