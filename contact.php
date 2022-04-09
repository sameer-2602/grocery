<!-- END nav -->
<?php 
include './inc/header.php';
include './inc/menu.php';
include './admin/inc/Connection.php';
if(isset($_POST['submit'])){
$name =  $_POST['name'];
$email =  $_POST['email'];
$sub =  $_POST['subject'];
$des =  $_POST['description'];
$res = $con->query("insert into feedback(name,email,subject,description) VALUES('$name','$email','$sub','$des')");
if($res) {
$success = "Successfully submitted";
?>
<?php
$success = null;
}else{
  $success = null;
}

}
?>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Address:</span> Incometax cross road usmanpura ahemdabad</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">veggie@info.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Website</span> <a href="#">veggie.com</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="contact.php" method="post" class="bg-white p-5 contact-form">
                    <?php if(isset($success)): ?>
                    <div class="form-group">
                        <div class="alert alert-success"><?=$success?></div>
                    </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea id="" name="description" cols="30" rows="7" class="form-control"
                            placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-md-6 d-flex">
                <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=usmanpura&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://kokagames.com/">FNF</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>
            </div>
        </div>
    </div>
</section>




<?php include './inc/footer.php' ?>