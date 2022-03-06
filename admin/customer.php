<?php 
include './inc/header.php';
include './inc/sidebar.php';
include './inc/Connection.php';
$res = $con->query("select * from users where role_id =2");

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Customer</h3>
                <!-- <a href="editcus.php?dataid=null" class="btn btn-primary float-right">Add New</a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php foreach($res as $val): ?>
                        <tr>
                          <td><?=$val['id']?></td>
                          <td><?=$val['name']?></td>
                          <td><?=$val['email']?></td>
                          <td><?=$val['gender']?></td>
                          <td><?=$val['address']?></td>
                          <td>
                          <a href="editcus.php?dataid=<?=$val['id']?>" class="btn btn-primary">Edit</a>
                          <a href="deletecus.php?dataid=<?=$val['id']?>" class="btn btn-danger">Delete</a>


                          </td>
                      </tr>
                        <?php  endforeach?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php 
include './inc/footer.php';

?>