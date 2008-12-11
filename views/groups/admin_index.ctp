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
	                <h3><a href="/admin/groups/view/<? echo $group['Group']['id'] ?>"><? echo $group['Group']['name'] ?></a></h3>
	                <p class="info"><strong><? echo $group['Group']['created_at'] ?></strong>
						<br/>
						<span><?php echo $html->link('Editar', "/admin/groups/edit/{$group['Group']['id']}")?></span>
						<span><?php echo $html->link('Apagar', "/admin/groups/delete/{$group['Group']['id']}")?></span>
					</p>
	                <p class="nomb"></p>
	            </div>
        	</div> <!-- /article -->

			<?php endforeach; ?>
			
  

    </div> <!-- /content-left-in -->


	<?php echo $paginator->prev("Anterior"); ?> 
	<?php echo $paginator->numbers(); ?> 
	<?php echo $paginator->next("Seguinte"); ?>

<h3><?php echo $html->link('Adicionar', "/admin/groups/add")?></h3>

<hr class="noscreen" />