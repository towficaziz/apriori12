<?php
session_start();
if(isset($_SESSION['tdcladmnpan']))
{
	include "connect.php";
 		
//	if(isset($_POST['submit']))
//	{		
//		$pass=$_POST['pass'];
//		$md5pass= md5($_POST['pass']);
		
//		if(!empty($md5pass)&& !empty($md5pass))
//		{
//		$query="INSERT INTO  user (pass,pass) VALUES ('$md5pass','$md5pass')";
		
//		$result=mysql_query($query);
//		if($result)
//			{echo '<script type="text/javascript">alert("Successflly Added.");</script>';}
//		else{echo '<script type="text/javascript">alert("Failed!");</script>';}
//		}else{
//		echo '<script type="text/javascript">alert("Fields are must not empty.... Uploading Failed.");</script>';
//		}
		
//		$sql="select * from user where userid='$userid' and pass='$md5pass'";

//						$result=mysql_query($sql);
						
//						$row=mysql_fetch_array($result);
//						if (mysql_num_rows($result)>0)
//						{
//							if (mysql_num_rows($result)>0){
//							$_SESSION['tdcladmnpan']=1;  }
//						}else{ echo "<font color=#FF0000><b><center>Invalid Login. Please try again...</center></b></font><br>";
						  // echo "<meta http-equiv='refresh' content='1;URL=index.html'>\n";
//						  }
//	}

      if(isset($_POST['submit']))
      {
      $passwordvalue=md5($_POST['cur_pwd']);
      $password=md5($_POST['password']);
      $confirm_pwd=md5($_POST['confirm_pwd']);   
      $select=mysql_query("select * from user"); 
      $fetch=mysql_fetch_array($select);
      $data_pwd=$fetch['password'];

$user=$fetch['user'];

      if($password==$confirm_pwd && $data_pwd==$passwordvalue)
        {
      $insert=mysql_query("update user set password='$cm_pwd' where user='$userid'"); 
       echo '<script type="text/javascript">alert("Successflly Added.");</script>';
        }
      else
        {
      echo '<script type="text/javascript">alert("Failed!");</script>';
        }
      }
      ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Add User</title>
<link rel="stylesheet" media="screen" href="css/bootstrap.css">
<link rel="stylesheet" media="screen" href="css/main.css">
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/validation.js" type="text/javascript"></script>

<!--                                        
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>


  <script type="text/javascript" src="js/jquery.min.js"></script>
-->  
  <link href="css/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="js/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
  
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script src="ckeditor/sample.js" type="text/javascript"></script>
	<link href="ckeditor/sample.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="topbar">
  <div class="fill">
		<div class="container"> <a class="brand" href="index.php">Admin Home</a>
      <?php
	  	include 'top_menu2.php';
	  ?>
    </div>
  </div>
</div>
                                          
<div class="container">
  <div class="content">
    <div class="page-header">
      <h1><a href="../images/blog/origin/1383135814.jpg"></a>Add Password</h1>
    </div>
    
  </div>
  <footer>
      <div class="span14">
        <form action="" method="POST" enctype="multipart/form-data" id="customForm" >
          <fieldset>
            <div class="clearfix  " id="userid">
              <label for="userid">Old Password</label>
              <div class="input">
                <input type="password" name="cur_pwd"  id="cur_pwd" value="" >
                <span class="help-inline"></span> <span class="help-block">Old Password</span> </div>
            </div>  <div class="clearfix  " id="userid">
              <label for="userid">New Password</label>
              <div class="input">
                <input type="password" name="password"  id="password" value="" >
                <span class="help-inline"></span> <span class="help-block">New Password</span> </div>
            </div>
           
           <div class="clearfix  " id="pass">
              <label for="pass">Re-type New Password</label>
              <div class="input">
                <input type="password" name="confirm_pwd" id="confirm_pwd" value="" >
                <span class="help-inline"></span> <span class="help-block">Re-type Password</span> </div>
            </div>
			
		
                                                
          </fieldset>
          
          <div class="actions">
            <input type="submit" name="submit" class="btn primary" value="Submit">
           </div>
        </form>
      </div>
  </footer>
</div>
</body>
</html>
 <?php
}else{
	echo "Failed";
	header("Location:index.php");
}
?>