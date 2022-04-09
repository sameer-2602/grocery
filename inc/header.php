
<?php
session_start();
  error_reporting(E_ALL ^ E_NOTICE);
  error_reporting(E_ALL ^ E_WARNING);

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FRESH GROCERIES</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/animate.css">
    
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/css/magnific-popup.css">

    <link rel="stylesheet" href="./assets/css/aos.css">

    <link rel="stylesheet" href="./assets/css/ionicons.min.css">

    <link rel="stylesheet" href="./assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="./assets/css/flaticon.css">
    <link rel="stylesheet" href="./assets/css/icomoon.css">
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>


  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md-9 pr-4 d-flex topper align-items-center">
					    	<!-- <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div> -->
						    <!-- <span class="text"></span> -->
                            <span class="text">freshgrocery@gmail.com</span>
					    </div>
					    <div class="col-md-3 pr-4 d-flex topper align-items-center">
					    	<!-- <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div> -->
                            
						   
                            <?php if($_SESSION &&  $_SESSION['user']): ?>
                                <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text"> 

                            <?=$_SESSION['user']['name']?>
                            </span>
					    </div>
                <?php endif;?>
                <?php if(!$_SESSION): ?>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text"> 

                            
                            </span>
					    </div>
                <?php endif;?></div>



					   
				    </div>
			    </div>
		    </div>
		  </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form method="post" action="javascript:;" id="loginForm">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input autotcomplete="" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input autotcomplete="" type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password"required>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <input autotcomplete="" type="hidden" name="formType" value="login">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-primary btnsubLogin">Login</button>
                    </div>
                </div>

            </div>
            </form>
        </div>
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form method="post" action="javascript:;" id="regForm">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Registration</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div id="logins-part" class="content" role="tabpanel"
                                 aria-labelledby="logins-part-trigger">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input autotcomplete="" name="name" type="text"

                                           class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter name"required>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input autotcomplete="" type="email"

                                           name="email" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter Email" required="">

                                </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Password</label>
                                        <input autotcomplete="" type="password"
                                               name="password" class="form-control" id="exampleInputEmail1"
                                               placeholder="Enter password" required>

                                    </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input autotcomplete="" type="text"

                                           name="address" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter Address"required>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Gender</label>

                                    <input autotcomplete="" type="radio" name="gender" value="male"
                                  >Male
                                    <input autotcomplete="" type="radio" name="gender" value="female"
                                        >Female

                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact</label>
                                    <input autotcomplete="" type="text"
                                           name="contact" class="form-control" id="exampleInputEmail1"
                                           placeholder="Enter Contact">
                                    <input autotcomplete="" type="hidden" name="role_id" value="2">
                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <input autotcomplete="" type="hidden" name="formType" value="register">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary btnSubReg">Register</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
  

