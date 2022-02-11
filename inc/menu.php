
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Vegefoods</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link" href="shop.php">Shop</a>
              <!-- <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.php">Shop</a> -->
              	<!-- <a class="dropdown-item" href="wishlist.php">Wishlist</a>
                <a class="dropdown-item" href="product-single.php">Single Product</a>
                <a class="dropdown-item" href="cart.php">Cart</a> -->
                <!-- <a class="dropdown-item" href="checkout.php">Checkout</a>
              </div> -->
            </li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
	          <!-- <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li> -->
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <?php if($_SESSION['user']): ?>
                    <li class="nav-item"><a href="logout.php">Logout</a></li>
                <?php endif;?>
                <?php if(!$_SESSION['user']): ?>
                    <li class="nav-item"><a href="contact.php"  data-toggle="modal" data-target="#exampleModal" class="nav-link">Login</a></li>
                <?php endif;?>
	          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

	        </ul>
	      </div>
	    </div>
	</nav>