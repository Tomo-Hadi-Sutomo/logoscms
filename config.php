<?php
$detect=preg_match('/.php/',$_SERVER['REQUEST_URI']);
if($detect) {exit("Direct access not permitted.");}
//CONFIG MYSQL
$url="http://yourdomain.com/"; //base URL
$mysql_host="localhost"; //mysql host
$mysql_username="mysqlusername"; //mysql username
$mysql_password="mysqlpassword"; //mysql password
$mysql_db="mysqldatabase"; //mysql database
$mysql_table="logos"; //mysql table 1
$mysql_table2="login"; //mysql table 2
$admin_username="adminuser"; //Admin Username
$admin_password=md5('adminpassword'); //Admin password -> change inside md5('change this');

//DON'T CHANGE AFTER THIS
if (isset($_GET['field'])){
	$fields=$_GET['field'];
	define('FL',$fields);}
define('HO',$mysql_host);
define('US',$mysql_username);
define('PS',$mysql_password);
define('MDB',$mysql_db);
define('TL',$mysql_table);
define('TL2',$mysql_table2);
define('AE',$admin_username);
define('AW',$admin_password);
define('URL',$url);
$connect=(mysql_connect(HO,US,PS) AND mysql_select_db(MDB));
define('SQL',$connect);
$date = date("M d");
?>