    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
        <h3 class="title">Grupos</h3>

			<?php foreach ($groups as $group): ?>
        	<div class="article box">
				<div class="article-img">
	                <img src="/img/groups/<? echo $group['Group']['id'] ?>.png" width="65" height="65" alt="" />
	            </div> <!-- /article-img -->
	
	            <div class="article-desc">
	                <h3><a href="/groups/view/<? echo $group['Group']['id'] ?>"><? echo $group['Group']['name'] ?></a></h3>
	                <p class="info"><strong><? echo date('d M // H:i',strtotime($group['Group']['created_at'])); ?></strong></p>
	                <p class="nomb"></p>
	            </div>
        	</div> <!-- /article -->

			<?php endforeach; ?>
			
  

    </div> <!-- /content-left-in -->


	<?php echo $paginator->prev("Anterior"); ?> 
	<?php echo $paginator->numbers(); ?> 
	<?php echo $paginator->next("Seguinte"); ?>

<hr class="noscreen" />