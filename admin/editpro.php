<?php 
ob_start();

include './inc/header.php';
include './inc/sidebar.php';
include './inc/Connection.php';
if(isset($_REQUEST['dataid'])){
  $id = $_REQUEST['dataid'];
  $res = $con->query("select * from product where id =$id");
  $category = $con->query("select * from category");
  $result = mysqli_fetch_assoc($res);
}else{
if($_REQUEST['dataid'] == 0){

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $st = $_POST['small_text'];
        $lt = $_POST['large_text'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $dis = $_POST['discount_price'];
        $cat_id = $_POST['cat_id'];
        
        $res = $con->query("insert into product (name,small_text,large_text,price,image,discount_price,cat_id) values('$name','$st','$lt','$price','$image','$dis','$cat_id')");
        // echo "insert into product (name,small_text,large_text,price,image,discount_price) values('$name','$st','$lt','$price','$image','$dis')";
        // exit;
        if($res){
        header('location:product.php');    
        }
      }
}
}

if(isset($_POST['update'])){
  
  $id = $_POST['id'];
  $name = $_POST['name'];
  $st = $_POST['small_text'];
  $lt = $_POST['large_text'];
  $price = $_POST['price'];
  $dis = $_POST['discount_price'];
  $cat_id = $_POST['cat_id'];
    $res = $con->query("Update product set name='$name',small_text='$st',large_text='$lt',price='$price',discount_price='$dis',cat_id='$cat_id' where id='$id'");
    // echo "Update product set name='$name',small_text='$st',large_text='$lt',price='$price',image='$image',discount_price='$dis' where id='$id'";
    // exit;
    header('location:product.php');
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
                            <h3 class="card-title">Add New User</h3>
                        </div>
                        <div class="card-body p-3">
                            <div class="bs-stepper">

                                <div class="bs-stepper-content">
                                    <!-- your steps content here -->
                                    <form method="post" action="editpro.php">
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
                                                <label for="exampleInputEmail1">price</label>
                                                <input type="text"
                                                    value="<?php if(isset($result)) echo $result['price']?>"
                                                    name="price" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter Price">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Category</label>
                                                <select name="cat_id" class="form-control">
                                                      
                                                <?php foreach($category as $val): ?>    
                                                <option value="<?=$val['id'];?>" <?php echo ($result['cat_id'] == $val['id']) ? "selected":''?> > <?=$val['name'];?></option>
                                                <?php endforeach;?>
                                                </select>

                                            </div>
                                            <?php if(!$result): ?>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">image</label>
                                                <input type="file" name="image" class="form-control"
                                                    id="exampleInputEmail1" placeholder="Enter Email">

                                            </div>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">small Description</label>
                                                <input type="text"
                                                    value="<?php if(isset($result)) echo $result['small_text']?>"
                                                    name="small_text" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter Address">

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Large Description</label>
                                                <?php 
                                                $selected = 'selected';
                                                ?>
                                                <textarea cols="40" rows="5" class="form-control"
                                                    name="large_text"><?php if(isset($result)) echo $result['large_text']?></textarea>

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Discount price</label>
                                                <input type="text"
                                                    value="<?php if(isset($result)) echo $result['discount_price']?>"
                                                    name="discount_price" class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter name">
                                                <input type="hidden" name="id" value="<?=$result['id']?>">
                                            </div>
                                            <?php if(!isset($result)):?>
                                            <button name="submit" value="submit" type="submit"
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