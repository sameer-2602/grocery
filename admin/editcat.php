<?php 
ob_start();

include './inc/header.php';
include './inc/sidebar.php';
include './inc/Connection.php';
if(isset($_REQUEST['dataid'])){
  $id = $_REQUEST['dataid'];
  $res = $con->query("select * from category where id =$id");
  $result = mysqli_fetch_assoc($res);
}else{
  if(isset($_POST['submit'])){
    $name = $_POST['category'];
    $res = $con->query("insert into category (name) values('$name')");
    header('location:category.php');
  }
}

if(isset($_POST['update'])){
  $id = $_POST['id'];
  $name = $_POST['category'];
    $res = $con->query("Update category set name='$name' where id='$id'");
    header('location:category.php');
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
                            <h3 class="card-title">Add New Cat</h3>
                        </div>
                        <div class="card-body p-3">
                            <div class="bs-stepper">

                                <div class="bs-stepper-content">
                                    <!-- your steps content here -->
                                    <form method="post" action="editcat.php">
                                        <div id="logins-part" class="content" role="tabpanel"
                                            aria-labelledby="logins-part-trigger">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Category</label>
                                                <input type="text" value="<?php if(isset($result)) echo $result['name']?>"
                                                    name="category" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter name">
                                                <input type="hidden" name="id" value="<?=$result['id']?>">
                                            </div>
                                            <?php if($result['id']):?>
                                            <button name="update" value="submit" type="submit"
                                                class="btn btn-primary">Update</button>
    <?php endif; ?>
                                            <?php if(!$result['id']):?>
                                            <button name="submit" value="submit" type="submit"
                                                    class="btn btn-primary">submit</button>
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