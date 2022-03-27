<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                </a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Vegefoods</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
<!--                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">-->
<!--                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>-->
<!--                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>-->
<!--                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>-->
<!--                    </ul>-->
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Menu</h2>
                    <ul class="list-unstyled">
                        <li><a href="shop.php" class="py-2 d-block">Shop</a></li>
                        <li><a href="about.php" class="py-2 d-block">About</a></li>
<!--                        <li><a href="#" class="py-2 d-block">Journal</a></li>-->
                        <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
            </div>
<!--            <div class="col-md-4">-->
<!--                <div class="ftco-footer-widget mb-4">-->
<!--                    <h2 class="ftco-heading-2">Help</h2>-->
<!--                    <div class="d-flex">-->
<!--                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">-->
<!--                            <li><a href="#" class="py-2 d-block">Shipping Information</a></li>-->
<!--                            <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>-->
<!--                            <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>-->
<!--                            <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>-->
<!--                        </ul>-->
<!--                        <ul class="list-unstyled">-->
<!--                            <li><a href="#" class="py-2 d-block">FAQs</a></li>-->
<!--                            <li><a href="#" class="py-2 d-block">Contact</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">A-401 Silver Harmony, SG Highway, Nr. High Court Ahmedabad, Gujarat India 382481.</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+123456789</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">veggie@info.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  by <a href="https://brainybeam.com/" target="_blank">Devlopment Team with Brainybeam</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.easing.1.3.js"></script>
<script src="./assets/js/jquery.waypoints.min.js"></script>
<script src="./assets/js/jquery.stellar.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/jquery.magnific-popup.min.js"></script>
<script src="./assets/js/aos.js"></script>
<script src="./assets/js/jquery.animateNumber.min.js"></script>
<script src="./assets/js/bootstrap-datepicker.js"></script>
<script src="./assets/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="./assets/js/google-map.js"></script>
<script src="./assets/js/main.js"></script>

<script>
    $(document).ready(function (){

        $(".openReg").on('click',function (){
            debugger
            $('form#regForm')[0].reset();
            $('form#loginForm')[0].reset();
        })
        $(".openLogin").on('click',function (){
            debugger
            $('form#regForm')[0].reset();
            $('form#loginForm')[0].reset();
        })

        $(".btnsubLogin").on('click',function (){
            $.ajax({
                url:'ajax.php',
                method:'post',
                data:$('form#loginForm').serializeArray(),
                success:function (){
                    $('form#loginForm')[0].reset();
                    location.reload();
                }
            })
        });

        $(".btnSubReg").on('click',function (){

            $("#regForm form").validate({
		rules: {
		 	name: {
			 	required: true
			 	
		 },
		 	email: {
			 	required: true
		 }
         address: {
			 	required: true
		 }
         contact: {
			 	required: true
		 }
		},
		submitHandler: function(form) {
            $.ajax({
                url:'ajax.php',
                method:'post',
                data:$('form#regForm').serializeArray(),
                success:function (){
                    $('form#regForm')[0].reset();
                    location.reload();
                }
            })
          }
	});





           
        })
    })

  



    $(function () {        

$("#newModalForm").validate({
    rules: {
        pName: {
            required: true,
            minlength: 8
        },
        action: "required"
    },
    messages: {
        pName: {
            required: "Please enter some data",
            minlength: "Your data must be at least 8 characters"
        },
        action: "Please provide some data"
    }
});
});
</script>
</body>
</html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<?php 
  
if(isset($_SESSION['msg'])){?>
<script>
    // setTimeout(() => {
        toastr.options = {
  tapToDismiss: true,
  toastClass: 'toast',
  containerId: 'toast-container',
  debug: false,
  fadeIn: 300,
  fadeOut: 1000,
  extendedTimeOut: 5000,
  iconClass: 'toast-info',
  positionClass: 'toast-top-right',
  timeOut: 5000, // Set timeOut to 0 to make it sticky
  titleClass: 'toast-title',
  messageClass: 'toast-message'
}
        toastr.success("<?=$_SESSION['msg']?>"+"<?=$_SESSION['user']['name'];?>");

    // }, 100);
</script>
<?php 
unset($_SESSION['msg']);
}  
  
  ?>

