<?php
 define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'nexpayco_Victor');
   define('DB_PASSWORD', 'Victor@2021');
   define('DB_DATABASE', 'nexpayco_Nexpay');

 
   $con= mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
    
	  //session_start();

?>