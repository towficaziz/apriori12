<?php 
include "admin/connect.php"; 

$year= $_GET['year'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News All- a priori</title>
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
								  <li><a href="#">What’s new</a></li>
							   </ul>
							</div>
                        </div>
						
                        <div id="page-title"class= "portfolioBg portfolioBgMar">
                          
                            <!--<i class="step icon-medicalservice size-36" style=""></i> -->
							<h2 class=" marginLeft70px marginTop-43px" style="color:#ffffff;font-weight:bold;font-size:25px;margin-top:18px; margin-left:10px;">What’s new　一覧</h2>
                        </div>
						<div class="row">
							<div class="container marginLeft30 contantdes">
								<?php if(empty($year)){?>
								<div class="content" style="">
									<div class="span8 portfolio-item paraLine newsAllLeft" style="">
										
									<table width="100%" border="0" cellpadding="5" cellspacing="5" style="border:0;">
										<?php 
											$result = mysql_query("SELECT * FROM news");$cnt=0;
											$maxRow = mysql_num_rows($result);
											  // how many rows to show per page
												$rowsPerPage = 10;
												// by default we show first page
												$pageNum = 1;
												 if(isset($_GET['page']))
																{
																	$pageNum = $_GET['page'];
																}
												$offset = ($pageNum - 1) * $rowsPerPage;
												$maxPage = ceil($maxRow / $rowsPerPage);
												$str = "select * from news WHERE status='active' ORDER by entry_date DESC LIMIT $offset, $rowsPerPage";	
												//$result = mysql_query("SELECT * FROM fb_app_reg_tbl WHERE active=2");$cnt=0;
												$result_two = mysql_query($str);
												 
											$sl=($pageNum - 1) * $rowsPerPage+1;
									
											while($row = mysql_fetch_assoc($result_two))
												//while($row = mysql_fetch_array($result))
											{	
													 
												//1px solid #e9e9e9
										?>
										
									 
										<tr style="">
 											<td align="" class="rowNewsAll">
 												<?php if (($row['news_day_end'])=='No'){ ?>
													<h5 style=" " align="left"><?php echo $row['news_year'];?>.<?php echo $row['news_month'];?>.<?php echo $row['news_day_start'];?></h5>
												<?php }else{ ?>
													<h5 style="" align="left"><?php echo $row['news_year'];?>.<br/><?php echo $row['news_month'];?>.<?php echo $row['news_day_start'];?>～<?php echo $row['news_day_end'];?></p>
												<?php }?>
												<p><?php echo htmlspecialchars_decode($row['news_detail']) ;?></h5>
												<div class="hr"></div>
											</td>
 										</tr>
										<?php 	}	?>
										<tr align="center">
											<td height="14" colspan="6" class="tdPaging" bgcolor=" " style="padding-top:20px; font-size:10px; color:#ccc" >
												<span class="bodytext" >
													<?php
														$self = $_SERVER['PHP_SELF'];
															$nav = '';
															for($page = 1; $page <= $maxPage; $page++)
																{
																	if ($page == $pageNum)
																	   {
																			$nav .= " $page ";   // no need to create a link to current page
																	   }
																	else
																	   {
																			$nav .= " <a href=\"$self?page=$page\">$page</a> ";
																	   }
																} // end of  for($page = 1; $page <= $maxPage; $page++)
								
																// creating previous and next link
																// plus the link to go straight to
																// the first and last page
								
															if ($pageNum > 1)
																{
																	$page = $pageNum - 1;
																	$prev = " <a href=\"$self?page=$page\">[Prev]</a> ";
								
																	$first = " <a href=\"$self?page=1\">[First Page]</a> ";
																}
															else
																{
																	$prev  = '&nbsp;'; // we're on page one, don't print previous link
																	$first = '&nbsp;'; // nor the first page link
																}
								
															if ($pageNum < $maxPage)
																{
																	$page = $pageNum + 1;
																	$next = " <a href=\"$self?page=$page\" >[Next]</a> ";
								
																	$last = " <a href=\"$self?page=$maxPage\">[Last Page]</a> ";
																}
															else
																{
																	$next = '&nbsp;'; // we're on the last page, don't print next link
																	$last = '&nbsp;'; // nor the last page link
																}
								
																// print the navigation link
																	echo "Page: ".$first . $prev . $nav . $next . $last;
													?>
												</span>
											</td>
										</tr>
										</table>	
									</div>	

									<div class="span4 portfolio-item span4Topimg newsAllRightContent " style=" ">
										<div class="clientComment commentBg newsAllRightSec" style=" ">
											<ul>
												<?php
													$str = "select news_year from news WHERE status='active' GROUP BY news_year DESC;";	
													$result_Year = mysql_query($str);
													while($rowYear = mysql_fetch_assoc($result_Year))
													{	
												?>
												<li><a href="news_all.php?year=<?php echo $rowYear['news_year']; ?>" class="newsYear"><i class="icon-caret-right icon-white "></i> <?php echo $rowYear['news_year']; ?></a></li>
												<?php } ?>
											</ul>
										</div>
										
									</div>
									
								</div>	
								<?php } else{ ?>
									<div class="content" style="">
									<div class="span8 portfolio-item paraLine newsAllLeft" style="">
										
									<table width="100%" border="0" cellpadding="5" cellspacing="5" style="border:0;">
										<?php 
											$result = mysql_query("SELECT * FROM news");$cnt=0;
											$maxRow = mysql_num_rows($result);
											  // how many rows to show per page
												$rowsPerPage = 10;
												// by default we show first page
												$pageNum = 1;
												 if(isset($_GET['page']))
																{
																	$pageNum = $_GET['page'];
																}
												$offset = ($pageNum - 1) * $rowsPerPage;
												$maxPage = ceil($maxRow / $rowsPerPage);
												$str = "select * from news WHERE status='active' and news_year=$year ORDER by entry_date DESC LIMIT $offset, $rowsPerPage";	
												//$result = mysql_query("SELECT * FROM fb_app_reg_tbl WHERE active=2");$cnt=0;
												$result_two = mysql_query($str);
												 
											$sl=($pageNum - 1) * $rowsPerPage+1;
									
											while($row = mysql_fetch_assoc($result_two))
												//while($row = mysql_fetch_array($result))
											{	
													 
												//1px solid #e9e9e9
										?>
										
									 
										<tr style="">
 											<td align="left" class="rowNewsAll">
 												<?php if (($row['news_day_end'])=='No'){ ?>
													<h5 style=" " align="left"><?php echo $row['news_year'];?>.<?php echo $row['news_month'];?>.<?php echo $row['news_day_start'];?></h5>
												<?php }else{ ?>
													<h5 style="" align="left"><?php echo $row['news_year'];?>.<br/><?php echo $row['news_month'];?>.<?php echo $row['news_day_start'];?>～<?php echo $row['news_day_end'];?></p>
												<?php }?>
												<p><?php echo htmlspecialchars_decode($row['news_detail']) ;?></h5>
												<div class="hr"></div>
											</td>
 										</tr>
										<?php 	}	?>
										<tr align="center">
											<td height="14" colspan="6" class="tdPaging" bgcolor=" " style="padding-top:20px; font-size:10px; color:#ccc" >
												<span class="bodytext" >
													<?php
														$self = $_SERVER['PHP_SELF'];
															$nav = '';
															for($page = 1; $page <= $maxPage; $page++)
																{
																	if ($page == $pageNum)
																	   {
																			$nav .= " $page ";   // no need to create a link to current page
																	   }
																	else
																	   {
																			$nav .= " <a href=\"$self?page=$page\">$page</a> ";
																	   }
																} // end of  for($page = 1; $page <= $maxPage; $page++)
								
																// creating previous and next link
																// plus the link to go straight to
																// the first and last page
								
															if ($pageNum > 1)
																{
																	$page = $pageNum - 1;
																	$prev = " <a href=\"$self?page=$page\">[Prev]</a> ";
								
																	$first = " <a href=\"$self?page=1\">[First Page]</a> ";
																}
															else
																{
																	$prev  = '&nbsp;'; // we're on page one, don't print previous link
																	$first = '&nbsp;'; // nor the first page link
																}
								
															if ($pageNum < $maxPage)
																{
																	$page = $pageNum + 1;
																	$next = " <a href=\"$self?page=$page\" >[Next]</a> ";
								
																	$last = " <a href=\"$self?page=$maxPage\">[Last Page]</a> ";
																}
															else
																{
																	$next = '&nbsp;'; // we're on the last page, don't print next link
																	$last = '&nbsp;'; // nor the last page link
																}
								
																// print the navigation link
																	echo "Page: ".$first . $prev . $nav . $next . $last;
													?>
												</span>
											</td>
										</tr>
										</table>	
									</div>	

									<div class="span4 portfolio-item span4Topimg newsAllRightContent " style=" ">
										<div class="clientComment commentBg newsAllRightSec" style=" ">
											<ul>
												<?php
													$str = "select news_year from news WHERE status='active' GROUP BY news_year DESC;";	
													$result_Year = mysql_query($str);
													while($rowYear = mysql_fetch_assoc($result_Year))
													{	
													if($rowYear['news_year']==$year){
												?>
												<li class="activeNewsYear"><a href="news_all.php?year=<?php echo $rowYear['news_year']; ?>" class="activeNewsYear"><i class="icon-caret-right icon-white "></i> <?php echo $rowYear['news_year']; ?></a></li>
												<?php }else{ ?>
												<li class=""><a href="news_all.php?year=<?php echo $rowYear['news_year']; ?>" class="newsYear"><i class="icon-caret-right icon-white "></i> <?php echo $rowYear['news_year']; ?></a></li>
												<?php } }?>
											</ul>
										</div>
										
									</div>
									
								</div>	
								<?php } ?>
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