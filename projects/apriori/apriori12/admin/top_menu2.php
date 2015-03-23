<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link rel="stylesheet" media="screen" href="css/dropdown_menu.css">
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/validation.js" type="text/javascript"></script>
</head>

<body>

         
 <nav>
	<ul>
    	 
        <li><a href="view_user.php" title="">Users</a>
        	<ul class=" ">
				<li><a href="add_user.php" title="">Add User</a></li>
				<li><a href="change_password.php" title="">Change Password</a></li>
            </ul>
        </li>
		<li><a href="view_comment.php" title="">Manage News(What's New)</a>
        	<ul class=" ">
				<li><a href="view_news.php?status=active" title="">View Active News</a></li>
				<li><a href="view_news.php?status=pending" title="">View Pending News</a></li>
				<li><a href="add_news.php" title="">Add New News</a></li>
            </ul>
        </li>
		 <li><a href="view_comment.php" title="">Manage Clients Comments</a>
        	<ul class=" ">
				<li><a href="view_comment.php?status=active" title="">View Active Comments</a></li>
				<li><a href="view_comment.php?status=pending" title="">View Pending Comments</a></li>
				<li><a href="add_comment.php" title="">Add New Comment</a></li>
            </ul>
        </li>
        <!--<li><a href="view_contact.php" title="">Contact Messages</a></li>-->
        <li><a href="logout.php" title="">Logout</a></li>   
		
	</ul>
</nav>

</body>
</html>