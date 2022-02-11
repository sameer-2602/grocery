<?php 
include './inc/Connection.php';
if(isset($_REQUEST['dataid'])){
    $id = $_REQUEST['dataid'];
    $res = $con->query("delete from users where id='$id'");
    header('location:customer.php');

}
