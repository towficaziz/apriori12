  <?php
session_start();

session_destroy();
unset($_SESSION['tdcladmnpan']);

echo"<head>\n";
echo"<meta http-equiv='refresh' content='1;URL=index.php'>\n";
echo"</head>\n";
	 ?> 