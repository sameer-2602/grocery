<?php 

include './admin/inc/Connection.php';
session_start();
if(isset($_POST) && $_POST['formType'] == 'login'){
  $email = $_POST['email'];
  $password = $_POST['password'];
$res = $con->query("select * from users where email='$email' and password='$password'");
// echo "select * from users where email='$email' and password='$password'";
// exit;
$result = mysqli_fetch_assoc($res);
// print_r($result);
// exit;
  if($result){
    $_SESSION['user'] = $result;
  }
//   print_r($_SESSION);
//   exit;
echo json_encode(['status'=>200]);
}
if(isset($_POST) && $_POST['formType'] == 'register'){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $contact= $_POST['contact'];
  $address= $_POST['address'];
    $gender= $_POST['gender'];
    $role_id= $_POST['role_id'];
$res = $con->query("insert into  users (name,email,password,contact,address,gender,role_id) values('$name','$email','$password','$contact','$address','$gender','$role_id')");

$res = $con->query("select * from users where email='$email' and password='$password'");
$result = mysqli_fetch_assoc($res);
  if($result){
    $_SESSION['user'] = $result;
  }
  // header('location:index.php');
  echo json_encode(['status'=>200]);
}

?>