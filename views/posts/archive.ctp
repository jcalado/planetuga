<?

if (isset($this->passedArgs[0])) {
	$year = $this->passedArgs[0];
	$this->pageTitle = "Arquivo | $year";
}

if (isset($this->passedArgs[1])) {
	$month = $this->passedArgs[1];

	switch ($month) {
		case '1':
			$month = "Janeiro";
			break;
		case '2':
			$month = "Fevereiro";
			break;
		case '3':
			$month = "Março";
			break;
		case '4':
			$month = "Abril";
			break;
		case '5':
			$month = "Maio";
			break;
		case '6':
			$month = "Junho";
			break;
		case '7':
			$month = "Julho";
			break;
		case '8':
			$month = "Agosto";
			break;
		case '9':
			$month = "Setembro";
			break;
		case '10':
			$month = "Outubro";
			break;
		case '11':
			$month = "Novembro";
			break;
		case '12':
			$month = "Dezembro";
			break;
	}
	
	$this->pageTitle = "Arquivo | $month $year";
}

if (isset($this->passedArgs[2])) {
	$day = $this->passedArgs[2];
	
	switch ($month) {
		case '1':
			$month = "Janeiro";
			break;
		case '2':
			$month = "Fevereiro";
			break;
		case '3':
			$month = "Março";
			break;
		case '4':
			$month = "Abril";
			break;
		case '5':
			$month = "Maio";
			break;
		case '6':
			$month = "Junho";
			break;
		case '7':
			$month = "Julho";
			break;
		case '8':
			$month = "Agosto";
			break;
		case '9':
			$month = "Setembro";
			break;
		case '10':
			$month = "Outubro";
			break;
		case '11':
			$month = "Novembro";
			break;
		case '12':
			$month = "Dezembro";
			break;
	}
	
	$this->pageTitle = "Arquivo | $day $month $year";
}



$paginator->options(array('url' => $this->passedArgs)); ?>

    <hr class="noscreen" />

    <div id="content-left-in">

        <!-- Recent Articles -->
		<?
		
		if (isset($year) && !isset($month) && !isset($day)) {
			echo "<h3 class=\"title\">Artigos de $year</h3>";
		}
		
		if (isset($month) && !isset($day)) {
			echo "<h3 class=\"title\">Artigos de $month de $year</h3>";
		}
		
		if (isset($day)) {
			echo "<h3 class=\"title\">Artigos do dia $day de $month de $year</h3>";
		}
		
		?>
        

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
		<?php echo $paginator->prev("Anterior"); ?>
		<?php echo $paginator->numbers(array("separator" =>" ")); ?>
		<?php echo $paginator->next("Seguinte"); ?>
		
		<?php
		echo $paginator->counter(array(
		'format' => __('%count% artigos indexados.', true)
		));
		?>
	</div>
<hr class="noscreen" />