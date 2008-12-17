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
					<? 
					$userid = $session->read('Auth.User.id');
					$groupid = $session->read('Auth.User.group_id');
					$feedid = $feed['Feed']['id'];

					if ($groupid == "1") {
						echo "<a href='/admin/feeds/edit/$feedid'><img src='/img/buttons/edit.png'/></a>";
						 }
					?>
	                <p class="info"><strong><? echo $feed['Feed']['feed'] ?></strong></p>
	                <p class="nomb"><? echo $feed['Feed']['description'] ?></p>
	            </div>
        	</div> <!-- /article -->

			<?php endforeach; ?>
			
  
    </div> <!-- /content-left-in -->



	<div class="paging">
		<?php echo $paginator->prev('<< '.__('previous', true), array(), null);?>
		<?php echo $paginator->numbers(array("separator" =>" ")); ?>
		<?php echo $paginator->next(__('next', true).' >>', array(), null);?>

		<?php
		echo $paginator->counter(array(
		'format' => __('%count% feeds.', true)
		));
		?>
	</div>

<hr class="noscreen" />