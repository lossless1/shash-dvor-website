<?php
define("ROOTURL","http://" . $_SERVER['HTTP_HOST']);
define("ROOTPATH","/");
define("PHP_PATH",ROOTPATH."public_html/app/php");

require_once (".redbeans/rb.php");
include ROOTPATH."./redbeans/rb.php";

global $DB;
$DB['username'] = "";
$DB['database'] = "";
$DB['host'] = "";
$DB['password'] = "";



?>

