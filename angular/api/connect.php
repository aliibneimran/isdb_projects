<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("access-control-allow-methods: put,get,post,delete");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$host = "localhost";
$username = "u770151235_imran";
$password = "EGscETl]Q4";
$database = "u770151235_news";

$db = new mysqli($host,$username,$password,$database);

?>