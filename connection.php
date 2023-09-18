<?php
$hostname='localhost';
$username='root';
$password='';
$database='LoagmaCmC';
$conn= mysqli_connect($hostname,$username,$password,$database);


if (!$conn){
echo "not connected";
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>
