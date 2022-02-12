
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
<!--      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
      <span class="brand-text font-weight-light">Grocery Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">

        <div class="info">
          <a href="#" class="d-block">Welcome <?=$_SESSION['user']['name']?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php
          if(explode('/',$_SERVER['REQUEST_URI'])[3] == 'dashboard.php'){
              $active = 'active';
          }else{
              $active = '';
          }
          ?>


            <li class="nav-item menu-open">
            <a href="dashboard.php" class="nav-link <?=$active?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
            <?php
            if(explode('/',$_SERVER['REQUEST_URI'])[3] == 'customer.php'){
                $active = 'active';
            }else{
                $active = '';
            }
            ?>

            <li class="nav-item">
            <a href="customer.php" class="nav-link <?=$active?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Customers
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
            <?php
            if(explode('/',$_SERVER['REQUEST_URI'])[3] == 'product.php'){
                $active = 'active';
            }else{
                $active = '';
            }
            ?>
          <li class="nav-item">
            <a href="product.php" class="nav-link <?=$active?>">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
                Products
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
            <?php
            if(explode('/',$_SERVER['REQUEST_URI'])[3] == 'category.php'){
                $active = 'active';
            }else{
                $active = '';
            }
            ?>
          <li class="nav-item">
            <a href="category.php" class="nav-link <?=$active?>">
              <i class="nav-icon fas fa-list"></i>
              <p>
               Categories
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
            <?php
            if(explode('/',$_SERVER['REQUEST_URI'])[3] == 'logout.php'){
                $active = 'active';
            }else{
                $active = '';
            }
            ?>
            <li class="nav-item">
                <a href="logout.php" class="nav-link <?=$active?>">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Logout
                        <!-- <i class="right fas fa-angle-left"></i> -->
                    </p>
                </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>