<style>
.article {margin-bottom:10px; padding-bottom:10px; background:url("/img/dot.gif") 0 100% repeat-x;}
.article .article-img {float:left; width:65px; margin-right: 20px;}
.article .article-img img {display:block;}
.article .article-desc {float:left; width:80%;}
</style>

    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
        <h3 class="title">Membros do grupo <? echo $group["Group"]["name"] ?></h3>


        	<div class="article box">
				<div class="article-img">
	                <img src="/img/groups/<? echo $group["Group"]['id'] ?>.png" width="65" height="65" alt="" />
	            </div> <!-- /article-img -->
	
	            <div class="article-desc">
	                <h3><a href="/groups/view/<? echo $group["Group"]['id'] ?>"><? echo $group["Group"]['name'] ?></a></h3>
	                <p class="info"><strong><? echo $group["Group"]['created_at'] ?></strong></p>
	                <p class="nomb"></p>
	            </div>
        	</div> <!-- /article -->

			<div id="admin-users-box" style="margin-left:50px">
			<? foreach ($group["User"] as $user) { ?>
				
				<div class="article box">
					<div class="article-img">
		                <img src="/img/avatars/<? echo $user['id'] ?>.png" width="65" height="65" alt="Avatar" />
		            </div> <!-- /article-img -->

		            <div class="article-desc" style='float:left; width: 200px;'>
		                <h3><a href="/users/view/<? echo $user['id'] ?>"><? echo $user['name'] ?></a></h3>
		                <p class="info"><strong><? echo $user['created_at'] ?></strong></p>
		                <p class="nomb"></p>
		            </div>
	        	</div> <!-- /article -->
			
			<? } ?>
			</div>

 

    </div> <!-- /content-left-in -->


<hr class="noscreen" />