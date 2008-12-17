    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
        <h3 class="title"><? __('Recent Posts')?></h3>

			<?php foreach ($posts as $post): ?>
        	<div class="article box">
				<div class="article-img">
	                <img src="/img/avatars/<? echo $post['Post']['feed_id'] ?>.png" width="65" height="65" alt="" />
           		</div> <!-- /article-img -->
	
	            <div class="article-desc">
	                <h3><a href="/posts/view/<? echo $post['Post']['slug'] ?>"><? echo $post['Post']['title']; ?></a></h3>
	                <p class="info"><strong><? echo date('d M // H:i',strtotime($post['Post']['created_at'])); ?></strong>
		 				por: <strong><a href="#"><? echo $post['User']['name'] ?></a></strong>
					<? 
					$userid = $session->read('Auth.User.id');
					$groupid = $session->read('Auth.User.group_id');
					$postid = $post['Post']['id'];
					 if ($post['User']['id'] == $userid) {
						 echo "<a href='/posts/delete/$postid'><img src='/img/buttons/delete.png'/></a>";
						 }
					if ($groupid == "1") {
						echo "<a href='/posts/promote/$postid'><img src='/img/buttons/promote.png'/></a>";
						echo "<a href='/posts/demote/$postid'><img src='/img/buttons/demote.png'/></a>";
						echo "<a href='/posts/admin/delete/$postid'><img src='/img/buttons/delete.png'/></a>";
						 }
					($session->read('Auth.User.group_id'));
					?>
					</p>
	                <p class="nomb"><? echo TextHelper::truncate($post['Post']['content'],200,'(...)',true,true) ?></p>
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
		'format' => __('%count% artigos indexados.', true)
		));
		?>
	</div>
<hr class="noscreen" />