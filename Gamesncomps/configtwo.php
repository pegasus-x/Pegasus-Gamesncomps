<?php
 date_default_timezone_set('asia/kolkata');

 $database = 'gamesncomps';
 $server = 'localhost';
 $user_name = 'root';
 $password = '';
 global $db;
 $db = new mysqli($server,$user_name,$password,$database);
 if ($db->connect_error) {
 	echo "Connection Lost";
 }

?>