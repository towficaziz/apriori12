<?php
session_start();
if(isset($_SESSION['tdcladmnpan']))
{
	include "connect.php";
 	
	if(isset($_GET['del']))
		{
			try{
				$con = mysql_connect("localhost",$user,$pass);
				if (!$con)
				{
				  die('Could not connect: ' . mysql_error());
				}
				mysql_select_db($db, $con);
				mysql_query("DELETE FROM comment WHERE id='".$_GET['del']."'");
				mysql_close($con);
				echo '<script type="text/javascript">alert("Comment has been Deleted.");</script>';
				header("Location: view_comment.php?status=active");
			} catch (Exception $e) {}
		}
				
	/* -------------------------------------*/		
	if(isset($_POST['upload']))
	{
		 
		$titleRaw=$_POST['title'];
		$title=nl2br(htmlentities($titleRaw, ENT_QUOTES, 'UTF-8'));
		
		$comment=$_POST['comment'];
		 
		//new code
		 
		//$entry_date=CURRENT_TIMESTAMP();
		 
		if(!empty($_POST['title'])&& !empty($_POST['comment']))
		{
		$query="INSERT INTO  comment (title,comment,entry_date) VALUES ('$title','$comment',NOW())";
 		$result=mysql_query($query);
		if($result)
			{echo '<script type="text/javascript">alert("Successfully Uploaded.");</script>';}
		else{echo '<script type="text/javascript">alert("Failed!");</script>';}
		}else{
		echo '<script type="text/javascript">alert("Fields are must not empty.... Uploading Failed.");</script>';
		}
	}
	if(isset($_POST['update']))
	{	
		$id=$_GET['edit'];
		$titleRaw=$_POST['title'];
		$title=nl2br(htmlentities($titleRaw, ENT_QUOTES, 'UTF-8'));
		 
		try{
			//$update_date=date("Y-m-d");
 			$conn=mysql_query("UPDATE comment SET title='".$title."',comment='".$_POST['comment']."',status='".$_POST['status']."', update_date=NOW() WHERE(id=".$id.")");
 			if (!$conn){ throw new Exception("mysql Error");}else{
				echo '<script type="text/javascript">alert(" Successfully Updated."); window.location="view_comment.php?status=active";</script>';
			}
 		} catch(Exception $e) {
			  echo $e->getMessage();
		} 
	}
 
					
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Add Comment</title>
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
      <h1><a href="../images/blog/origin/1383135814.jpg"></a>Add Comment</h1>
    </div>
    <div class="row">
      
       <?php 
	if(isset($_GET['edit']))
	{
		try{
		$con = mysql_connect("localhost",$user,$pass);
		if (!$con)
		{  die('Could not connect: ' . mysql_error());		}
		mysql_select_db($db, $con);
		$result = mysql_query("SELECT * FROM comment WHERE id='".$_GET['edit']."'");
		while($row = mysql_fetch_array($result))
		 {								
?>
        <div class="span14">
        <form action="" method="POST" enctype="multipart/form-data" id="customForm" >
          <fieldset>
			 
           <div class="clearfix  " id="image_field">
              <label for="title">Title/Name/Company Name</label>
              <div class="input">
                <textarea type="text" id="title" name="title" value="" ><?php echo $row['title'] ; ?></textarea><span style="color:#C00;"> *</span>
                </div>
            </div>
			 
          
            <div class="clearfix  " id="">
              <label for="comment">Comment</label>
              <div class="input">
                <textarea id="comment" name="comment" cols="75"><?php echo $row['comment'] ; ?></textarea><span style="color:#C00;"> *</span>
               </div>
			</div>
               
               <script type="text/javascript">

						CKEDITOR.config.htmlEncodeOutput=true;
						CKEDITOR.config.toolbar_Full =
						[
						   
							{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
							{ name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
							{ name: 'links',       items : [ 'Link'] },
							{ name: 'insert',      items : [ 'Table','HorizontalRule'] },
							'/',
							{ name: 'styles',      items : [ 'Styles','Format','Font','FontSize' ] },
							{ name: 'colors',      items : [ 'TextColor','BGColor' ] },
							{ name: 'tools',       items : [ 'Maximize', 'Source' ] },
							 { name: 'editing',     items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] }
						]; 
			CKEDITOR.replace( 'comment', 'news_month',
			{
				toolbar : 'Full',
			});
					//]]>
				</script>
            
			<div class="clearfix  " id="category_field">
              <label for="category">Status</label>
              <div class="input">
                <select id="status" name="status" >
					<option class="blank" value="<?php echo $row['status'] ; ?>"><?php echo $row['status'] ; ?></option>
					<option value="active" >Active</option>
					<option value="pending" >Pending</option>
				</select>
              </div>
            </div>
			
                                                 
          </fieldset>
          
          <div class="actions">
            <input type="submit" name="update" class="btn primary" value="Update">
            <a href="/" class="btn">Cancel</a> </div>
        </form>
      </div>

<?php }
	mysql_close($con);
	} catch (Exception $e) {}
}else{
?>
      <div class="span14">
        <form action="" method="POST" enctype="multipart/form-data" id="customForm" >
          <fieldset>
		   
           <div class="clearfix  " id="image_field">
              <label for="title">Title/Name/Company Name</label>
              <div class="input">
                <textarea type="text" id="title" name="title" value="" ></textarea><span style="color:#C00;"> *</span><span style="color:#C00;"> *</span>
              </div>
            </div>
          
           
            
           <div class="clearfix  " id="">
              <label for="comment">comment Details</label>
              <div class="input">
                <textarea class="comment" cols="75" id="comment" name="comment" rows="10"> </textarea><span style="color:#C00;"> *</span>
                <span id="nameInfo" class="help-block">Write news details and link a text if need by using text tools.</span>
               </div>
           </div>
           
			<script type="text/javascript">
					CKEDITOR.config.htmlEncodeOutput=true;
					CKEDITOR.config.toolbar_Full =
					[
						{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
						{ name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
						{ name: 'links',       items : [ 'Link'] },
						{ name: 'insert',      items : [ 'Table','HorizontalRule'] },
						'/',
						{ name: 'styles',      items : [ 'Styles','Format','Font','FontSize' ] },
						{ name: 'colors',      items : [ 'TextColor','BGColor' ] },
						{ name: 'tools',       items : [ 'Maximize', 'Source' ] },
						 { name: 'editing',     items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] }
					]; 
		CKEDITOR.replace( 'comment','news_month',
		{
			toolbar : 'Full',
		});
				//]]>
				</script>        
          </fieldset>
          
          <div class="actions">
            <input type="submit" name="upload" class="btn primary" value="Submit">
            <a href="/" class="btn">Cancel</a> </div>
        </form>
      </div>
<?php } ?>
    </div>
  </div>
  <footer>
     
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