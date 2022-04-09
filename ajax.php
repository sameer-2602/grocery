<?php 
session_start();

include './admin/inc/Connection.php';
if(isset($_POST) && $_POST['formType'] == 'login'){
  $email = $_POST['email'];
  $password = $_POST['password'];
$res = $con->query("select * from users where email='$email' and password='$password'");
if($res->num_rows > 0){
$result = mysqli_fetch_assoc($res);  
 if($result){
    $_SESSION['user'] = $result;
    $_SESSION['msg'] = "Welcome "; 
  }
}
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
    $_SESSION['msg'] = "Welcome "; 
  }
  // header('location:index.php');
  echo json_encode(['status'=>200]);
}


if($_REQUEST['type'] =='quantity_update'){
  $sql = $con->query('select * from cart where id='.$_POST['cart_id']);
  $result = mysqli_fetch_assoc($sql);
  $qty = $_POST['qty'];
  $total = $_POST['qty'] * $_POST['price'] ;
  $id = $result['id'];
  $update =  $con->query("update cart set qty='$qty',total='$total' where id='$id'");
  print("update cart set qty='$qty',total='$total' where id='$id'");
  exit;
  echo json_encode(['status'=>200]);

}


if($_REQUEST['type'] == 'checkout'){
echo "<pre>";
$_POST['cart_id'] = array_unique($_POST['cart_id']);


include './inc/Connection.php';
// print_r($_POST);
// exit;

$keys = array_keys($_POST);
$arr = array();
$final = array();
foreach($keys as $keyval){
  

foreach($_POST[$keyval] as $key => $val){

    // unset($_POST['cart_id']);
    // unset($_POST['image']);

$cart_id = implode(",",$_POST['cart_id']);
$_POST['cart_id'][$key] =  explode(',',$cart_id);
$price = implode(",",$_POST['price']);
$_POST['user_id'][$key] = $_SESSION['user']['id'];
$_POST['price'] = explode(",",$price);
        $arr[$key][$keyval] = $val;
   }

  
// array_push($final,$arr);

}

foreach($arr as $val){

$sql = $con->query('delete from cart where user_id='.$_SESSION['user']['id']);

$name = $val['name'];
$qty = $val['name'];
$user_id = $_SESSION['user']['id'];
$product_id = $val['product_id'];
$price = $val['price'];
$date = date('y-m-d');
$ins = "INSERT INTO orders(`product_name`,`product_id`, `price`, `qty`, `user_id`,`purchaseDate`) values('$name','$product_id','$price','$qty','$user_id','$date')";
  $con->query($ins);  
}

}
?>