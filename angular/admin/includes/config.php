<?php
define('DB_SERVER','localhost');
define('DB_USER','u770151235_imran');
define('DB_PASS' ,'EGscETl]Q4');
define('DB_NAME','u770151235_news');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>