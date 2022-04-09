<?php 
error_reporting(E_ALL ^ E_NOTICE);  
error_reporting(E_ALL ^ E_WARNING);  

$con = new mysqli('localhost','root','','grocery');
if($con->connect_error){
    echo "die";
    exit;
}
?>