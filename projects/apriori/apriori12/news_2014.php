<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News 2014- a priori</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
		<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
        <![endif]-->

        <link href="css/bootstrap.css" media="all" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="font/iconvault-preview.css" />
        <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
        <link href="css/style-responsive.css" media="all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/colors/orange.css" id="colors">
        <link href="css/flexslider.css" media="all" rel="stylesheet" type="text/css" />

        <!-- Styles Switcher -->
        <link rel="stylesheet" type="text/css" href="css/switcher.css">
		<link rel="stylesheet" href="top_style.css" />
	<link rel="stylesheet" href="top_reset.css" />
	<link rel="stylesheet" href="top_main.css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400">
	<link rel="icon" type="image/png"  href="img/favicon.png" />
    </head>
    <body> 

        <!-- Start Main Nav -->

            <?php include "topmenu.php"; ?>
       

        <!-- End Main nav-->

        <!-- Start Wrap- -->

        <div id="wrap">
            <div class="main" id="main-no-space" >  
                <div id="main-page">
					
                    <div id="wrapper" class="container containBmargin2">
							
						
							
						 <div id="breadcrumbs"class= " " style="border-bottom:none;margin-bottom:26px !important;">
								<div class="breadcrumbs pull-left">
							   <ul class="bradcumul">
								  <li class=""><a  style=" color: #f28d00;" href="index.php">HOME</a><i class="icon-chevron-right icon-white marginLft8"></i></li>
								  <li><a href="news_all.php">What’s new</a><i class="icon-chevron-right icon-white marginLft8"></i></li><li><a>2014</a></li>
							   </ul>
							</div>
                        </div>
						
                        <div id="page-title"class= "portfolioBg portfolioBgMar">
                          
                            <!--<i class="step icon-medicalservice size-36" style=""></i> -->
							<h2 class=" marginLeft70px marginTop-43px" style="color:#ffffff;font-weight:bold;font-size:25px;margin-top:18px; margin-left:10px;">What’s new　一覧</h2>
                        </div>
						<div class="row">
							<div class="container marginLeft30 contantdes">
								<div class="content" style="">
									<div class="span8 portfolio-item paraLine newsAllLeft" style="">
										
										<div class="rowNewsAll">
											<h5 class="" align="left">2014.10.14</h5>
											<p align="left">東大生協第一購買部にてアプリオリのデザイン・翻訳・ウェブ制作・メディカルイラストサービスの取り扱いがスタートしました。
詳しくは<a  target="_blank"  href="http://www.utcoop.or.jp/s1/news/news_detail_3240.html">こちら</a></p>
											<div class="hr"></div>
										</div>
										<div class="rowNewsAll">
											<h5 class="" align="left">2014.<br/>10.15～17</h5>
											<p align="left">BIO Japan2014 (於：パシフィコ横浜) に出展しました。</p>
											<div class="hr"></div>
										</div>
									</div>	

									<div class="span4 portfolio-item span4Topimg newsAllRightContent " style=" ">
										<div class="clientComment commentBg newsAllRightSec" style=" ">
											<ul>
												<li><a href="news_2015.php?year=2015" class="activeNewsYear"><i class="icon-caret-right icon-white "></i> 2015</a></li>
												<li class="lastRow"><a style="color:#F96E06 !important;" href="news_2014.php?year=2014" class="activeNewsYear" style=""><i class="icon-caret-right icon-white "></i> 2014</a></li>
											</ul>
										</div>
										
									</div>
									
								</div>	

							</div>

                        </div>
						 
                    </div>
                </div>
            </div>  
        </div>

        <!-- End Wrap-->
           <?php include "footer.php"; ?>
      

        <!-- End Footer-->

        <!-- Javascripts================================================== -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap-tab.js"></script>
        <script src="js/bootstrap-transition.js"></script>
        <script src="js/fancybox.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/switcher.js"></script>
        <script src="js/isotope.js"></script>
        <script>
            $(window).load(function() {
                var $container = $('#portfolio-wrapper');
                $select = $('#filters select');
       	
                // initialize Isotope
                $container.isotope({
                    // options...
                    resizable: false, // disable normal resizing
                    // set columnWidth to a percentage of container width
            
                    masonry: {
                        columnWidth: $container.width() / 12
                    }
                });
                $container.isotope({
                    itemSelector : '.portfolio-item'
        
                });
                // update columnWidth on window resize
                $(window).smartresize(function(){
                    $container.isotope({
                        // update columnWidth to a percentage of container width
                        masonry: {
                            columnWidth: $container.width() / 12
                        }
                    });
                });
		
		
	
	  
                $select.change(function() {
                    var filters = $(this).val();
	
                    $container.isotope({
                        filter: filters
                    });
                });
	  
                var $optionSets = $('#filters .option-set'),
                $optionLinks = $optionSets.find('a');

                $optionLinks.click(function(){
                    var $this = $(this);
                    // don't proceed if already selected
                    if ( $this.hasClass('selected') ) {
                        return false;
                    }
                    var $optionSet = $this.parents('.option-set');
                    $optionSet.find('.selected').removeClass('selected');
                    $this.addClass('selected');
  
                    // make option object dynamically, i.e. { filter: '.my-filter-class' }
                    var options = {},
                    key = $optionSet.attr('data-option-key'),
                    value = $this.attr('data-option-value');
                    // parse 'false' as false boolean
                    value = value === 'false' ? false : value;
                    options[ key ] = value;
                    if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                        // changes in layout modes need extra logic
                        changeLayoutMode( $this, options )
                    } else {
                        // otherwise, apply new options
                        $container.isotope( options );
                    }
		
                    return false;
                });
            });
        </script>

<script>

 

$(function(){

 

    $(document).on( 'scroll', function(){

 

        if ($(window).scrollTop() > 100) {

            $('.scroll-top-wrapper').addClass('show');

        } else {

            $('.scroll-top-wrapper').removeClass('show');

        }

    });

});



 

$(function(){

 

    $(document).on( 'scroll', function(){

 

        if ($(window).scrollTop() > 100) {

            $('.scroll-top-wrapper').addClass('show');

        } else {

            $('.scroll-top-wrapper').removeClass('show');

        }
    });
    $('.scroll-top-wrapper').on('click', scrollToTop);

});

 

function scrollToTop() {

    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;

    element = $('body');

    offset = element.offset();
    offsetTop = offset.top;
    $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
}
</script>

</body>
</html>