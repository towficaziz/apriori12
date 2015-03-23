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
	<?php  
	   	$status= $_GET['status'];
		//echo "<h1>$language</h1>";
         if($status=='pending')
		{
		?>	
	  <div class="content">
		<div class="page-header">
		  <h1> View Website <strong>Pending</strong> Comments</h1>
		</div>
		<div class="row" style="margin:0 auto; margin-left:0; text-align:center">
		  <div class="span14" align="center"style="margin:0 auto; margin-left:0; text-align:center" >
		   
			<table width="100%" border="2" cellpadding="5" cellspacing="10" style="margin-top:30px; border:0 solid #eee;">
    	 
              <tr bgcolor="#333333" style="border:1 solid #eee; color:#EEE">
                <td width="" align="left" style=""><strong>Sl no</strong></td>
                <td width=" " align="left"style=""><strong>News Details </strong></td>
                <td width=" " align="left"style=""><strong>Action</strong></td>
              </tr>
        
		
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
					$str = "select * from news WHERE status='pending' ORDER by entry_date DESC LIMIT $offset, $rowsPerPage";	
					//$result = mysql_query("SELECT * FROM fb_app_reg_tbl WHERE active=2");$cnt=0;
					$result_two = mysql_query($str);
					 
				$sl=($pageNum - 1) * $rowsPerPage+1;
		
				while($row = mysql_fetch_assoc($result_two))
					//while($row = mysql_fetch_array($result))
				{	
						 

			?>
			
         
            <tr   <?php if($cnt==0){echo "bgcolor='#555555'";$cnt=1;}else{echo "bgcolor='#888888'";$cnt=0;} ?> style="color:#CCC;" >
                <td width="60" ><?php echo $sl;$sl=$sl+1; ?></td>
                <td align="" >
					 <table width="100%" border="1" cellpadding="" cellspacing="" style="background:#FFF; color:#333;">
                     	
						<tr>
                        	<td width="20%">Status</td>
                            <td width="70%"> <strong><?php echo $row['status'];?></strong> </td>
                        </tr>
						<!--
                        <tr>
                        	<td width="20%">Title</td>
                            <td width="70%"> <strong><?php //echo $row['title'];?> </strong></td>
                        </tr>
                        -->
                        <tr>
                        	<td width="20%">News Date</td>
                           <?php
								if (($row['news_day_end'])=='No'){
							?>
                            <td width="70%"><?php echo $row['news_year'];?>.<?php echo $row['news_month'];?>.<?php echo $row['news_day_start'];?></td>
							<?php }else{ ?>
							<td width="70%"><?php echo $row['news_year'];?>.<?php echo $row['news_month'];?>.<?php echo $row['news_day_start'];?>～<?php echo $row['news_day_end'];?></td>
							<?php }?>
                        </tr>
                         
                        <tr>
                        	<td width="20%">News Details</td>
                            <td width="70%"><?php echo htmlspecialchars_decode($row['news_detail']) ;?></td>
                        </tr>
                     </table>
				</td>
                <td><p><span style="font-size:14px;"><a href="add_news.php?edit=<?php echo $row['id']; ?>" title="Edit" >Update</a>&nbsp;|&nbsp;<a href="add_news.php?del=<?php echo $row['id']; ?>" title="Delete" >Delete</a></span></td>
            </tr>
            <?php 	}	?>
            <tr align="center">
                <td height="14" colspan="6" class="tdPaging" bgcolor="#333333" style="padding-top:20px; font-size:10px; color:#ccc" >
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
    
    </div>
  </div>
		<?php
        	} else if($status=='active')
				{
        ?> 
		<div class="content">
		<div class="page-header">
		  <h1> View <strong>Active</strong> News</h1>
		</div>
		<div class="row" style="margin:0 auto; margin-left:0; text-align:center">
		  <div class="span14" align="center"style="margin:0 auto; margin-left:0; text-align:center" >
		   
			<table width="100%" border="2" cellpadding="5" cellspacing="10" style="margin-top:30px; border:0 solid #eee;">
    	 
              <tr bgcolor="#333333" style="border:1 solid #eee; color:#EEE">
                <td width="" align="left" style=""><strong>Sl no</strong></td>
                <td width=" " align="left"style=""><strong>News Details </strong></td>
                <td width=" " align="left"style=""><strong>Action</strong></td>
              </tr>
        
		
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
						 

			?>
			
         
            <tr   <?php if($cnt==0){echo "bgcolor='#555555'";$cnt=1;}else{echo "bgcolor='#888888'";$cnt=0;} ?> style="color:#CCC;" >
                <td width="60" ><?php echo $sl;$sl=$sl+1; ?></td>
                <td align="" >
					 <table width="100%" border="1" cellpadding="" cellspacing="" style="background:#FFF; color:#333;">
                     	<tr>
                        	<td width="20%">Status</td>
                            <td width="70%"> <strong><?php echo $row['status'];?></strong> </td>
                        </tr>
						<!-- 
                        <tr>
                        	<td width="20%">Title</td>
                            <td width="70%"> <strong><?php //echo $row['title'];?> </strong></td>
                        </tr>
                       -->
                        <tr>
                        	<td width="20%">News Date</td>
							<?php
								//if (!empty($row['news_day_start'])){
								if (($row['news_day_end'])=='No'){
							?>
                            <td width="70%"><?php echo $row['news_year'];?>.<?php echo $row['news_month'];?>.<?php echo $row['news_day_start'];?></td>
							<?php }else{ ?>
							<td width="70%"><?php echo $row['news_year'];?>.<?php echo $row['news_month'];?>.<?php echo $row['news_day_start'];?>～<?php echo $row['news_day_end'];?></td>
							<?php }?>
                        </tr>
                         
                        <tr>
                        	<td width="20%">News Details</td>
                            <td width="70%"><?php echo htmlspecialchars_decode($row['news_detail']) ;?></td>
                        </tr>
                         
                     </table>
				</td>
                <td><p><span style="font-size:14px;"><a href="add_news.php?edit=<?php echo $row['id']; ?>" title="Edit" >Update</a>&nbsp;|&nbsp;<a href="news_approve.php?del=<?php echo $row['id']; ?>" title="Delete" >Delete</a></span></td>
            </tr>
            <?php 	}	?>
            <tr align="center">
                <td height="14" colspan="6" class="tdPaging" bgcolor="#333333" style="padding-top:20px; font-size:10px; color:#ccc" >
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
    
    </div>
  </div>
  <?php
	}
  ?>
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