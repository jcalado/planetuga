    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
        <h3 class="title">Artigos Recentes</h3>


			<?php foreach ($posts as $post): ?>
        	<div class="article box">
				<div class="article-img">
	                <img src="/img/avatars/1.png" width="65" height="65" alt="" />
	            </div> <!-- /article-img -->
	
	            <div class="article-desc">
	                <h3><a href="<? echo $post['Post']['permalink'] ?>"><? echo $post['Post']['title']; ?></a></h3>
	                <p class="info"><strong><? echo $post['Post']['date'] ?></strong> por: <strong><a href="#">John Doe</a></strong></p>
	                <p class="nomb"><? echo $post['Post']['content'] ?></p>
	            </div>
        	</div> <!-- /article -->
			<?php endforeach; ?>
			
		
   
        <p class="t-right"><a href="#" class="more">Artigos anteriores</a></p>

    </div> <!-- /content-left-in -->



<hr class="noscreen" />