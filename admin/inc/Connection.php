<?php 
$con = new mysqli('localhost','root','','test');
if($con->connect_error){
    echo "die";
    exit;
}
?>