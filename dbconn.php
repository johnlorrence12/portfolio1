<?php
session_start();
$server="localhost";
$user="root";
$pass="";
$dbname="oop_34_setb";
$conn=new mysqli($server,$user,$pass,$dbname);
if($conn->connect_error){
    echo "Database not connected";
}
?>