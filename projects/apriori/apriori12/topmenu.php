<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="Demo of Drop-Down Navigation: Touch-Friendly and Responsive" />
	<meta name="robots" content="all">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<link rel="canonical" href="/examples/drop-down-navigation-touch-friendly-and-responsive">
	<link rel="icon" href="/theme/img/favicon.ico" />
	<link rel="stylesheet" href="css/top_css/top_style.css" />
	
	<link rel="stylesheet" href="css/top_css/top_reset.css" />
	<link rel="stylesheet" href="css/top_css/top_main.css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400">

</head>

<body>
<div class="navbar navbar-fixed-top">

	<div class="navbar-inner" data-topbar role="navigation" >

		<div class="container">


			<a href="index.php" class="brand">

				<img id="logo" alt="a priori" src="img/logo_apriroi.jpg"></a> 

			<div class="nav-collapse collapse navbar-responsive-collapse">

			</div>

		</div>

	</div>

</div>
		
<nav id="nav" role="navigation">

	<a href="#nav" title="Show navigation">Show navigation</a>
	<a href="#" title="Hide navigation">Hide navigation</a>
	<ul class="clearfix">

					<li class="topMenu"><a href="index.php">Home</a></li>
<!--

					<li id="sub" role="navigation">
					<a href="#sub" aria-haspopup="true"><span>Services</span><b class="caret caret_up"></b></a>
-->
				   

					<li class="topMenu dropdown">
		<!--			<a href="#nav"aria-haspopup="true"><span>Services</span><b class="caret caret_up"></b></a> -->
						<a href="#" class="dropdown-toggle" role="menu" data-toggle="dropdown">Services<b class=""></b></a>
						<ul class="topMenu_drop displayBlock dropdown-menuAdd">
				
							<li><a href="medical_illustration.php">メディカルイラスト</a></li>

							<li><a href="design_print.php">デザイン</a></li>

							<li><a href="web_work.php">Web制作</a></li>

							<li><a href="cg_work.php">CG制作</a></li>

							<li><a href="translation.php">論文翻訳</a></li>

							<li><a class="menu-anchor" style="border-bottom:none;" href="interpretation.php">通訳</a></li>

						 </ul>
						 <a style="display:none;" href="#" title="Hide navigation">Hide navigation</a>

					</li>

					<li  class="topMenu"><a href="portfolio.php">Portfolio</a></li>

					 

					<li class="topMenu"><a href="contact.php">Contact Us</a></li>

				</ul>
</nav>


<script src="top_main.js"></script>
<script src="top_doubletaptogo.js"></script>
<script>
	$( function()
	{
		$( '#nav li:has(ul)' ).doubleTapToGo();
	});
</script>

<script>var _gaq = _gaq || []; _gaq.push(['_setAccount', 'UA-7572727-1']); _gaq.push(['_trackPageview']); (function() { var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s); })();</script>
<script type="text/javascript">
    jQuery(document).ready(function($){
 		var url = window.location.href;
 
		$('.topMenu a').filter(function() {
			return this.href == url;
		}).addClass('activeMenu');
    });
</script>



</body>

</html>