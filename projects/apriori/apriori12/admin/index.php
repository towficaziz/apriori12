<?php
session_start();
include 'connect.php';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Website Admin Panel</title><link rel="stylesheet" media="screen" href="css/bootstrap.css">
<link rel="stylesheet" media="screen" href="css/main.css">
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/validation.js" type="text/javascript"></script>

                                        
 	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script src="ckeditor/sample.js" type="text/javascript"></script>
	<link type="text/css" href="ckeditor/sample.css" rel="stylesheet" />
</head>
<body>
<div class="topbar">
  <div class="fill">
  	      
	<?php
		if(isset($_POST['submit'])){
			$userid=$_POST['userid'];
			$pass=$_POST['pass'];
			
			$md5pass= md5($_POST['pass']);
			/*
				$md5pass= md5($_POST['pass']);
      			$sql="select * from user where userid='$userid' and pass=MD5('".$md5pass."')";
			*/
			
						$sql="select * from user where userid='$userid' and pass='$md5pass'";

						$result=mysql_query($sql);
						
						$row=mysql_fetch_array($result);
						if (mysql_num_rows($result)>0)
						{
							if (mysql_num_rows($result)>0){
							$_SESSION['tdcladmnpan']=1;  }
						}else{ echo "<font color=#FF0000><b><center>Invalid Login. Please try again...</center></b></font><br>";
						  // echo "<meta http-equiv='refresh' content='1;URL=index.html'>\n";
						  }
		}
	 
	  	if(isset($_SESSION['tdcladmnpan']))
		{
	  ?> 

		<div class="container" > <a style="background-color: #222; background-color: rgba(0, 0, 0, 0.5);" class="brand" href="index.html">Admin Home</a>
          <?php
		  	 include 'top_menu2.php';
		  ?>
    	</div>
        
  </div>
</div>        
      <div class="container">
          <div class="content">
            <div class="page-header"><h1> Welcome To Admin Panel</h1></div>
            <div class="row" style="height:300px;"></div>
          </div>
      </div>
        
      <?php  }else{ 
			if(!isset($_SESSION['tdcladmnpan'])){
		?> 	
       <div class="container"> <a class="brand" href="#">&nbsp;</a></div>
  </div>
</div>
                                          
<div class="container">
  <div class="content">
    <div class="page-header">
      <h1> Admin Panel Login </h1>
    </div>
    <div class="row">
		
        <div class="span14">
        <form action="" method="POST" enctype="multipart/form-data" id="customForm" >
          <fieldset>
            <div class="clearfix  " id="userid">
              <label for="userid">User Name</label>
              <div class="input">
                <input type="text" id="userid" name="userid" value="" >
                <span class="help-inline"></span> <span class="help-block">User Name</span> </div>
            </div>
           
           <div class="clearfix  " id="pass">
              <label for="pass">Password</label>
              <div class="input">
                <input type="password" id="pass" name="pass" value="" >
                <span class="help-inline"></span> <span class="help-block">Password</span> </div>
            </div>
                                                
          </fieldset>
          
          <div class="actions">
            <input type="submit" name="submit" class="btn primary" value="Login">
            <a href="/" class="btn">Cancel</a> </div>
        </form>
      </div>
	<?php 
            }}
        
    ?>

    </div>
  </div>
  <footer style="margin:5px auto;  padding:0;">
     <?php
		include'footer.php';
	?>
  </footer>
</div>
</body>
</html>
 