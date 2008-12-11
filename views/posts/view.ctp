<?	$this->pageTitle = $posts["User"]["name"] . ": " . $posts["Post"]["title"]; ?>

    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
        <h3 class="title"><? echo $posts['Post']['title']; ?></h3>


        	<div class="article box">
				<div class="article-img">
	                <img src="/img/avatars/<? echo $posts['Post']['feed_id'] ?>.png" width="65" height="65" alt="" />
           		</div> <!-- /article-img -->
	
	            <div class="article-desc">
	                <p class="info"><strong><? echo date('d M // H:i',strtotime($posts['Post']['created_at'])); ?></strong>
		 				por: <strong><a href="<? echo $posts['Feed']['url']?>"><? echo $posts['User']['name']?></a></strong><br/>
						<? echo $bookmark->getBookMarks($posts['Post']['title'],$posts['Post']['permalink']) ?>
		</p>
	                <p class="nomb"><? echo TextHelper::truncate($posts['Post']['content'],400,'...',true,true);  ?></p>
					<p class="categories"><img src="/img/tag.png"/> <? $cats = explode(",", $posts['Post']['category']); foreach ($cats as $category) {
						$categoryname = str_replace("&amp;amp;", "e", $category);
						$categoryname = str_replace("&amp;#038;", "e", $categoryname);
						echo "<a href='/posts/category/$category'>$categoryname</a>  ";
					} ?></p>
	            </div>
        	</div> <!-- /article -->

  
        <p class="t-right"><a href="<? echo $posts['Post']['permalink'] ?>" class="more">Artigo completo em <? echo $posts['Feed']['name'] ?></a></p>

    </div> <!-- /content-left-in -->

<hr class="noscreen" />
