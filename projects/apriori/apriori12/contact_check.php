			
<?php 
if(isset($_POST['submit']))
{
	
	$universityname = $_POST['universityname'];
	$name = $_POST['name'];
	$number = $_POST['pnnumber'];
	$visitor_email = $_POST['email'];
	$user_message = $_POST['message'];
}


?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>

        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
        <![endif]-->

        <link href="css/bootstrap.css" media="all" rel="stylesheet" type="text/css" />        
		<link href="css/responsive.css" media="all" rel="stylesheet" type="text/css" />			
        <link href="css/font-awesome.css" media="all" rel="stylesheet" type="text/css" />
			<link rel="stylesheet" href="font/iconvault-preview.css" />
        <link href="css/style.css" media="all" rel="stylesheet" type="text/css" />
        <link href="css/style-responsive.css" media="all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/colors/orange.css" id="colors">
        <link href="css/flexslider.css" media="all" rel="stylesheet" type="text/css" />
		   <link rel="stylesheet" href="iconvault-preview.css" />
        <!-- Styles Switcher -->
        <link rel="stylesheet" type="text/css" href="css/switcher.css">
	<script language="JavaScript" src="js/scripts/gen_validatorv31.js" type="text/javascript"></script>	
	<link rel="icon" type="image/png"  href="img/favicon.png" />

    </head>
    <body>
         <!-- Start Main Nav -->

       <?php include "topmenu.php"; ?>
		 <div id="wrap">
		  <div class="main" id="main-no-space" >  
			<div id="main-page">
			<div id="wrapper" class="container containBmargin2 contentLeftAlign">
				<div id="breadcrumbs"class= " " style="border-bottom:none;margin-bottom:26px !important;">
					<div class="breadcrumbs pull-left">
					   <ul class="bradcumul">
						  <li class=""><a  style=" color: #f28d00;" href="index.php">HOME</a><i class="icon-chevron-right icon-white marginLft8"></i></li>
 						  <li><a href="#">Contact Us</a></li>
					   </ul>
					</div>
				</div>
				
				<div id="page-title"class= "portfolioBg portfolioBgMar">
 					<!--<i class="step icon-medicalservice size-36" style=""></i> -->
					<h2 class=" marginLeft70px marginTop-43px" style="color:#ffffff;font-weight:bold;font-size:25px;margin-top:18px; margin-left:10px;">Contact Us</h2>
				</div>
				<div id="page-title" style="margin-bottom:40px; margin-top:44px;">
					<h2 class="tcontact_res"><!-- ありがとうございました --></h2>
					<p style="color:#000;">
					
					</p>
				</div>
				<div class="row">
					<div class="span8 tspan8 spanContactForm contaCheck">
					
				
						<form class="formContact" id="myform" method="POST"action="thank-you.php"> 
							<input type="hidden" name="universityname" value="<?php echo $universityname ; ?>"> 
							<input type="hidden" name="name" value="<?php echo $name ; ?>">  
							<input type="hidden" name="pnnumber" value="<?php echo $number ; ?>"> 
							<input type="hidden" name="email" value="<?php echo $visitor_email ; ?>"> 
							<input type="hidden" name="message" value="<?php echo $user_message ; ?>">
							
							<label style="" class="contactFormLabel left">貴大学・研究所名など</label>
							<p style=""><?php echo $universityname ; ?></p>
							
							<div class="dot clear" ></div>
							<hr class="dottedBorder" />	

							<label style="" class="contactFormLabel left">お名前</label>
							<p style="margin-bottom:0px;float:right;"><?php echo $name ; ?></p>
							
							<div class="dot clear" ></div>
							<hr class="dottedBorder" />	
 							
							<label style="" class="contactFormLabel left">お電話番号</label>
							<p style="margin-bottom:0px;float:right;"><?php echo $number ; ?></p>
							
							<div class="dot clear" ></div>
							<hr class="dottedBorder" />	
 							
							<label style="" class="contactFormLabel left">メールアドレス</label>
							<p style="margin-bottom:0px;float:right;"><?php echo $visitor_email ; ?></p>
							
							<div class="dot clear" ></div>
							<hr class="dottedBorder" />	
 							
							<label style="" class="contactFormLabel left">ご相談内容</label>
							<p style="margin-bottom:0px;float:right;"><?php echo $user_message ; ?></p>
							
							<div class="dot clear" ></div>
							<hr class="dottedBorder" />	
 							
							<button type="reset" onclick="history.back()"  class="btn btn-cta footerButtonCon btnContact conButtonM" style="font-weight:bold;">もどる</button>
							
							<button type="submit" name='submit' value="submit"  class="btn btn-cta footerButtonCon btnContact conButtonM" style="font-weight:bold;">送　信</button>
							
						</form>
												
					</div>
					<div class="span4 spanMap">
						
					</div>
			
		   </div>
		   </div>
		   </div>
			</div>
            <?php include "footer_contact.php" ?>
		
		
			<script language='JavaScript' type='text/javascript'>
			/*
			function refreshCaptcha()
			{
				var img = document.images['captchaimg'];
				img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
			}
			*/
			</script>
        <!-- End Footer -->

        <!-- Javascripts================================================== -->

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/bootstrap-tab.js"></script>
        <script src="js/bootstrap-transition.js"></script>
        <script src="js/fancybox.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/switcher.js"></script>

<script type="text/javascript">

	function resetform() {
	document.getElementById("myform").reset();
	}
</script>
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