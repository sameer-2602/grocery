<?php 
include './inc/Connection.php';
if(isset($_REQUEST['dataid'])){
    $id = $_REQUEST['dataid'];
    $res = $con->query("delete from category where id='$id'");
    $path = './category.php';
    header("location:$path");

}

?>

