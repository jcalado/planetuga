    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
        <h3 class="title">Membros</h3>


        	<div class="article box">
				<div class="article-img">
	                <img src="/img/avatars/<? echo $user["User"]['id'] ?>.png" width="65" height="65" alt="" />
	            </div> <!-- /article-img -->
	
	            <div class="article-desc">
	                <h3><a href="/users/view/<? echo $user["User"]['id'] ?>"><? echo $user["User"]['name'] ?></a></h3>
	                <p class="info"><strong><? echo $user["User"]['created_at'] ?></strong></p>
	                <p class="nomb"></p>
	            </div>
        	</div> <!-- /article -->



			<div id="users-box" style="margin-left:50px">
				<h4>Grupos</h4>
				
				<div class="article box">
					<div class="article-img">
		                <img src="/img/groups/<? echo $user["Group"]["id"] ?>.png" width="65" height="65" alt="Avatar" />
		            </div> <!-- /article-img -->

		            <div class="article-desc" style='float:left; width: 200px;'>
		                <h3><a href="/groups/view/<? echo $user["Group"]['id'] ?>"><? echo $user["Group"]['name'] ?></a></h3>
		                <p class="info"><strong><? echo $user["Group"]['created_at'] ?></strong></p>
		                <p class="nomb"></p>
		            </div>
	        	</div> <!-- /article -->
			

			</div>

			
  

    </div> <!-- /content-left-in -->


<hr class="noscreen" />