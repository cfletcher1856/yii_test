<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>OneX - <?php echo Yii::app()->name ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/reset.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl ?>/css/media-queries.css" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:700,400,400italic,700italic' rel='stylesheet' type='text/css'>

<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body id="home">
<div id="wrapper">

<header>
<h1 class="title"><a href="index.html"><?php echo Yii::app()->name ?></a></h1>
<h2>Tagline <span>&amp;</span> Some clever comment about the company</h2>

<div class="back">
<a href="#">Back</a>
</div>

<nav>
	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Home', 'url'=>array('/site/index')),
			array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
			array('label'=>'Contact', 'url'=>array('/site/contact')),
			array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		),
	)); ?>
	<div class="clearfix"></div>
</nav>	
</header>

<section id="main-content">
<div id="featured">
	<?php echo $content ?>
</div> <!-- END Featured -->
<hr/>
<div id="latest">
<section class="left-col">
<h3>Latest Articles :</h3><br/>
<h4><a href="#">Blog 1</a></h4>
<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. &nbsp; <a href="#">Continue Reading &rarr;</a></p>
<h4><a href="#">Blog 2</a></h4>
<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. &nbsp; <a href="#">Continue Reading &rarr;</a></p>
<h4><a href="#">Blog 3</a></h4>
<p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum. &nbsp; <a href="#">Continue Reading &rarr;</a></p>
</section> <!-- END Left Column -->	

<aside class="sidebar">
<h4><a href="#">Archives</a></h4>
<ul>
<li><a href="#">July 2010</a></li>
<li><a href="#">August 2010</a></li>
<li><a href="#">September 2010</a></li>
</ul>
<br/>
<h4><a href="#">Categories</a></h4>
<ul>
<li><a href="#">Articles</a></li>
<li><a href="#">Tutorials</a></li>
<li><a href="#">Roundups</a></li>
</ul>
<br/>
<h4><a href="#">Social</a></h4>
<ul>
<li><a href="#">Facebook</a></li>
<li><a href="#">Twitter</a></li>
<li><a href="#">RSS</a></li>
<li><a href="#">Google+</a></li>
</ul>	
</aside>
</div> <!-- END Latest -->
<div class="clearfix"></div>
<hr/>
<div id="about">
<h3>About</h3>
<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas sed diam eget risus varius blandit sit amet non magna. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec id elit non mi porta gravida at eget metus.<br/><br/>

Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Curabitur blandit tempus porttitor. Donec sed odio dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed posuere consectetur est at lobortis. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
</div>	
</section>	
<hr/>
<footer>
<p>&copy; 2011 - Responsive Website Template</p>
</footer>		

</div> <!-- END Wrapper -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
		var pageTracker = _gat._getTracker("UA-8453623-1");
		pageTracker._trackPageview();
} catch(err) {}
</script>

<script src="http://static.getclicky.com/js" type="text/javascript"></script>
<script type="text/javascript">clicky.init(150075);</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="http://in.getclicky.com/150075ns.gif" /></p></noscript></body>
</html>
