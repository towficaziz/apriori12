	<?php  
		//This Database will be generating from rndinformatics.com's website server and also this code is only for showing ...
		// This files original Location is in http://rndinformatics.com/activebit_database/connect_activebit.php
		
	 	
		//this connection is only for LOCAL ACCESS
			$host="localhost";
			$user="root";
			$pass="";
			$db="apriori";
			mysql_connect($host,$user,$pass) or die("Error in connecting....".mysql_error());
			mysql_select_db($db) or die("Error in selecting...".mysql_error());
	 			
	/*	//This Database is generating from rndinformatics.com's website server and also this code is only for showing ...
		// This files original Location is in http://rndinformatics.com/activebit_database/connect_activebit.php
			$host="localhost";
			$user="rndinfo_active";
			$pass="Sabuj_007";  
			$db="rndinfo_activebit";
			mysql_connect($host,$user,$pass) or die("Error in connecting....".mysql_error());
			mysql_select_db($db) or die("Error in selecting...".mysql_error());
	 		/*
			$host="localhost";
			$user="bes_dbusr";//User "bes_dbusr" was added to the database "bes_db"
			$pass="BE5u5r!2";//Added user "bes_dbusr" with password "BE5u5r!2".
			$db="bes_db";
			mysql_connect($host,$user,$pass) or die("Error in connecting....".mysql_error());
			mysql_select_db($db) or die("Error in selecting...".mysql_error());
	*/	?>