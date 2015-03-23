<html lang="en">
    <head>
		 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
					<h2 class="tcontact_res">お問い合わせフォーム</h2>
					<p style="color:#000;">
					ご質問・制作のご依頼など、下記フォームまたはお電話よりお気軽にお問い合わせください。
<br>
					後程折り返しご連絡させていただきます。
					</p>
				</div>
				<div class="row">
					<div class="span8 tspan8 spanContactForm">
						
							<div id='contact_form_errorloc' class='err'></div>
						<form class="formContact" id="myform" action="contact_check.php" method="POST" name="contact_form" onload='document.email.email.focus()'> 
						
 							<label style="" class="contactFormLabel left">貴大学・研究所名など</label>
							<input id="universityname" type="text" class="input-xlarge contactInput left"  name="universityname" value='' />
							<div class="dot clear" ></div>
							<hr class="dottedBorder" />							
							<label  class="contactFormLabel left">お名前</label>
							<input  id="name" type="text" class="input-xlarge contactInput left"  name="name" value='' />
							<div class="dot clear"></div>
							<hr class="dottedBorder" />							
							<label class="contactFormLabel left">お電話番号</label>
							<input id="number" type="text" class="input-xlarge contactInput left"  name="pnnumber" value=''>
							<div class="dot clear"></div>
							<hr class="dottedBorder" />
							<label class="contactFormLabel left">メールアドレス</label>
							<input id="email" type="text" class="input-xlarge contactInput left" name="email" value=''></input>
							<div class="dot clear"></div>
							<hr class="dottedBorder" />
							<label class="contactFormLabel left">ご相談内容</label>
							<textarea id="message" class="input-xlarge contactInput left" style="height:100px !important; margin-bottom:10px; border-radius:5px !important;" name="message" rows=4 cols=0 > </textarea>
 							<div class="dot clear"></div>
							<hr class="dottedBorder" />
							<label class="contactFormLabel_2 left"> </label>
						<!--	<input  onclick="resetform()"  type="refresh" value="もどる" name='refresh' class="btn btn-cta footerButtonCon btnContact" style="font-weight:bold;"></input>
							
							<input type="submit" class="btn btn-cta footerButtonCon btnContact conButtonM" name="submit" value="送　信" />
								-->
							<button type="submit" name='submit' class="btn btn-cta footerButtonCon btnContact conButtonM" style="font-weight:bold;">送信内容確認</button>
						
						</form>
						<div style="" class="commentBg underContactForm">
							<p class="conImg" style=""><img style="margin-right:7px; width:10px;" src="images/icons/bullet.png"/>お電話でのお問い合わせ </p>
							<h2 style=" "><span style="">Tel.</span>03-5842-9771</h2>
							<p style="font-size:14px;">月～金（土日祝除く）9:00am-5:30pm</br></p>
 						</div>
						<p style="margin-top: 20px; color:#333; width:85%;">
								※個人情報に関する取扱い：取得した個人情報は、弊社プライバシーポリシーに従って適正に管理いたします。
							</p>						
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
		
			<script language="JavaScript">
			// Code for validating the form
			// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
			// for details
			var frmvalidator  = new Validator("contact_form");
			//remove the following two lines if you like error message box popups
			frmvalidator.EnableOnPageErrorDisplaySingleBox();
			
			frmvalidator.addValidation("universityname","req","すべてご記入ください。"); 
			frmvalidator.addValidation("name","req","すべてご記入ください。"); 
			frmvalidator.addValidation("number","req","すべてご記入ください。"); 
			frmvalidator.addValidation("email","req","すべてご記入ください。"); 
			frmvalidator.addValidation("message","req","すべてご記入ください。"); 
			</script>
  		     <script type="text/javascript">
		/*		function validateCaseSensitiveEmail(email)
				{
				var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
				if (reg.test(email)){
				return true;
				}
				else{
				return false;
				}
				} */
				</script> 
			
			<script language='JavaScript' type='text/javascript'>
						
					function ValidateEmail(email)  
						{  
						var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
						if(email.value.match(mailformat))  
						{  
						document.email.text1.focus();  
						return true;  
						}  
						else  
						{  
						alert("You have entered an invalid email address!");  
						document.form1.text1.focus();  
						return false;  
						}  
						}  	
						
						
				/*	function validateEmail()
					{
					 
					   var emailID = document.myForm.email.value;
					   atpos = emailID.indexOf("@");
					   dotpos = emailID.lastIndexOf(".");
					   if (atpos < 1 || ( dotpos - atpos < 2 )) 
					   {
						   alert("Please enter correct email ID")
						   document.myForm.email.focus() ;
						   return false;
					   }
					   return( true );
					}
	*/
		</script>
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