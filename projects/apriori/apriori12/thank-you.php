			
<?php 
// multiple recipients
//$to  = 'tapolly01@gmail.com' . ', '; // note the comma
$to  = 'info@apriori-inc.co.jp'. ', '.'kawahara.kazuko@gmail.com'.', ';  // note the comma
//$to .= 'wez@example.com';

//$your_email ='raihan.sabuj@yahoo.com';
//$your_email ='info@apriori-inc.co.jp';
//$to ='';
//session_start();
$errors = '';
$universityname = '';
$name = '';
$number = '';
$visitor_email = '';
$user_message = '';

if(isset($_POST['submit']))
{
	
	$universityname = $_POST['universityname'];
	$name = $_POST['name'];
	$number = $_POST['pnnumber'];
	$visitor_email = $_POST['email'];
	$user_message = $_POST['message'];
	
	if(empty($errors))
	{	
	
		$subject = 'Contact Message from a priori website';

		// message
		$message = '
		<html>
		<head>
			<meta charset="utf-8">
		  <title>Contact Message from Website</title>
		</head>
		<body>
		  <p>Contact Message from <srtong>'.$name.'</strong></p>
		   <div>
			<p style="padding:0; margin:0;"><strong>貴大学・研究所名など: </strong>'.$universityname.'</p>
			<p style="padding:0; margin:0;"><strong>お名前: </strong> '.$name.'</p>
			<p style="padding:0; margin:0;"><strong>お電話番号: </strong> '.$number.'</p>
			<p style="padding:0; margin:0;"><strong>メールアドレス: </strong> '.$visitor_email.'</p> <br/>
			<p style="padding:0; margin:0;"><strong>ご相談内容: </strong></p>
			<p>'.$user_message.'</p><br/>
		   </div>
		</body>
		</html>
		';


		$headers['Content-Type'] = "text/plain; charset=utf-8";
	    $headers['Content-Transfer-Encoding'] = "8bit";
	    $b64subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";
	    $headers['Subject'] = $b64subject;


		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
		$headers .= 'Content-Transfer-Encoding: 8bit' . "\r\n";

		// Additional headers
		//$headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
		$headers .= 'From: '.$name.' <'.$visitor_email.'>' . "\r\n";
		$headers .= 'Cc: Your Message<'.$visitor_email.'>' . "\r\n";
		//$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";

		// Mail it
		mail($to, $subject, $message, $headers);
 
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
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

        <link href="css/bootstrap.css" media="all" rel="stylesheet" type="text/css" />        <link href="css/responsive.css" media="all" rel="stylesheet" type="text/css" />			
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
					<h2 class="tcontact_res">お問い合わせフォーム</h2>
					<p style="color:#333;font-size:35px;font-weight:bold;margin-top:20px;margin-bottom:20px;">
					ありがとうございました。
					</p>
					<p style="color:#000;">
					後程折り返しご連絡させていただきます。
					</p>
				</div>
				<div class="row">
					<div class="span8 tspan8 spanContactForm">
						<p></p>
					</div>
					<div class="span4 spanMap">
						
						<div class="google-map" style="margin-bottom:50px; width:100%; height:250px;">
							<div class=" no-margin" style=""><h4 style="font-size:17px; margin:10px 0; text-align:left;">アクセスマップ</h4></div>
							<div id="googlemaps" class="google-map google-map-full" style="height:250px; width:100%;float:right;">
 								 <iframe src="https://www.google.com/maps/d/embed?mid=ziHF9AlOsvck.kh0ONygE9S00" class="mapWidth" style=""></iframe>
								<!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3239.811175209549!2d139.761993!3d35.70626399999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188c3cb82f2c93%3A0xf33926d3b64e572e!2z44Ki44OX44Oq44Kq44Oq!5e0!3m2!1sja!2sjp!4v1421923147968" width="400" height="300" frameborder="0" style="border:0"></iframe> -->
							</div>
						</div>
						<div class="marTop100px" style="">
							<img src="images/underMap.jpg" alt="a priori" />
						</div>
					</div>
			   </div>
		   </div>
		   </div>
		   </div>
			</div>
            <?php include "footer_contact.php" ?>
			
			 
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
    jQuery(document).ready(function($){
 		var url = window.location.href;
 
		$('.topMenu a').filter(function() {
			return this.href == url;
		}).addClass('activeMenu');
    });
</script>
    </body>
</html>