<?php
session_start();
if(isset($_SESSION['tdcladmnpan']))
{
	include "connect.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Amin Panel -- View Blogs Category</title>
<link rel="stylesheet" media="screen" href="css/bootstrap.css">
<link rel="stylesheet" media="screen" href="css/main.css">
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/validation.js" type="text/javascript"></script>

                                        
 	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script src="" type="text/javascript"></script>
	<link type="text/css" href="ckeditor/sample.css" rel="stylesheet" />
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
		  <h1> View <strong>Active</strong> Comments</h1>
		</div>
		<div class="row" style="margin:0 auto; margin-left:0; text-align:center">
		  <div class="span14" align="center"style="margin:0 auto; margin-left:0; text-align:center" >
		   
			<table width="100%" border="2" cellpadding="5" cellspacing="10" style="margin-top:30px; border:0 solid #eee;">
    	 
              <tr bgcolor="#333333" style="border:1 solid #eee; color:#EEE">
                <td width="" align="left" style=""><strong>Sl no</strong></td>
                <td width=" " align="left"style=""><strong>User </strong></td>
                <td width=" " align="left"style=""><strong>Action</strong></td>
              </tr>
        
		
        	<?php 
			
			$show ="SELECT * FROM user";
				$result= mysql_query($show);
				while($show = mysql_fetch_array($result))
				{
					$id1=$show["id"];
					$userid1=$show["userid"];
					
			?>
			
         
            <tr >
                <td width="60" ><?php echo $id1; ?></td>
               
					
                  <td width="90%"> <strong><?php echo $show['userid'];?> </strong></td>
                     
                       
               
                <td><p><span style="font-size:14px;"><a href="add_comment.php?edit=<?php echo $row['id']; ?>" title="Edit" >Update</a>&nbsp;|&nbsp;<a href="add_comment.php?del=<?php echo $row['id']; ?>" title="Delete" >Delete</a></span></td>
            </tr> 
            <?php 	}	?>
           
            </table>	
            
		  
		
      </div>
    
    </div>
  </div>

  <footer>
    <?php
		include'footer.php';
	?>
  </footer>
</div>
</body>
</html>
 <?php
}else{
	header("Location:index.php");
}
?>