<?php 
ob_start();

include './inc/header.php';
include './inc/sidebar.php';
include './inc/Connection.php';
if(isset($_REQUEST['dataid'])){
  $id = $_REQUEST['dataid'];
  $res = $con->query("select * from users where id =$id");
  $result = mysqli_fetch_assoc($res);
}else{
if($_REQUEST['dataid'] == 0){

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $contact = $_POST['contact'];
        $password = $_POST['password'];
        $res = $con->query("insert into users (name,email,password,gender,contact,address,role_id) values('$name','$email','$password','$gender','$contact','$address','2')");
        // echo "insert into users (name,email,password,gender,contact,address) values('$name','$email','$password','$gender','$contact','$address')";
        // exit;
        if($res){
        header('location:customer.php');    
        }
      }
}
}

if(isset($_POST['update'])){
  
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $gender = $_POST['gender'];
  $contact = $_POST['contact'];
    $res = $con->query("Update users set name='$name',email='$email',address='$address',gender='$gender',contact='$contact' where id='$id'");
    // echo "Update users set name='$name',email='$email',address='$address',gender='$gender',contact='$contact' where id='$id'";
    // exit;
    header('location:customer.php');
  }
?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Advanced Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Advanced Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->

            <!-- /.card -->

            <!-- SELECT2 EXAMPLE -->

            <!-- /.card -->


            <!-- /.card -->


            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Add New Products</h3>
                        </div>
                        <div class="card-body p-3">
                            <div class="bs-stepper">

                                <div class="bs-stepper-content">
                                    <!-- your steps content here -->
                                    <form method="post" action="editcus.php">
                                        <div id="logins-part" class="content" role="tabpanel"
                                            aria-labelledby="logins-part-trigger">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text"
                                                    value="<?php if(isset($result)) echo $result['name']?>" name="name"
                                                    class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter name">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input type="text"
                                                    value="<?php if(isset($result)) echo $result['email']?>"
                                                    name="email" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter Email">

                                            </div>
                                            <?php if(!$result): ?>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="text"
                                                    name="password" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter Email">

                                            </div>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input type="text"
                                                    value="<?php if(isset($result)) echo $result['address']?>"
                                                    name="address" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter Address">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Gender</label>
                                                <?php 
                                                $selected = 'selected';
                                                ?>
                                                <input type="radio" name="gender" value="male"
                                                    <?php echo ($result['gender'] == 'male')?'checked':''; ?>>Male
                                                <input type="radio" name="gender" value="female"
                                                    <?php echo ($result['gender'] == 'female')? 'checked':''   ?>>Female

                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Contact</label>
                                                <input type="text"
                                                    value="<?php if(isset($result)) echo $result['contact']?>"
                                                    name="contact" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter name">
                                                <input type="hidden" name="id" value="<?=$result['id']?>">
                                            </div>
                                            <?php if(!isset($result)):?>
                                            <button name="submit"  value="submit" type="submit"
                                                class="btn btn-primary">Add</button>
                                                <?php endif ?>
                                                <?php if(isset($result)):?>
                                            <button name="update" value="submit" type="submit"
                                                class="btn btn-primary">Update</button>
                                                <?php endif ?>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

?>

<?php 
include './inc/footer.php';

?>