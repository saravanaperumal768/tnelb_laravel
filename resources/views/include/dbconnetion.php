<?php
// $host        = "host = 10.163.0.195";
$host        = "host = localhost";
$port        = "port = 5432";
$dbname      = "dbname = tnelb";
$user      = "user = postgres";

$credentials = "user=postgres password=postgres";
//$db = pg_connect("$host $port $dbname $credentials");

$db = pg_connect("host='localhost' port=5432 dbname='tnelb' user='postgres' password='postgres'");

if(!$db) {
    echo "Error : Unable to open database\n";
} 

 
?>