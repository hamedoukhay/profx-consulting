<?php
define('HOST','localhost');
define('DB_USER','c1_expertup');
define('DB_PASS','UG5C3tnvHn');
define('DB_NAME','c1_expertup');

/*****************************/
/********DB_connect***********/
/*****************************/

mysql_connect(HOST,DB_USER,DB_PASS);
mysql_select_db(DB_NAME);
?>