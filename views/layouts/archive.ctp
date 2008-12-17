<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="en" />
    <meta name="robots" content="all,follow" />

    <meta name="author" lang="en" content="joelcalado@gmail.com" />
    <meta name="copyright" lang="en" content="Webdesign: Nuvio [www.nuvio.cz]; e-mail: ahoj@nuvio.cz" />

    <meta name="description" content="..." />
    <meta name="keywords" content="..." />

	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.packed.js"></script>
	<script type="text/javascript" src="/js/jquery.collapsor.min.js"></script>
	<script type="text/javascript" src="/js/superfish.js"></script>
	
	<script type="text/javascript">

	// initialise plugins
	jQuery(function(){
		jQuery('ul.box').superfish();
	});

	</script>
	
	

    <link rel="stylesheet" media="screen,projection" type="text/css" href="/css/reset.css" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="/css/main.css" />
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="/css/main-msie.css" /><![endif]-->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" media="print" type="text/css" href="/css/print.css" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="/css/superfish.css" />


    <title><? echo "$title_for_layout"; ?></title>
</head>

<body>

<div id="main">

    <!-- Header -->
    <div id="header">

        <h1 id="logo"><a href="/" title="[Go to homepage]"><span></span>Planetuga</a></h1>
        <hr class="noscreen" />          

    </div> <!-- /header -->
    
    <!-- Tray -->
    <div id="tray">

        <ul class="box sf-menu">
            <li id="tray-active"><a href="/">Homepage</a></li> <!-- Active page -->
            <li><a href="/posts">Planeta</a></li>
            <li><a href="/users">Utilizadores</a></li>
            <li><a href="/feeds">Feeds</a></li>
            <li><a href="/posts/archive">Arquivo</a></li>

			<? if (isset($_SESSION["Auth"]["User"]["group_id"]) && $_SESSION["Auth"]["User"]["group_id"] == "1") { ?>

			<li><a href="/admin/">Administração</a>
				<ul>
					<li>
						<a href="/admin/posts"><? __('Posts')?></a>
						<ul>
							<li><a href="/admin/posts/featured"><? __('Featured Posts')?></a></li>
						</ul>
					</li>
					<li>
						<a href="/admin/users"><? __('Users')?></a>
						<ul>
							<li><a href="/admin/users/index"><? __('List Users')?></a></li>
							<li><a href="/admin/users/add"><? __('Add User')?></a></li>
						</ul>
					</li>
					<li>
						<a href="/admin/votes"><? __('Votes')?></a>
						<ul>
							<li><a href="/admin/votes/index"><? __('List Polls')?></a></li>
							<li><a href="/admin/votes/add"><? __('Add Poll')?></a></li>
						</ul>
					</li>
					<li>
						<a href="/admin/tasks"><? __('Tasks')?></a>
						<ul>
							<li><a href="/admin/tasks/index"><? __('List Tasks')?></a></li>
							<li><a href="/admin/tasks/add"><? __('Add Task')?></a></li>
						</ul>
					</li>
				</ul>
			</li>
			<? } ?>
			
			<? if (isset($_SESSION["Auth"]["User"]["group_id"]) && $_SESSION["Auth"]["User"]["group_id"] == "2") { ?>

			<li><a href="/votes/">Votes</a></li>
			
			<? } ?>
        </ul>

    <hr class="noscreen" />
    </div> <!-- /tray -->

    <!-- Columns -->
    <div id="cols" class="box">

        <!-- Content -->
        <div id="content">
	
			<?php
				if ($session->check('Message.flash')) {
					$session->flash();
				}
				if ($session->check('Message.auth')) {
					$session->flash('auth');
				}
			?>

			<?php echo $content_for_layout ?>
			
        <hr class="noscreen" />
        </div> <!-- /content -->

        <!-- Aside -->
        <div id="aside">

            <div id="aside-top"></div>
            
            <!-- Categories -->
            <div class="padding">
                <h4 class="nom"><? __('Archive') ?></h4>
            </div> <!-- /padding -->
            
            <ul class="nav">
                <li><a href="/posts/archive/2008">2008</a> <!-- Active -->
                    <ul>
                        <li><a href="/posts/archive/2008-01"><? __('January') ?></a>
							<ul>
									<li><a href="/posts/archive/2008/01/01">Dia 1</a></li>
									<li><a href="/posts/archive/2008/01/02">Dia 2</a></li>
									<li><a href="/posts/archive/2008/01/03">Dia 3</a></li>
									<li><a href="/posts/archive/2008/01/04">Dia 4</a></li>
									<li><a href="/posts/archive/2008/01/05">Dia 5</a></li>
									<li><a href="/posts/archive/2008/01/06">Dia 6</a></li>
									<li><a href="/posts/archive/2008/01/07">Dia 7</a></li>
									<li><a href="/posts/archive/2008/01/08">Dia 8</a></li>
									<li><a href="/posts/archive/2008/01/09">Dia 9</a></li>
									<li><a href="/posts/archive/2008/01/10">Dia 10</a></li>
									<li><a href="/posts/archive/2008/01/11">Dia 11</a></li>
									<li><a href="/posts/archive/2008/01/12">Dia 12</a></li>
									<li><a href="/posts/archive/2008/01/13">Dia 13</a></li>
									<li><a href="/posts/archive/2008/01/14">Dia 14</a></li>
									<li><a href="/posts/archive/2008/01/15">Dia 15</a></li>
									<li><a href="/posts/archive/2008/01/16">Dia 16</a></li>
									<li><a href="/posts/archive/2008/01/17">Dia 17</a></li>
									<li><a href="/posts/archive/2008/01/18">Dia 18</a></li>
									<li><a href="/posts/archive/2008/01/19">Dia 19</a></li>
									<li><a href="/posts/archive/2008/01/20">Dia 20</a></li>
									<li><a href="/posts/archive/2008/01/21">Dia 21</a></li>
									<li><a href="/posts/archive/2008/01/22">Dia 22</a></li>
									<li><a href="/posts/archive/2008/01/23">Dia 23</a></li>
									<li><a href="/posts/archive/2008/01/24">Dia 24</a></li>
									<li><a href="/posts/archive/2008/01/25">Dia 25</a></li>
									<li><a href="/posts/archive/2008/01/26">Dia 26</a></li>
									<li><a href="/posts/archive/2008/01/27">Dia 27</a></li>
									<li><a href="/posts/archive/2008/01/28">Dia 28</a></li>
									<li><a href="/posts/archive/2008/01/29">Dia 29</a></li>
									<li><a href="/posts/archive/2008/01/30">Dia 30</a></li>
									<li><a href="/posts/archive/2008/01/31">Dia 31</a></li>
								</ul>
						</li>
                        <li><a href="/posts/archive/2008/02"><? __('February') ?></a>
							<ul>
								<li><a href="/posts/archive/2008/02/01">Dia 1</a></li>
								<li><a href="/posts/archive/2008/02/02">Dia 2</a></li>
								<li><a href="/posts/archive/2008/02/03">Dia 3</a></li>
								<li><a href="/posts/archive/2008/02/04">Dia 4</a></li>
								<li><a href="/posts/archive/2008/02/05">Dia 5</a></li>
								<li><a href="/posts/archive/2008/02/06">Dia 6</a></li>
								<li><a href="/posts/archive/2008/02/07">Dia 7</a></li>
								<li><a href="/posts/archive/2008/02/08">Dia 8</a></li>
								<li><a href="/posts/archive/2008/02/09">Dia 9</a></li>
								<li><a href="/posts/archive/2008/02/10">Dia 10</a></li>
								<li><a href="/posts/archive/2008/02/11">Dia 11</a></li>
								<li><a href="/posts/archive/2008/02/12">Dia 12</a></li>
								<li><a href="/posts/archive/2008/02/13">Dia 13</a></li>
								<li><a href="/posts/archive/2008/02/14">Dia 14</a></li>
								<li><a href="/posts/archive/2008/02/15">Dia 15</a></li>
								<li><a href="/posts/archive/2008/02/16">Dia 16</a></li>
								<li><a href="/posts/archive/2008/02/17">Dia 17</a></li>
								<li><a href="/posts/archive/2008/02/18">Dia 18</a></li>
								<li><a href="/posts/archive/2008/02/19">Dia 19</a></li>
								<li><a href="/posts/archive/2008/02/20">Dia 20</a></li>
								<li><a href="/posts/archive/2008/02/21">Dia 21</a></li>
								<li><a href="/posts/archive/2008/02/22">Dia 22</a></li>
								<li><a href="/posts/archive/2008/02/23">Dia 23</a></li>
								<li><a href="/posts/archive/2008/02/24">Dia 24</a></li>
								<li><a href="/posts/archive/2008/02/25">Dia 25</a></li>
								<li><a href="/posts/archive/2008/02/26">Dia 26</a></li>
								<li><a href="/posts/archive/2008/02/27">Dia 27</a></li>
								<li><a href="/posts/archive/2008/02/28">Dia 28</a></li>
								<li><a href="/posts/archive/2008/02/29">Dia 29</a></li>
							</ul>
						</li>
						<li><a href="/posts/archive/2008/03"><? __('March') ?></a>
							<ul>
								<li><a href="/posts/archive/2008/03/01">Dia 1</a></li>
								<li><a href="/posts/archive/2008/03/02">Dia 2</a></li>
								<li><a href="/posts/archive/2008/03/03">Dia 3</a></li>
								<li><a href="/posts/archive/2008/03/04">Dia 4</a></li>
								<li><a href="/posts/archive/2008/03/05">Dia 5</a></li>
								<li><a href="/posts/archive/2008/03/06">Dia 6</a></li>
								<li><a href="/posts/archive/2008/03/07">Dia 7</a></li>
								<li><a href="/posts/archive/2008/03/08">Dia 8</a></li>
								<li><a href="/posts/archive/2008/03/09">Dia 9</a></li>
								<li><a href="/posts/archive/2008/03/10">Dia 10</a></li>
								<li><a href="/posts/archive/2008/03/11">Dia 11</a></li>
								<li><a href="/posts/archive/2008/03/12">Dia 12</a></li>
								<li><a href="/posts/archive/2008/03/13">Dia 13</a></li>
								<li><a href="/posts/archive/2008/03/14">Dia 14</a></li>
								<li><a href="/posts/archive/2008/03/15">Dia 15</a></li>
								<li><a href="/posts/archive/2008/03/16">Dia 16</a></li>
								<li><a href="/posts/archive/2008/03/17">Dia 17</a></li>
								<li><a href="/posts/archive/2008/03/18">Dia 18</a></li>
								<li><a href="/posts/archive/2008/03/19">Dia 19</a></li>
								<li><a href="/posts/archive/2008/03/20">Dia 20</a></li>
								<li><a href="/posts/archive/2008/03/21">Dia 21</a></li>
								<li><a href="/posts/archive/2008/03/22">Dia 22</a></li>
								<li><a href="/posts/archive/2008/03/23">Dia 23</a></li>
								<li><a href="/posts/archive/2008/03/24">Dia 24</a></li>
								<li><a href="/posts/archive/2008/03/25">Dia 25</a></li>
								<li><a href="/posts/archive/2008/03/26">Dia 26</a></li>
								<li><a href="/posts/archive/2008/03/27">Dia 27</a></li>
								<li><a href="/posts/archive/2008/03/28">Dia 28</a></li>
								<li><a href="/posts/archive/2008/03/29">Dia 29</a></li>
								<li><a href="/posts/archive/2008/03/30">Dia 30</a></li>
								<li><a href="/posts/archive/2008/03/30">Dia 31</a></li>
							</ul>
						</li>
						<li>
							<a href="/posts/archive/2008/04"><? __('April') ?></a>
							<ul>
								<li><a href="/posts/archive/2008/04/01">Dia 1</a></li>
								<li><a href="/posts/archive/2008/04/02">Dia 2</a></li>
								<li><a href="/posts/archive/2008/04/03">Dia 3</a></li>
								<li><a href="/posts/archive/2008/04/04">Dia 4</a></li>
								<li><a href="/posts/archive/2008/04/05">Dia 5</a></li>
								<li><a href="/posts/archive/2008/04/06">Dia 6</a></li>
								<li><a href="/posts/archive/2008/04/07">Dia 7</a></li>
								<li><a href="/posts/archive/2008/04/08">Dia 8</a></li>
								<li><a href="/posts/archive/2008/04/09">Dia 9</a></li>
								<li><a href="/posts/archive/2008/04/10">Dia 10</a></li>
								<li><a href="/posts/archive/2008/04/11">Dia 11</a></li>
								<li><a href="/posts/archive/2008/04/12">Dia 12</a></li>
								<li><a href="/posts/archive/2008/04/13">Dia 13</a></li>
								<li><a href="/posts/archive/2008/04/14">Dia 14</a></li>
								<li><a href="/posts/archive/2008/04/15">Dia 15</a></li>
								<li><a href="/posts/archive/2008/04/16">Dia 16</a></li>
								<li><a href="/posts/archive/2008/04/17">Dia 17</a></li>
								<li><a href="/posts/archive/2008/04/18">Dia 18</a></li>
								<li><a href="/posts/archive/2008/04/19">Dia 19</a></li>
								<li><a href="/posts/archive/2008/04/20">Dia 20</a></li>
								<li><a href="/posts/archive/2008/04/21">Dia 21</a></li>
								<li><a href="/posts/archive/2008/04/22">Dia 22</a></li>
								<li><a href="/posts/archive/2008/04/23">Dia 23</a></li>
								<li><a href="/posts/archive/2008/04/24">Dia 24</a></li>
								<li><a href="/posts/archive/2008/04/25">Dia 25</a></li>
								<li><a href="/posts/archive/2008/04/26">Dia 26</a></li>
								<li><a href="/posts/archive/2008/04/27">Dia 27</a></li>
								<li><a href="/posts/archive/2008/04/28">Dia 28</a></li>
								<li><a href="/posts/archive/2008/04/29">Dia 29</a></li>
								<li><a href="/posts/archive/2008/04/30">Dia 30</a></li>
							</ul>
						</li>
						<li>
							<a href="/posts/archive/2008/05"><? __('May') ?></a>
							<ul>
								<li><a href="/posts/archive/2008/05/01">Dia 1</a></li>
								<li><a href="/posts/archive/2008/05/02">Dia 2</a></li>
								<li><a href="/posts/archive/2008/05/03">Dia 3</a></li>
								<li><a href="/posts/archive/2008/05/04">Dia 4</a></li>
								<li><a href="/posts/archive/2008/05/05">Dia 5</a></li>
								<li><a href="/posts/archive/2008/05/06">Dia 6</a></li>
								<li><a href="/posts/archive/2008/05/07">Dia 7</a></li>
								<li><a href="/posts/archive/2008/05/08">Dia 8</a></li>
								<li><a href="/posts/archive/2008/05/09">Dia 9</a></li>
								<li><a href="/posts/archive/2008/05/10">Dia 10</a></li>
								<li><a href="/posts/archive/2008/05/11">Dia 11</a></li>
								<li><a href="/posts/archive/2008/05/12">Dia 12</a></li>
								<li><a href="/posts/archive/2008/05/13">Dia 13</a></li>
								<li><a href="/posts/archive/2008/05/14">Dia 14</a></li>
								<li><a href="/posts/archive/2008/05/15">Dia 15</a></li>
								<li><a href="/posts/archive/2008/05/16">Dia 16</a></li>
								<li><a href="/posts/archive/2008/05/17">Dia 17</a></li>
								<li><a href="/posts/archive/2008/05/18">Dia 18</a></li>
								<li><a href="/posts/archive/2008/05/19">Dia 19</a></li>
								<li><a href="/posts/archive/2008/05/20">Dia 20</a></li>
								<li><a href="/posts/archive/2008/05/21">Dia 21</a></li>
								<li><a href="/posts/archive/2008/05/22">Dia 22</a></li>
								<li><a href="/posts/archive/2008/05/23">Dia 23</a></li>
								<li><a href="/posts/archive/2008/05/24">Dia 24</a></li>
								<li><a href="/posts/archive/2008/05/25">Dia 25</a></li>
								<li><a href="/posts/archive/2008/05/26">Dia 26</a></li>
								<li><a href="/posts/archive/2008/05/27">Dia 27</a></li>
								<li><a href="/posts/archive/2008/05/28">Dia 28</a></li>
								<li><a href="/posts/archive/2008/05/29">Dia 29</a></li>
								<li><a href="/posts/archive/2008/05/30">Dia 30</a></li>
								<li><a href="/posts/archive/2008/05/31">Dia 31</a></li>
							</ul>
						</li>
						<li>
							<a href="/posts/archive/2008/06"><? __('June') ?></a>
							<ul>
								<li><a href="/posts/archive/2008/06/01">Dia 1</a></li>
								<li><a href="/posts/archive/2008/06/02">Dia 2</a></li>
								<li><a href="/posts/archive/2008/06/03">Dia 3</a></li>
								<li><a href="/posts/archive/2008/06/04">Dia 4</a></li>
								<li><a href="/posts/archive/2008/06/05">Dia 5</a></li>
								<li><a href="/posts/archive/2008/06/06">Dia 6</a></li>
								<li><a href="/posts/archive/2008/06/07">Dia 7</a></li>
								<li><a href="/posts/archive/2008/06/08">Dia 8</a></li>
								<li><a href="/posts/archive/2008/06/09">Dia 9</a></li>
								<li><a href="/posts/archive/2008/06/10">Dia 10</a></li>
								<li><a href="/posts/archive/2008/06/11">Dia 11</a></li>
								<li><a href="/posts/archive/2008/06/12">Dia 12</a></li>
								<li><a href="/posts/archive/2008/06/13">Dia 13</a></li>
								<li><a href="/posts/archive/2008/06/14">Dia 14</a></li>
								<li><a href="/posts/archive/2008/06/15">Dia 15</a></li>
								<li><a href="/posts/archive/2008/06/16">Dia 16</a></li>
								<li><a href="/posts/archive/2008/06/17">Dia 17</a></li>
								<li><a href="/posts/archive/2008/06/18">Dia 18</a></li>
								<li><a href="/posts/archive/2008/06/19">Dia 19</a></li>
								<li><a href="/posts/archive/2008/06/20">Dia 20</a></li>
								<li><a href="/posts/archive/2008/06/21">Dia 21</a></li>
								<li><a href="/posts/archive/2008/06/22">Dia 22</a></li>
								<li><a href="/posts/archive/2008/06/23">Dia 23</a></li>
								<li><a href="/posts/archive/2008/06/24">Dia 24</a></li>
								<li><a href="/posts/archive/2008/06/25">Dia 25</a></li>
								<li><a href="/posts/archive/2008/06/26">Dia 26</a></li>
								<li><a href="/posts/archive/2008/06/27">Dia 27</a></li>
								<li><a href="/posts/archive/2008/06/28">Dia 28</a></li>
								<li><a href="/posts/archive/2008/06/29">Dia 29</a></li>
								<li><a href="/posts/archive/2008/06/30">Dia 30</a></li>
							</ul>
						</li>
						<li>
							<a href="/posts/archive/2008/07"><? __('July') ?></a>
							<ul>
								<li><a href="/posts/archive/2008/07/01">Dia 1</a></li>
								<li><a href="/posts/archive/2008/07/02">Dia 2</a></li>
								<li><a href="/posts/archive/2008/07/03">Dia 3</a></li>
								<li><a href="/posts/archive/2008/07/04">Dia 4</a></li>
								<li><a href="/posts/archive/2008/07/05">Dia 5</a></li>
								<li><a href="/posts/archive/2008/07/06">Dia 6</a></li>
								<li><a href="/posts/archive/2008/07/07">Dia 7</a></li>
								<li><a href="/posts/archive/2008/07/08">Dia 8</a></li>
								<li><a href="/posts/archive/2008/07/09">Dia 9</a></li>
								<li><a href="/posts/archive/2008/07/10">Dia 10</a></li>
								<li><a href="/posts/archive/2008/07/11">Dia 11</a></li>
								<li><a href="/posts/archive/2008/07/12">Dia 12</a></li>
								<li><a href="/posts/archive/2008/07/13">Dia 13</a></li>
								<li><a href="/posts/archive/2008/07/14">Dia 14</a></li>
								<li><a href="/posts/archive/2008/07/15">Dia 15</a></li>
								<li><a href="/posts/archive/2008/07/16">Dia 16</a></li>
								<li><a href="/posts/archive/2008/07/17">Dia 17</a></li>
								<li><a href="/posts/archive/2008/07/18">Dia 18</a></li>
								<li><a href="/posts/archive/2008/07/19">Dia 19</a></li>
								<li><a href="/posts/archive/2008/07/20">Dia 20</a></li>
								<li><a href="/posts/archive/2008/07/21">Dia 21</a></li>
								<li><a href="/posts/archive/2008/07/22">Dia 22</a></li>
								<li><a href="/posts/archive/2008/07/23">Dia 23</a></li>
								<li><a href="/posts/archive/2008/07/24">Dia 24</a></li>
								<li><a href="/posts/archive/2008/07/25">Dia 25</a></li>
								<li><a href="/posts/archive/2008/07/26">Dia 26</a></li>
								<li><a href="/posts/archive/2008/07/27">Dia 27</a></li>
								<li><a href="/posts/archive/2008/07/28">Dia 28</a></li>
								<li><a href="/posts/archive/2008/07/29">Dia 29</a></li>
								<li><a href="/posts/archive/2008/07/30">Dia 30</a></li>
								<li><a href="/posts/archive/2008/07/31">Dia 31</a></li>
							</ul>
						</li>
						<li>
							<a href="/posts/archive/2008/08"><? __('August') ?></a>
							<ul>
								<li><a href="/posts/archive/2008/08/01">Dia 1</a></li>
								<li><a href="/posts/archive/2008/08/02">Dia 2</a></li>
								<li><a href="/posts/archive/2008/08/03">Dia 3</a></li>
								<li><a href="/posts/archive/2008/08/04">Dia 4</a></li>
								<li><a href="/posts/archive/2008/08/05">Dia 5</a></li>
								<li><a href="/posts/archive/2008/08/06">Dia 6</a></li>
								<li><a href="/posts/archive/2008/08/07">Dia 7</a></li>
								<li><a href="/posts/archive/2008/08/08">Dia 8</a></li>
								<li><a href="/posts/archive/2008/08/09">Dia 9</a></li>
								<li><a href="/posts/archive/2008/08/10">Dia 10</a></li>
								<li><a href="/posts/archive/2008/08/11">Dia 11</a></li>
								<li><a href="/posts/archive/2008/08/12">Dia 12</a></li>
								<li><a href="/posts/archive/2008/08/13">Dia 13</a></li>
								<li><a href="/posts/archive/2008/08/14">Dia 14</a></li>
								<li><a href="/posts/archive/2008/08/15">Dia 15</a></li>
								<li><a href="/posts/archive/2008/08/16">Dia 16</a></li>
								<li><a href="/posts/archive/2008/08/17">Dia 17</a></li>
								<li><a href="/posts/archive/2008/08/18">Dia 18</a></li>
								<li><a href="/posts/archive/2008/08/19">Dia 19</a></li>
								<li><a href="/posts/archive/2008/08/20">Dia 20</a></li>
								<li><a href="/posts/archive/2008/08/21">Dia 21</a></li>
								<li><a href="/posts/archive/2008/08/22">Dia 22</a></li>
								<li><a href="/posts/archive/2008/08/23">Dia 23</a></li>
								<li><a href="/posts/archive/2008/08/24">Dia 24</a></li>
								<li><a href="/posts/archive/2008/08/25">Dia 25</a></li>
								<li><a href="/posts/archive/2008/08/26">Dia 26</a></li>
								<li><a href="/posts/archive/2008/08/27">Dia 27</a></li>
								<li><a href="/posts/archive/2008/08/28">Dia 28</a></li>
								<li><a href="/posts/archive/2008/08/29">Dia 29</a></li>
								<li><a href="/posts/archive/2008/08/30">Dia 30</a></li>
								<li><a href="/posts/archive/2008/08/31">Dia 31</a></li>
							</ul>
						</li>
						<li>
							<a href="/posts/archive/2008/09"><? __('September') ?></a>
							<ul>
								<li><a href="/posts/archive/2008/09/01">Dia 1</a></li>
								<li><a href="/posts/archive/2008/09/02">Dia 2</a></li>
								<li><a href="/posts/archive/2008/09/03">Dia 3</a></li>
								<li><a href="/posts/archive/2008/09/04">Dia 4</a></li>
								<li><a href="/posts/archive/2008/09/05">Dia 5</a></li>
								<li><a href="/posts/archive/2008/09/06">Dia 6</a></li>
								<li><a href="/posts/archive/2008/09/07">Dia 7</a></li>
								<li><a href="/posts/archive/2008/09/08">Dia 8</a></li>
								<li><a href="/posts/archive/2008/09/09">Dia 9</a></li>
								<li><a href="/posts/archive/2008/09/10">Dia 10</a></li>
								<li><a href="/posts/archive/2008/09/11">Dia 11</a></li>
								<li><a href="/posts/archive/2008/09/12">Dia 12</a></li>
								<li><a href="/posts/archive/2008/09/13">Dia 13</a></li>
								<li><a href="/posts/archive/2008/09/14">Dia 14</a></li>
								<li><a href="/posts/archive/2008/09/15">Dia 15</a></li>
								<li><a href="/posts/archive/2008/09/16">Dia 16</a></li>
								<li><a href="/posts/archive/2008/09/17">Dia 17</a></li>
								<li><a href="/posts/archive/2008/09/18">Dia 18</a></li>
								<li><a href="/posts/archive/2008/09/19">Dia 19</a></li>
								<li><a href="/posts/archive/2008/09/20">Dia 20</a></li>
								<li><a href="/posts/archive/2008/09/21">Dia 21</a></li>
								<li><a href="/posts/archive/2008/09/22">Dia 22</a></li>
								<li><a href="/posts/archive/2008/09/23">Dia 23</a></li>
								<li><a href="/posts/archive/2008/09/24">Dia 24</a></li>
								<li><a href="/posts/archive/2008/09/25">Dia 25</a></li>
								<li><a href="/posts/archive/2008/09/26">Dia 26</a></li>
								<li><a href="/posts/archive/2008/09/27">Dia 27</a></li>
								<li><a href="/posts/archive/2008/09/28">Dia 28</a></li>
								<li><a href="/posts/archive/2008/09/29">Dia 29</a></li>
								<li><a href="/posts/archive/2008/09/30">Dia 30</a></li>
							</ul>
						</li>
						<li>
							<a href="/posts/archive/2008/10"><? __('October') ?></a>
							<ul>
								<li><a href="/posts/archive/2008/10/01">Dia 1</a></li>
								<li><a href="/posts/archive/2008/10/02">Dia 2</a></li>
								<li><a href="/posts/archive/2008/10/03">Dia 3</a></li>
								<li><a href="/posts/archive/2008/10/04">Dia 4</a></li>
								<li><a href="/posts/archive/2008/10/05">Dia 5</a></li>
								<li><a href="/posts/archive/2008/10/06">Dia 6</a></li>
								<li><a href="/posts/archive/2008/10/07">Dia 7</a></li>
								<li><a href="/posts/archive/2008/10/08">Dia 8</a></li>
								<li><a href="/posts/archive/2008/10/09">Dia 9</a></li>
								<li><a href="/posts/archive/2008/10/10">Dia 10</a></li>
								<li><a href="/posts/archive/2008/10/11">Dia 11</a></li>
								<li><a href="/posts/archive/2008/10/12">Dia 12</a></li>
								<li><a href="/posts/archive/2008/10/13">Dia 13</a></li>
								<li><a href="/posts/archive/2008/10/14">Dia 14</a></li>
								<li><a href="/posts/archive/2008/10/15">Dia 15</a></li>
								<li><a href="/posts/archive/2008/10/16">Dia 16</a></li>
								<li><a href="/posts/archive/2008/10/17">Dia 17</a></li>
								<li><a href="/posts/archive/2008/10/18">Dia 18</a></li>
								<li><a href="/posts/archive/2008/10/19">Dia 19</a></li>
								<li><a href="/posts/archive/2008/10/20">Dia 20</a></li>
								<li><a href="/posts/archive/2008/10/21">Dia 21</a></li>
								<li><a href="/posts/archive/2008/10/22">Dia 22</a></li>
								<li><a href="/posts/archive/2008/10/23">Dia 23</a></li>
								<li><a href="/posts/archive/2008/10/24">Dia 24</a></li>
								<li><a href="/posts/archive/2008/10/25">Dia 25</a></li>
								<li><a href="/posts/archive/2008/10/26">Dia 26</a></li>
								<li><a href="/posts/archive/2008/10/27">Dia 27</a></li>
								<li><a href="/posts/archive/2008/10/28">Dia 28</a></li>
								<li><a href="/posts/archive/2008/10/29">Dia 29</a></li>
								<li><a href="/posts/archive/2008/10/30">Dia 30</a></li>
								<li><a href="/posts/archive/2008/10/31">Dia 31</a></li>
							</ul>
						</li>
						<li>
							<a href="/posts/archive/2008/11"><? __('November') ?></a>
							<ul>
								<li><a href="/posts/archive/2008/11/01">Dia 1</a></li>
								<li><a href="/posts/archive/2008/11/02">Dia 2</a></li>
								<li><a href="/posts/archive/2008/11/03">Dia 3</a></li>
								<li><a href="/posts/archive/2008/11/04">Dia 4</a></li>
								<li><a href="/posts/archive/2008/11/05">Dia 5</a></li>
								<li><a href="/posts/archive/2008/11/06">Dia 6</a></li>
								<li><a href="/posts/archive/2008/11/07">Dia 7</a></li>
								<li><a href="/posts/archive/2008/11/08">Dia 8</a></li>
								<li><a href="/posts/archive/2008/11/09">Dia 9</a></li>
								<li><a href="/posts/archive/2008/11/10">Dia 10</a></li>
								<li><a href="/posts/archive/2008/11/11">Dia 11</a></li>
								<li><a href="/posts/archive/2008/11/12">Dia 12</a></li>
								<li><a href="/posts/archive/2008/11/13">Dia 13</a></li>
								<li><a href="/posts/archive/2008/11/14">Dia 14</a></li>
								<li><a href="/posts/archive/2008/11/15">Dia 15</a></li>
								<li><a href="/posts/archive/2008/11/16">Dia 16</a></li>
								<li><a href="/posts/archive/2008/11/17">Dia 17</a></li>
								<li><a href="/posts/archive/2008/11/18">Dia 18</a></li>
								<li><a href="/posts/archive/2008/11/19">Dia 19</a></li>
								<li><a href="/posts/archive/2008/11/20">Dia 20</a></li>
								<li><a href="/posts/archive/2008/11/21">Dia 21</a></li>
								<li><a href="/posts/archive/2008/11/22">Dia 22</a></li>
								<li><a href="/posts/archive/2008/11/23">Dia 23</a></li>
								<li><a href="/posts/archive/2008/11/24">Dia 24</a></li>
								<li><a href="/posts/archive/2008/11/25">Dia 25</a></li>
								<li><a href="/posts/archive/2008/11/26">Dia 26</a></li>
								<li><a href="/posts/archive/2008/11/27">Dia 27</a></li>
								<li><a href="/posts/archive/2008/11/28">Dia 28</a></li>
								<li><a href="/posts/archive/2008/11/29">Dia 29</a></li>
								<li><a href="/posts/archive/2008/11/30">Dia 30</a></li>
							</ul>
						</li>
						<li>
							<a href="/posts/archive/2008/12"><? __('December') ?></a>
							<ul>
								<li><a href="/posts/archive/2008/12/01">Dia 1</a></li>
								<li><a href="/posts/archive/2008/12/02">Dia 2</a></li>
								<li><a href="/posts/archive/2008/12/03">Dia 3</a></li>
								<li><a href="/posts/archive/2008/12/04">Dia 4</a></li>
								<li><a href="/posts/archive/2008/12/05">Dia 5</a></li>
								<li><a href="/posts/archive/2008/12/06">Dia 6</a></li>
								<li><a href="/posts/archive/2008/12/07">Dia 7</a></li>
								<li><a href="/posts/archive/2008/12/08">Dia 8</a></li>
								<li><a href="/posts/archive/2008/12/09">Dia 9</a></li>
								<li><a href="/posts/archive/2008/12/10">Dia 10</a></li>
								<li><a href="/posts/archive/2008/12/11">Dia 11</a></li>
								<li><a href="/posts/archive/2008/12/12">Dia 12</a></li>
								<li><a href="/posts/archive/2008/12/13">Dia 13</a></li>
								<li><a href="/posts/archive/2008/12/14">Dia 14</a></li>
								<li><a href="/posts/archive/2008/12/15">Dia 15</a></li>
								<li><a href="/posts/archive/2008/12/16">Dia 16</a></li>
								<li><a href="/posts/archive/2008/12/17">Dia 17</a></li>
								<li><a href="/posts/archive/2008/12/18">Dia 18</a></li>
								<li><a href="/posts/archive/2008/12/19">Dia 19</a></li>
								<li><a href="/posts/archive/2008/12/20">Dia 20</a></li>
								<li><a href="/posts/archive/2008/12/21">Dia 21</a></li>
								<li><a href="/posts/archive/2008/12/22">Dia 22</a></li>
								<li><a href="/posts/archive/2008/12/23">Dia 23</a></li>
								<li><a href="/posts/archive/2008/12/24">Dia 24</a></li>
								<li><a href="/posts/archive/2008/12/25">Dia 25</a></li>
								<li><a href="/posts/archive/2008/12/26">Dia 26</a></li>
								<li><a href="/posts/archive/2008/12/27">Dia 27</a></li>
								<li><a href="/posts/archive/2008/12/28">Dia 28</a></li>
								<li><a href="/posts/archive/2008/12/29">Dia 29</a></li>
								<li><a href="/posts/archive/2008/12/30">Dia 30</a></li>
								<li><a href="/posts/archive/2008/12/31">Dia 31</a></li>
							</ul>
						</li>
                    </ul>
                </li>
				<li><a href="/posts/archive/2007">2007</a> <!-- Active -->
				     <ul>
				         <li><a href="/posts/archive/2007-01"><? __('January') ?></a>
								<ul>
										<li><a href="/posts/archive/2007/01/01">Dia 1</a></li>
										<li><a href="/posts/archive/2007/01/02">Dia 2</a></li>
										<li><a href="/posts/archive/2007/01/03">Dia 3</a></li>
										<li><a href="/posts/archive/2007/01/04">Dia 4</a></li>
										<li><a href="/posts/archive/2007/01/05">Dia 5</a></li>
										<li><a href="/posts/archive/2007/01/06">Dia 6</a></li>
										<li><a href="/posts/archive/2007/01/07">Dia 7</a></li>
										<li><a href="/posts/archive/2007/01/08">Dia 8</a></li>
										<li><a href="/posts/archive/2007/01/09">Dia 9</a></li>
										<li><a href="/posts/archive/2007/01/10">Dia 10</a></li>
										<li><a href="/posts/archive/2007/01/11">Dia 11</a></li>
										<li><a href="/posts/archive/2007/01/12">Dia 12</a></li>
										<li><a href="/posts/archive/2007/01/13">Dia 13</a></li>
										<li><a href="/posts/archive/2007/01/14">Dia 14</a></li>
										<li><a href="/posts/archive/2007/01/15">Dia 15</a></li>
										<li><a href="/posts/archive/2007/01/16">Dia 16</a></li>
										<li><a href="/posts/archive/2007/01/17">Dia 17</a></li>
										<li><a href="/posts/archive/2007/01/18">Dia 18</a></li>
										<li><a href="/posts/archive/2007/01/19">Dia 19</a></li>
										<li><a href="/posts/archive/2007/01/20">Dia 20</a></li>
										<li><a href="/posts/archive/2007/01/21">Dia 21</a></li>
										<li><a href="/posts/archive/2007/01/22">Dia 22</a></li>
										<li><a href="/posts/archive/2007/01/23">Dia 23</a></li>
										<li><a href="/posts/archive/2007/01/24">Dia 24</a></li>
										<li><a href="/posts/archive/2007/01/25">Dia 25</a></li>
										<li><a href="/posts/archive/2007/01/26">Dia 26</a></li>
										<li><a href="/posts/archive/2007/01/27">Dia 27</a></li>
										<li><a href="/posts/archive/2007/01/28">Dia 28</a></li>
										<li><a href="/posts/archive/2007/01/29">Dia 29</a></li>
										<li><a href="/posts/archive/2007/01/30">Dia 30</a></li>
										<li><a href="/posts/archive/2007/01/31">Dia 31</a></li>
									</ul>
							</li>
				         <li><a href="/posts/archive/2007/02"><? __('February') ?></a>
								<ul>
									<li><a href="/posts/archive/2007/02/01">Dia 1</a></li>
									<li><a href="/posts/archive/2007/02/02">Dia 2</a></li>
									<li><a href="/posts/archive/2007/02/03">Dia 3</a></li>
									<li><a href="/posts/archive/2007/02/04">Dia 4</a></li>
									<li><a href="/posts/archive/2007/02/05">Dia 5</a></li>
									<li><a href="/posts/archive/2007/02/06">Dia 6</a></li>
									<li><a href="/posts/archive/2007/02/07">Dia 7</a></li>
									<li><a href="/posts/archive/2007/02/08">Dia 8</a></li>
									<li><a href="/posts/archive/2007/02/09">Dia 9</a></li>
									<li><a href="/posts/archive/2007/02/10">Dia 10</a></li>
									<li><a href="/posts/archive/2007/02/11">Dia 11</a></li>
									<li><a href="/posts/archive/2007/02/12">Dia 12</a></li>
									<li><a href="/posts/archive/2007/02/13">Dia 13</a></li>
									<li><a href="/posts/archive/2007/02/14">Dia 14</a></li>
									<li><a href="/posts/archive/2007/02/15">Dia 15</a></li>
									<li><a href="/posts/archive/2007/02/16">Dia 16</a></li>
									<li><a href="/posts/archive/2007/02/17">Dia 17</a></li>
									<li><a href="/posts/archive/2007/02/18">Dia 18</a></li>
									<li><a href="/posts/archive/2007/02/19">Dia 19</a></li>
									<li><a href="/posts/archive/2007/02/20">Dia 20</a></li>
									<li><a href="/posts/archive/2007/02/21">Dia 21</a></li>
									<li><a href="/posts/archive/2007/02/22">Dia 22</a></li>
									<li><a href="/posts/archive/2007/02/23">Dia 23</a></li>
									<li><a href="/posts/archive/2007/02/24">Dia 24</a></li>
									<li><a href="/posts/archive/2007/02/25">Dia 25</a></li>
									<li><a href="/posts/archive/2007/02/26">Dia 26</a></li>
									<li><a href="/posts/archive/2007/02/27">Dia 27</a></li>
									<li><a href="/posts/archive/2007/02/28">Dia 28</a></li>
									<li><a href="/posts/archive/2007/02/29">Dia 29</a></li>
								</ul>
							</li>
							<li><a href="/posts/archive/2007/03"><? __('March') ?></a>
								<ul>
									<li><a href="/posts/archive/2007/03/01">Dia 1</a></li>
									<li><a href="/posts/archive/2007/03/02">Dia 2</a></li>
									<li><a href="/posts/archive/2007/03/03">Dia 3</a></li>
									<li><a href="/posts/archive/2007/03/04">Dia 4</a></li>
									<li><a href="/posts/archive/2007/03/05">Dia 5</a></li>
									<li><a href="/posts/archive/2007/03/06">Dia 6</a></li>
									<li><a href="/posts/archive/2007/03/07">Dia 7</a></li>
									<li><a href="/posts/archive/2007/03/08">Dia 8</a></li>
									<li><a href="/posts/archive/2007/03/09">Dia 9</a></li>
									<li><a href="/posts/archive/2007/03/10">Dia 10</a></li>
									<li><a href="/posts/archive/2007/03/11">Dia 11</a></li>
									<li><a href="/posts/archive/2007/03/12">Dia 12</a></li>
									<li><a href="/posts/archive/2007/03/13">Dia 13</a></li>
									<li><a href="/posts/archive/2007/03/14">Dia 14</a></li>
									<li><a href="/posts/archive/2007/03/15">Dia 15</a></li>
									<li><a href="/posts/archive/2007/03/16">Dia 16</a></li>
									<li><a href="/posts/archive/2007/03/17">Dia 17</a></li>
									<li><a href="/posts/archive/2007/03/18">Dia 18</a></li>
									<li><a href="/posts/archive/2007/03/19">Dia 19</a></li>
									<li><a href="/posts/archive/2007/03/20">Dia 20</a></li>
									<li><a href="/posts/archive/2007/03/21">Dia 21</a></li>
									<li><a href="/posts/archive/2007/03/22">Dia 22</a></li>
									<li><a href="/posts/archive/2007/03/23">Dia 23</a></li>
									<li><a href="/posts/archive/2007/03/24">Dia 24</a></li>
									<li><a href="/posts/archive/2007/03/25">Dia 25</a></li>
									<li><a href="/posts/archive/2007/03/26">Dia 26</a></li>
									<li><a href="/posts/archive/2007/03/27">Dia 27</a></li>
									<li><a href="/posts/archive/2007/03/28">Dia 28</a></li>
									<li><a href="/posts/archive/2007/03/29">Dia 29</a></li>
									<li><a href="/posts/archive/2007/03/30">Dia 30</a></li>
									<li><a href="/posts/archive/2007/03/30">Dia 31</a></li>
								</ul>
							</li>
							<li>
								<a href="/posts/archive/2007/04"><? __('April') ?></a>
								<ul>
									<li><a href="/posts/archive/2007/04/01">Dia 1</a></li>
									<li><a href="/posts/archive/2007/04/02">Dia 2</a></li>
									<li><a href="/posts/archive/2007/04/03">Dia 3</a></li>
									<li><a href="/posts/archive/2007/04/04">Dia 4</a></li>
									<li><a href="/posts/archive/2007/04/05">Dia 5</a></li>
									<li><a href="/posts/archive/2007/04/06">Dia 6</a></li>
									<li><a href="/posts/archive/2007/04/07">Dia 7</a></li>
									<li><a href="/posts/archive/2007/04/08">Dia 8</a></li>
									<li><a href="/posts/archive/2007/04/09">Dia 9</a></li>
									<li><a href="/posts/archive/2007/04/10">Dia 10</a></li>
									<li><a href="/posts/archive/2007/04/11">Dia 11</a></li>
									<li><a href="/posts/archive/2007/04/12">Dia 12</a></li>
									<li><a href="/posts/archive/2007/04/13">Dia 13</a></li>
									<li><a href="/posts/archive/2007/04/14">Dia 14</a></li>
									<li><a href="/posts/archive/2007/04/15">Dia 15</a></li>
									<li><a href="/posts/archive/2007/04/16">Dia 16</a></li>
									<li><a href="/posts/archive/2007/04/17">Dia 17</a></li>
									<li><a href="/posts/archive/2007/04/18">Dia 18</a></li>
									<li><a href="/posts/archive/2007/04/19">Dia 19</a></li>
									<li><a href="/posts/archive/2007/04/20">Dia 20</a></li>
									<li><a href="/posts/archive/2007/04/21">Dia 21</a></li>
									<li><a href="/posts/archive/2007/04/22">Dia 22</a></li>
									<li><a href="/posts/archive/2007/04/23">Dia 23</a></li>
									<li><a href="/posts/archive/2007/04/24">Dia 24</a></li>
									<li><a href="/posts/archive/2007/04/25">Dia 25</a></li>
									<li><a href="/posts/archive/2007/04/26">Dia 26</a></li>
									<li><a href="/posts/archive/2007/04/27">Dia 27</a></li>
									<li><a href="/posts/archive/2007/04/28">Dia 28</a></li>
									<li><a href="/posts/archive/2007/04/29">Dia 29</a></li>
									<li><a href="/posts/archive/2007/04/30">Dia 30</a></li>
								</ul>
							</li>
							<li>
								<a href="/posts/archive/2007/05"><? __('May') ?></a>
								<ul>
									<li><a href="/posts/archive/2007/05/01">Dia 1</a></li>
									<li><a href="/posts/archive/2007/05/02">Dia 2</a></li>
									<li><a href="/posts/archive/2007/05/03">Dia 3</a></li>
									<li><a href="/posts/archive/2007/05/04">Dia 4</a></li>
									<li><a href="/posts/archive/2007/05/05">Dia 5</a></li>
									<li><a href="/posts/archive/2007/05/06">Dia 6</a></li>
									<li><a href="/posts/archive/2007/05/07">Dia 7</a></li>
									<li><a href="/posts/archive/2007/05/08">Dia 8</a></li>
									<li><a href="/posts/archive/2007/05/09">Dia 9</a></li>
									<li><a href="/posts/archive/2007/05/10">Dia 10</a></li>
									<li><a href="/posts/archive/2007/05/11">Dia 11</a></li>
									<li><a href="/posts/archive/2007/05/12">Dia 12</a></li>
									<li><a href="/posts/archive/2007/05/13">Dia 13</a></li>
									<li><a href="/posts/archive/2007/05/14">Dia 14</a></li>
									<li><a href="/posts/archive/2007/05/15">Dia 15</a></li>
									<li><a href="/posts/archive/2007/05/16">Dia 16</a></li>
									<li><a href="/posts/archive/2007/05/17">Dia 17</a></li>
									<li><a href="/posts/archive/2007/05/18">Dia 18</a></li>
									<li><a href="/posts/archive/2007/05/19">Dia 19</a></li>
									<li><a href="/posts/archive/2007/05/20">Dia 20</a></li>
									<li><a href="/posts/archive/2007/05/21">Dia 21</a></li>
									<li><a href="/posts/archive/2007/05/22">Dia 22</a></li>
									<li><a href="/posts/archive/2007/05/23">Dia 23</a></li>
									<li><a href="/posts/archive/2007/05/24">Dia 24</a></li>
									<li><a href="/posts/archive/2007/05/25">Dia 25</a></li>
									<li><a href="/posts/archive/2007/05/26">Dia 26</a></li>
									<li><a href="/posts/archive/2007/05/27">Dia 27</a></li>
									<li><a href="/posts/archive/2007/05/28">Dia 28</a></li>
									<li><a href="/posts/archive/2007/05/29">Dia 29</a></li>
									<li><a href="/posts/archive/2007/05/30">Dia 30</a></li>
									<li><a href="/posts/archive/2007/05/31">Dia 31</a></li>
								</ul>
							</li>
							<li>
								<a href="/posts/archive/2007/06"><? __('June') ?></a>
								<ul>
									<li><a href="/posts/archive/2007/06/01">Dia 1</a></li>
									<li><a href="/posts/archive/2007/06/02">Dia 2</a></li>
									<li><a href="/posts/archive/2007/06/03">Dia 3</a></li>
									<li><a href="/posts/archive/2007/06/04">Dia 4</a></li>
									<li><a href="/posts/archive/2007/06/05">Dia 5</a></li>
									<li><a href="/posts/archive/2007/06/06">Dia 6</a></li>
									<li><a href="/posts/archive/2007/06/07">Dia 7</a></li>
									<li><a href="/posts/archive/2007/06/08">Dia 8</a></li>
									<li><a href="/posts/archive/2007/06/09">Dia 9</a></li>
									<li><a href="/posts/archive/2007/06/10">Dia 10</a></li>
									<li><a href="/posts/archive/2007/06/11">Dia 11</a></li>
									<li><a href="/posts/archive/2007/06/12">Dia 12</a></li>
									<li><a href="/posts/archive/2007/06/13">Dia 13</a></li>
									<li><a href="/posts/archive/2007/06/14">Dia 14</a></li>
									<li><a href="/posts/archive/2007/06/15">Dia 15</a></li>
									<li><a href="/posts/archive/2007/06/16">Dia 16</a></li>
									<li><a href="/posts/archive/2007/06/17">Dia 17</a></li>
									<li><a href="/posts/archive/2007/06/18">Dia 18</a></li>
									<li><a href="/posts/archive/2007/06/19">Dia 19</a></li>
									<li><a href="/posts/archive/2007/06/20">Dia 20</a></li>
									<li><a href="/posts/archive/2007/06/21">Dia 21</a></li>
									<li><a href="/posts/archive/2007/06/22">Dia 22</a></li>
									<li><a href="/posts/archive/2007/06/23">Dia 23</a></li>
									<li><a href="/posts/archive/2007/06/24">Dia 24</a></li>
									<li><a href="/posts/archive/2007/06/25">Dia 25</a></li>
									<li><a href="/posts/archive/2007/06/26">Dia 26</a></li>
									<li><a href="/posts/archive/2007/06/27">Dia 27</a></li>
									<li><a href="/posts/archive/2007/06/28">Dia 28</a></li>
									<li><a href="/posts/archive/2007/06/29">Dia 29</a></li>
									<li><a href="/posts/archive/2007/06/30">Dia 30</a></li>
								</ul>
							</li>
							<li>
								<a href="/posts/archive/2007/07"><? __('July') ?></a>
								<ul>
									<li><a href="/posts/archive/2007/07/01">Dia 1</a></li>
									<li><a href="/posts/archive/2007/07/02">Dia 2</a></li>
									<li><a href="/posts/archive/2007/07/03">Dia 3</a></li>
									<li><a href="/posts/archive/2007/07/04">Dia 4</a></li>
									<li><a href="/posts/archive/2007/07/05">Dia 5</a></li>
									<li><a href="/posts/archive/2007/07/06">Dia 6</a></li>
									<li><a href="/posts/archive/2007/07/07">Dia 7</a></li>
									<li><a href="/posts/archive/2007/07/08">Dia 8</a></li>
									<li><a href="/posts/archive/2007/07/09">Dia 9</a></li>
									<li><a href="/posts/archive/2007/07/10">Dia 10</a></li>
									<li><a href="/posts/archive/2007/07/11">Dia 11</a></li>
									<li><a href="/posts/archive/2007/07/12">Dia 12</a></li>
									<li><a href="/posts/archive/2007/07/13">Dia 13</a></li>
									<li><a href="/posts/archive/2007/07/14">Dia 14</a></li>
									<li><a href="/posts/archive/2007/07/15">Dia 15</a></li>
									<li><a href="/posts/archive/2007/07/16">Dia 16</a></li>
									<li><a href="/posts/archive/2007/07/17">Dia 17</a></li>
									<li><a href="/posts/archive/2007/07/18">Dia 18</a></li>
									<li><a href="/posts/archive/2007/07/19">Dia 19</a></li>
									<li><a href="/posts/archive/2007/07/20">Dia 20</a></li>
									<li><a href="/posts/archive/2007/07/21">Dia 21</a></li>
									<li><a href="/posts/archive/2007/07/22">Dia 22</a></li>
									<li><a href="/posts/archive/2007/07/23">Dia 23</a></li>
									<li><a href="/posts/archive/2007/07/24">Dia 24</a></li>
									<li><a href="/posts/archive/2007/07/25">Dia 25</a></li>
									<li><a href="/posts/archive/2007/07/26">Dia 26</a></li>
									<li><a href="/posts/archive/2007/07/27">Dia 27</a></li>
									<li><a href="/posts/archive/2007/07/28">Dia 28</a></li>
									<li><a href="/posts/archive/2007/07/29">Dia 29</a></li>
									<li><a href="/posts/archive/2007/07/30">Dia 30</a></li>
									<li><a href="/posts/archive/2007/07/31">Dia 31</a></li>
								</ul>
							</li>
							<li>
								<a href="/posts/archive/2007/08"><? __('August') ?></a>
								<ul>
									<li><a href="/posts/archive/2007/08/01">Dia 1</a></li>
									<li><a href="/posts/archive/2007/08/02">Dia 2</a></li>
									<li><a href="/posts/archive/2007/08/03">Dia 3</a></li>
									<li><a href="/posts/archive/2007/08/04">Dia 4</a></li>
									<li><a href="/posts/archive/2007/08/05">Dia 5</a></li>
									<li><a href="/posts/archive/2007/08/06">Dia 6</a></li>
									<li><a href="/posts/archive/2007/08/07">Dia 7</a></li>
									<li><a href="/posts/archive/2007/08/08">Dia 8</a></li>
									<li><a href="/posts/archive/2007/08/09">Dia 9</a></li>
									<li><a href="/posts/archive/2007/08/10">Dia 10</a></li>
									<li><a href="/posts/archive/2007/08/11">Dia 11</a></li>
									<li><a href="/posts/archive/2007/08/12">Dia 12</a></li>
									<li><a href="/posts/archive/2007/08/13">Dia 13</a></li>
									<li><a href="/posts/archive/2007/08/14">Dia 14</a></li>
									<li><a href="/posts/archive/2007/08/15">Dia 15</a></li>
									<li><a href="/posts/archive/2007/08/16">Dia 16</a></li>
									<li><a href="/posts/archive/2007/08/17">Dia 17</a></li>
									<li><a href="/posts/archive/2007/08/18">Dia 18</a></li>
									<li><a href="/posts/archive/2007/08/19">Dia 19</a></li>
									<li><a href="/posts/archive/2007/08/20">Dia 20</a></li>
									<li><a href="/posts/archive/2007/08/21">Dia 21</a></li>
									<li><a href="/posts/archive/2007/08/22">Dia 22</a></li>
									<li><a href="/posts/archive/2007/08/23">Dia 23</a></li>
									<li><a href="/posts/archive/2007/08/24">Dia 24</a></li>
									<li><a href="/posts/archive/2007/08/25">Dia 25</a></li>
									<li><a href="/posts/archive/2007/08/26">Dia 26</a></li>
									<li><a href="/posts/archive/2007/08/27">Dia 27</a></li>
									<li><a href="/posts/archive/2007/08/28">Dia 28</a></li>
									<li><a href="/posts/archive/2007/08/29">Dia 29</a></li>
									<li><a href="/posts/archive/2007/08/30">Dia 30</a></li>
									<li><a href="/posts/archive/2007/08/31">Dia 31</a></li>
								</ul>
							</li>
							<li>
								<a href="/posts/archive/2007/09"><? __('September') ?></a>
								<ul>
									<li><a href="/posts/archive/2007/09/01">Dia 1</a></li>
									<li><a href="/posts/archive/2007/09/02">Dia 2</a></li>
									<li><a href="/posts/archive/2007/09/03">Dia 3</a></li>
									<li><a href="/posts/archive/2007/09/04">Dia 4</a></li>
									<li><a href="/posts/archive/2007/09/05">Dia 5</a></li>
									<li><a href="/posts/archive/2007/09/06">Dia 6</a></li>
									<li><a href="/posts/archive/2007/09/07">Dia 7</a></li>
									<li><a href="/posts/archive/2007/09/08">Dia 8</a></li>
									<li><a href="/posts/archive/2007/09/09">Dia 9</a></li>
									<li><a href="/posts/archive/2007/09/10">Dia 10</a></li>
									<li><a href="/posts/archive/2007/09/11">Dia 11</a></li>
									<li><a href="/posts/archive/2007/09/12">Dia 12</a></li>
									<li><a href="/posts/archive/2007/09/13">Dia 13</a></li>
									<li><a href="/posts/archive/2007/09/14">Dia 14</a></li>
									<li><a href="/posts/archive/2007/09/15">Dia 15</a></li>
									<li><a href="/posts/archive/2007/09/16">Dia 16</a></li>
									<li><a href="/posts/archive/2007/09/17">Dia 17</a></li>
									<li><a href="/posts/archive/2007/09/18">Dia 18</a></li>
									<li><a href="/posts/archive/2007/09/19">Dia 19</a></li>
									<li><a href="/posts/archive/2007/09/20">Dia 20</a></li>
									<li><a href="/posts/archive/2007/09/21">Dia 21</a></li>
									<li><a href="/posts/archive/2007/09/22">Dia 22</a></li>
									<li><a href="/posts/archive/2007/09/23">Dia 23</a></li>
									<li><a href="/posts/archive/2007/09/24">Dia 24</a></li>
									<li><a href="/posts/archive/2007/09/25">Dia 25</a></li>
									<li><a href="/posts/archive/2007/09/26">Dia 26</a></li>
									<li><a href="/posts/archive/2007/09/27">Dia 27</a></li>
									<li><a href="/posts/archive/2007/09/28">Dia 28</a></li>
									<li><a href="/posts/archive/2007/09/29">Dia 29</a></li>
									<li><a href="/posts/archive/2007/09/30">Dia 30</a></li>
								</ul>
							</li>
							<li>
								<a href="/posts/archive/2007/10"><? __('October') ?></a>
								<ul>
									<li><a href="/posts/archive/2007/10/01">Dia 1</a></li>
									<li><a href="/posts/archive/2007/10/02">Dia 2</a></li>
									<li><a href="/posts/archive/2007/10/03">Dia 3</a></li>
									<li><a href="/posts/archive/2007/10/04">Dia 4</a></li>
									<li><a href="/posts/archive/2007/10/05">Dia 5</a></li>
									<li><a href="/posts/archive/2007/10/06">Dia 6</a></li>
									<li><a href="/posts/archive/2007/10/07">Dia 7</a></li>
									<li><a href="/posts/archive/2007/10/08">Dia 8</a></li>
									<li><a href="/posts/archive/2007/10/09">Dia 9</a></li>
									<li><a href="/posts/archive/2007/10/10">Dia 10</a></li>
									<li><a href="/posts/archive/2007/10/11">Dia 11</a></li>
									<li><a href="/posts/archive/2007/10/12">Dia 12</a></li>
									<li><a href="/posts/archive/2007/10/13">Dia 13</a></li>
									<li><a href="/posts/archive/2007/10/14">Dia 14</a></li>
									<li><a href="/posts/archive/2007/10/15">Dia 15</a></li>
									<li><a href="/posts/archive/2007/10/16">Dia 16</a></li>
									<li><a href="/posts/archive/2007/10/17">Dia 17</a></li>
									<li><a href="/posts/archive/2007/10/18">Dia 18</a></li>
									<li><a href="/posts/archive/2007/10/19">Dia 19</a></li>
									<li><a href="/posts/archive/2007/10/20">Dia 20</a></li>
									<li><a href="/posts/archive/2007/10/21">Dia 21</a></li>
									<li><a href="/posts/archive/2007/10/22">Dia 22</a></li>
									<li><a href="/posts/archive/2007/10/23">Dia 23</a></li>
									<li><a href="/posts/archive/2007/10/24">Dia 24</a></li>
									<li><a href="/posts/archive/2007/10/25">Dia 25</a></li>
									<li><a href="/posts/archive/2007/10/26">Dia 26</a></li>
									<li><a href="/posts/archive/2007/10/27">Dia 27</a></li>
									<li><a href="/posts/archive/2007/10/28">Dia 28</a></li>
									<li><a href="/posts/archive/2007/10/29">Dia 29</a></li>
									<li><a href="/posts/archive/2007/10/30">Dia 30</a></li>
									<li><a href="/posts/archive/2007/10/31">Dia 31</a></li>
								</ul>
							</li>
							<li>
								<a href="/posts/archive/2007/11"><? __('November') ?></a>
								<ul>
									<li><a href="/posts/archive/2007/11/01">Dia 1</a></li>
									<li><a href="/posts/archive/2007/11/02">Dia 2</a></li>
									<li><a href="/posts/archive/2007/11/03">Dia 3</a></li>
									<li><a href="/posts/archive/2007/11/04">Dia 4</a></li>
									<li><a href="/posts/archive/2007/11/05">Dia 5</a></li>
									<li><a href="/posts/archive/2007/11/06">Dia 6</a></li>
									<li><a href="/posts/archive/2007/11/07">Dia 7</a></li>
									<li><a href="/posts/archive/2007/11/08">Dia 8</a></li>
									<li><a href="/posts/archive/2007/11/09">Dia 9</a></li>
									<li><a href="/posts/archive/2007/11/10">Dia 10</a></li>
									<li><a href="/posts/archive/2007/11/11">Dia 11</a></li>
									<li><a href="/posts/archive/2007/11/12">Dia 12</a></li>
									<li><a href="/posts/archive/2007/11/13">Dia 13</a></li>
									<li><a href="/posts/archive/2007/11/14">Dia 14</a></li>
									<li><a href="/posts/archive/2007/11/15">Dia 15</a></li>
									<li><a href="/posts/archive/2007/11/16">Dia 16</a></li>
									<li><a href="/posts/archive/2007/11/17">Dia 17</a></li>
									<li><a href="/posts/archive/2007/11/18">Dia 18</a></li>
									<li><a href="/posts/archive/2007/11/19">Dia 19</a></li>
									<li><a href="/posts/archive/2007/11/20">Dia 20</a></li>
									<li><a href="/posts/archive/2007/11/21">Dia 21</a></li>
									<li><a href="/posts/archive/2007/11/22">Dia 22</a></li>
									<li><a href="/posts/archive/2007/11/23">Dia 23</a></li>
									<li><a href="/posts/archive/2007/11/24">Dia 24</a></li>
									<li><a href="/posts/archive/2007/11/25">Dia 25</a></li>
									<li><a href="/posts/archive/2007/11/26">Dia 26</a></li>
									<li><a href="/posts/archive/2007/11/27">Dia 27</a></li>
									<li><a href="/posts/archive/2007/11/28">Dia 28</a></li>
									<li><a href="/posts/archive/2007/11/29">Dia 29</a></li>
									<li><a href="/posts/archive/2007/11/30">Dia 30</a></li>
								</ul>
							</li>
							<li>
								<a href="/posts/archive/2007/12"><? __('December') ?></a>
								<ul>
									<li><a href="/posts/archive/2007/12/01">Dia 1</a></li>
									<li><a href="/posts/archive/2007/12/02">Dia 2</a></li>
									<li><a href="/posts/archive/2007/12/03">Dia 3</a></li>
									<li><a href="/posts/archive/2007/12/04">Dia 4</a></li>
									<li><a href="/posts/archive/2007/12/05">Dia 5</a></li>
									<li><a href="/posts/archive/2007/12/06">Dia 6</a></li>
									<li><a href="/posts/archive/2007/12/07">Dia 7</a></li>
									<li><a href="/posts/archive/2007/12/08">Dia 8</a></li>
									<li><a href="/posts/archive/2007/12/09">Dia 9</a></li>
									<li><a href="/posts/archive/2007/12/10">Dia 10</a></li>
									<li><a href="/posts/archive/2007/12/11">Dia 11</a></li>
									<li><a href="/posts/archive/2007/12/12">Dia 12</a></li>
									<li><a href="/posts/archive/2007/12/13">Dia 13</a></li>
									<li><a href="/posts/archive/2007/12/14">Dia 14</a></li>
									<li><a href="/posts/archive/2007/12/15">Dia 15</a></li>
									<li><a href="/posts/archive/2007/12/16">Dia 16</a></li>
									<li><a href="/posts/archive/2007/12/17">Dia 17</a></li>
									<li><a href="/posts/archive/2007/12/18">Dia 18</a></li>
									<li><a href="/posts/archive/2007/12/19">Dia 19</a></li>
									<li><a href="/posts/archive/2007/12/20">Dia 20</a></li>
									<li><a href="/posts/archive/2007/12/21">Dia 21</a></li>
									<li><a href="/posts/archive/2007/12/22">Dia 22</a></li>
									<li><a href="/posts/archive/2007/12/23">Dia 23</a></li>
									<li><a href="/posts/archive/2007/12/24">Dia 24</a></li>
									<li><a href="/posts/archive/2007/12/25">Dia 25</a></li>
									<li><a href="/posts/archive/2007/12/26">Dia 26</a></li>
									<li><a href="/posts/archive/2007/12/27">Dia 27</a></li>
									<li><a href="/posts/archive/2007/12/28">Dia 28</a></li>
									<li><a href="/posts/archive/2007/12/29">Dia 29</a></li>
									<li><a href="/posts/archive/2007/12/30">Dia 30</a></li>
									<li><a href="/posts/archive/2007/12/31">Dia 31</a></li>
								</ul>
							</li>
				     </ul>
				 </li>
            </ul>

			<script type="text/javascript">
			$('ul.nav a').collapsor();
			</script>
                
            <!-- RSS feeds -->
            <div class="padding">

                <h4 class="margin">RSS</h4>
                
                <p class="nom">
                    <a href="/feed" class="rss">Artigos</a><br />
                </p>
               
				<h4 class="login">Login</h4>
				
					<?php
					 if (!isset($_SESSION["Auth"]["User"]["name"])) {
					    if  ($session->check('Message.auth')) $session->flash('auth');
					    echo $form->create('User', array('action' => 'login'));
					    echo $form->input('username');
					    echo $form->input('password');
					    echo $form->end('Login');
						echo "<p><a href='/users/register'>Registar</a></p>";
						echo "<p><a href='/users/reset'>Recuperar password</a></p>";
					} else {
						echo "Olá, " . $_SESSION["Auth"]["User"]["name"] . "<br/>";
						echo "<span><a href='/users/logout'>Sair</a></span>";
					}
					?>
					
				 
                <h4 class="margin">Procurar</h4>

                <form action="/posts/search" method="get">
                    <div id="search" class="box">
                        <input type="text" size="20" id="search-input" name='q' /><input type="submit" id="search-submit" value="Procurar" />
                    </div> <!-- /search -->
                </form>

            </div> <!-- /padding -->

        <hr class="noscreen" />          
        </div> <!-- /aside -->
        
        <div id="aside-bottom"></div>
    
    </div> <!-- /cols -->

    <!-- Footer -->
    <div id="footer">

        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->
        <p class="f-right" style="color:white"><a href="http://www.nuviotemplates.com/" style="color:white">Free web templates</a> by <a style="color:white" href="http://www.nuvio.cz/">Nuvio</a></p>
        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->

        <p>Copyright &copy;&nbsp;2008 <strong><a href="#">Planetuga</a></strong>, Código: &copy;&nbsp;2008 <strong><a href="http://www.joelcalado.com">Joel Calado</a></strong></p>

    </div> <!-- /footer -->

</div> <!-- /main -->

</body>
</html>