<?php
//sitewide configuration data here
//set local time zone
putenv('TZ_US/Eastern');

//create DB constants
define('HOST', 'resellhost.accountsupportmysql.com');
define('DBNAME' , 'page');
define('USER' ,'jamietribe');
define('PASS' , 'noah11');

//connect to DB
$db = new mysqli(HOST, USER , PASS, DBNAME);

if(mysqli_connect_errno())
{
		echo 'Error: Could not connect to database. Please try again later';
		exit();
}
?>
