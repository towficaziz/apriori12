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
				mysql_query("DELETE FROM news WHERE id='".$_GET['del']."'");
				mysql_close($con);
				echo '<script type="text/javascript">alert("Job has been Deleted.");</script>';
				header("Location: view_news.php?status=active");
			} catch (Exception $e) {}
		}
				
	/* -------------------------------------*/		
	if(isset($_POST['upload']))
	{
		//$news_date_start=$_POST['news_date_start'];
		//$news_date_end=$_POST['news_date_end'];
		//$title=$_POST['title'];
		 //$title='News List';
		
		$news_detail=$_POST['news_detail'];
		$news_year=$_POST['news_year'];
		$news_month=$_POST['news_month'];
		//new code
		$news_day_start=$_POST['news_day_start'];
		$news_day_end=$_POST['news_day_end'];
		
		$entry_date=date("Y-m-d");
		 
		if(!empty($_POST['news_year'])&& !empty($_POST['news_detail']))
		{
		$query="INSERT INTO  news (news_detail,news_year,news_month,news_day_start,news_day_end,entry_date) VALUES ('$news_detail','$news_year','$news_month','$news_day_start','$news_day_end','$entry_date')";
		//news_date_start,news_date_end,//'$news_date_start','$news_date_end',
		$result=mysql_query($query);
		if($result)
			{echo '<script type="text/javascript">alert("Successflly Uploaded.");</script>';}
		else{echo '<script type="text/javascript">alert("Failed!");</script>';}
		}else{
		echo '<script type="text/javascript">alert("Fields are must not empty.... Uploading Failed.");</script>';
		}
	}
	if(isset($_POST['update']))
	{	
		$id=$_GET['edit'];
		//$sql_edit = "select * from news where id='$id'";
		///$sql_result = mysql_query($sql_edit);
		//$sql_row = mysql_fetch_assoc($sql_result);
		try{
			$update_date=date("Y-m-d");
			//news_date_start='".$_POST['news_date_start']."', news_date_end='".$_POST['news_date_end']."',title='".$_POST['title']."', 
			$conn=mysql_query("UPDATE news SET news_detail='".$_POST['news_detail']."',news_year='".$_POST['news_year']."',  news_month='".$_POST['news_month']."',  news_day_start='".$_POST['news_day_start']."',  news_day_end='".$_POST['news_day_end']."',status='".$_POST['status']."', update_date='$update_date' WHERE(id=".$id.")");
			//mysql_close($con);
			if (!$conn){ throw new Exception("mysql Error");}else{
				echo '<script type="text/javascript">alert(" Successflly Updated."); window.location="view_news.php?status=active";</script>';
			}
 		} catch(Exception $e) {
			  echo $e->getMessage();
		} 
	}
 
					
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>News Upload</title>
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
      <h1><a href="../images/blog/origin/1383135814.jpg"></a>Add News</h1>
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
		$result = mysql_query("SELECT * FROM news WHERE id='".$_GET['edit']."'");
		while($row = mysql_fetch_array($result))
		 {								
?>
        <div class="span14">
        <form action="" method="POST" enctype="multipart/form-data" id="customForm" >
          <fieldset>
			<!--
			<div class="clearfix  " id="category_field">
              <label for="news_date_start">News Date Start</label>
              <div class="input">
				<input type="text" id="news_date_start" name="news_date_start" value="<?php //echo $row['news_date_start'] ; ?>" ><span style="color:#C00;"> *</span> 
			   </div>
            </div>
            
			<div class="clearfix  " id="category_field">
              <label for="news_date_end">News Date End</label>
              <div class="input">
				<input type="text" id="news_date_end" name="news_date_end" value="<?php //echo $row['news_date_end'] ; ?>" >
			   </div>
            </div>
          
          
           <div class="clearfix  " id="image_field">
              <label for="title">Title</label>
              <div class="input">
                <input type="text" id="title" name="title" value="<?php // echo $row['title'] ; ?>" ><span style="color:#C00;"> *</span>
                </div>
            </div>
			  -->
           <div class="clearfix  " id="image_field">
              <label for="news_year">News Date</label>
              <div class="input">
				<select id="news_year" name="news_year" style="width:100px !important;" >
                  <option class="blank" value="<?php echo $row['news_year'] ; ?> "> <?php echo $row['news_year'] ; ?> </option>
					<?php
						$year= date("Y");
						//echo '<option selected value="'.$year.'">'.$year.'</option>';
						
						$limit_year=$year-30;
						for($i=$year; $i>=$limit_year; $i--){
						echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
				</select>
			   <span style="color:#C00;">*</span>
			   
				<select id="news_month" name="news_month" style="width:100px !important;"  >
                  <option class="blank" value="<?php echo $row['news_month'] ; ?> "> <?php echo $row['news_month'] ; ?> </option>
					<?php
						 
 						for($i=01; $i<=12; $i++){
						echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
				</select> 
				<span style="color:#C00;">*</span>
				
				<select id="news_day_start" name="news_day_start" style="width:100px !important;"  >
                  <option class="blank" value="<?php echo $row['news_day_start'] ; ?> "> <?php echo $row['news_day_start'] ; ?> </option>
					<?php
						 
 						for($i=01; $i<=31; $i++){
						echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
				</select> 
				<span style="color:#C00;">* </span>
				<span style="color:;"> Date Range(If Multiple days): </span>
				
				<select id="news_day_start" name="news_day_end" style="width:100px !important;"  >
                  <option class="blank" value="<?php echo $row['news_day_end'] ; ?> "> <?php echo $row['news_day_end'] ; ?> </option>
					<?php
						 
 						for($i=01; $i<=31; $i++){
						echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
				</select> 
				
                <!--<input type="text" id="news_year" name="news_year" value="" ><span></span> -->
                </div>
            </div>
			  
          
            <div class="clearfix  " id="">
              <label for="news_detail">news_detail</label>
              <div class="input">
                <textarea id="news_detail" name="news_detail" cols="75"><?php echo $row['news_detail'] ; ?></textarea><span style="color:#C00;"> *</span>
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
			CKEDITOR.replace( 'news_detail', 'news_month',
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
		  <!--
			<div class="clearfix  " id="category_field">
              <label for="news_date_start">News Date Start</label>
              <div class="input">
				<input type="text" id="news_date_start" name="news_date_start" value="" ><span style="color:#C00;"> *</span> 
			   </div>
            </div>
            
			<div class="clearfix  " id="category_field">
              <label for="news_date_end">News Date End</label>
              <div class="input">
				<input type="text" id="news_date_end" name="news_date_end" value="" >
			   </div>
            </div>
            
          
           <div class="clearfix  " id="image_field">
              <label for="title">Title</label>
              <div class="input">
                <input type="text" id="title" name="title" value="" ><span style="color:#C00;"> *</span>
              </div>
            </div>
          -->
           
           <div class="clearfix  " id="image_field">
              <label for="news_year">News Date</label>
              <div class="input">
				<select id="news_year" name="news_year" style="width:100px !important;" >
					<option class="blank">Year</option>
 					<?php
						$year= date("Y");
						echo '<option selected value="'.$year.'">'.$year.'</option>';
						
						$limit_year=$year-30;
						for($i=$year; $i>=$limit_year; $i--){
						echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
				</select>
			   <span style="color:#C00;">*</span>
			   
				<select id="news_month" name="news_month" style="width:100px !important;"  >
					<option class="blank"> Month </option>
                  <?php
						$month= date("m"); //M for Cap title 
						echo '<option selected value="'.$month.'">'.$month.'</option>';
 						for($i=01; $i<=12; $i++){
						echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
					
					<?php /* for ($i=0; $i<=12; $i++) { ?>
						<option value="<?php echo date('Y-m-d', strtotime("-1 month")); ?>"><?php echo date('Y-m', strtotime("-1 month")); ?></option>
					<? } */?>
				</select> 
				<span style="color:#C00;">*</span>
				
				<select id="news_day_start" name="news_day_start" style="width:100px !important;"  >
                  <option class="blank" selected> Day Start </option>
					<?php
						$day_start= date("d"); //M for Cap title 
						echo '<option selected value="'.$day_start.'">'.$day_start.'</option>';
 						for($i=01; $i<=31; $i++){
						echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
				</select> 
				<span style="color:#C00;">* </span>
				<span style="color:;"> Date Range(If Multiple days): </span>
				
				<select id="news_day_start" name="news_day_end" style="width:100px !important;"  >
                  <option class="blank" selected> None </option>
 					<?php
						//$day_end= date("d"); //M for Cap title 
						//echo '<option selected value="'.$day_end.'">'.$day_end.'</option>';
 						for($i=01; $i<=31; $i++){
						echo '<option value="'.$i.'">'.$i.'</option>';
						}
					?>
				</select> 
				
                <!--<input type="text" id="news_year" name="news_year" value="" ><span></span> -->
                </div>
            </div>
           
             
            
           <div class="clearfix  " id="">
              <label for="news_detail">News Details</label>
              <div class="input">
                <textarea class="news_detail" cols="75" id="news_detail" name="news_detail" rows="10"> </textarea><span style="color:#C00;"> *</span>
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
		CKEDITOR.replace( 'news_detail','news_month',
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