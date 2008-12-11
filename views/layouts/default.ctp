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
	<script type="text/javascript" src="/js/jquery.innerfade.js"></script>
	<script type="text/javascript" src="/js/jquery-ui.packed.js"></script>
	<script type="text/javascript" src="/js/jquery.collapsor.min.js"></script>

    <link rel="stylesheet" media="screen,projection" type="text/css" href="/css/reset.css" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="/css/main.css" />
    <!--[if lte IE 6]><link rel="stylesheet" type="text/css" href="/css/main-msie.css" /><![endif]-->
    <link rel="stylesheet" media="screen,projection" type="text/css" href="/css/style.css" />
    <link rel="stylesheet" media="print" type="text/css" href="/css/print.css" />

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

        <ul class="box">
            <li id="tray-active"><a href="/">Homepage</a></li> <!-- Active page -->
            <li><a href="/posts">Planeta</a></li>
            <li><a href="/users">Utilizadores</a></li>
            <li><a href="/feeds">Feeds</a></li>
            <li><a href="/posts/archive">Arquivo</a></li>
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
                <h4 class="nom">Categorias</h4>
            </div> <!-- /padding -->
            
            <ul class="nav">
                <li id="nav-active"><a href="/posts/category/tecnologia">Tecnologia</a> <!-- Active -->
                    <ul>
                        <li><a href="/posts/category/internet">Internet</a></li>
                        <li><a href="/posts/category/apple">Apple</a></li>
						<li><a href="/posts/category/linux">Linux</a></li>
                    </ul>
                </li>
                <li><a href="/posts/category/design">Design</a></li>
                <li><a href="/posts/category/cultura">Cultura</a></li>
                <li><a href="/posts/category/desporto">Desporto</a></li>
				<li><a href="/posts/category/humor">Humor</a></li>
				<li><a href="/posts/category/Música">Música</a></li>
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