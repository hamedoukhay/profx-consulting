<?php
define('HOST','localhost');
define('DB_USER','c1_expertup');
define('DB_PASS','UG5C3tnvHn');
define('DB_NAME','c1_expertup');

/*****************************/
/********DB_connect***********/
/*****************************/
/*$dbh = new PDO('mysql:host='.HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
define($dbh);*/
mysql_connect(HOST,DB_USER,DB_PASS);
mysql_select_db(DB_NAME);
?>