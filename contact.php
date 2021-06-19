<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>Dollar Shadenet</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php include 'Head.php';?>
<!--link rel="canonical" href="https://infotechspace.com/" /-->

</head>

<body>
<div class="page-wrapper">
<?php
session_start();
include 'Header.php';?>
    <!-- End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/about-us/about-us-banner.png);">
        <div class="auto-container">
            <div class="clearfix">
				<div class="pull-left">
					<h1>Contact</h1>
					<div class="text"></div>
				</div>
				<div class="pull-right">
					<ul class="bread-crumb clearfix">
						<li><a href="index.php">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section Begin -->

    <section class="contact-section spad mt-60 sm-mt-40 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-text">
                        <h3>Get in touch</h3>
                        <p></p>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Address</h5>
                                <p>Pune — Banglore Highway,Behind Rajesh Motors, A/P — Vathar,Dist. Kolhapur - 416112, Maharashtra</p>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Phone</h5>
                                <ul>
                                    <li>125-711-811</li>
                                    <li>125-668-886</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ct-text">
                                <h5>Email</h5>
                                <p>Support.hariom-flexipack@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-form">
                        <h3>Work with Us!</h3>
                        <div id="message" style="display:none;">
                          <font color="green">
                            <b>Mail has been sent sucessfully..</b>
                          </font>
                        </div>
                        <form action="" method="post">
                            <input type="text" placeholder="Name" id="name" name="name" required="">
                            <input type="text" placeholder="Email" name="email" id="email" required="">
                            <input type="text" placeholder="Subject" name="subject" id="subject" required="">
                            <textarea placeholder="Message" id="msg" name="body" required=""></textarea>
                            <!-- <button type="submit" class="site-btn" >Submit</button><br> -->
                            <input type="submit" name="Csubmit" id="submitmail" class="site-btn" value="Submit"><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15275.018039829047!2d74.2849444!3d16.8385304!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41adb2cd0065abc5!2sHariom+Flexipack+Industries!5e0!3m2!1sen!2sin!4v1521617190560"
            height="635" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- Contact Section End -->

	<!--Main Footer-->

</div>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>
	 <?php include 'footer.php';?>

</body>
<script>
$(document).ready(function(){

 $('#submitmail').click(function(){
      var name = $('#name').val();
      var email = $('#email').val();
      var subject = $('#subject').val();
      var message = $('#body').val();
      //alert( message);
      if(Name != ""  || email != "" || subject != "" || message != "")
      {
           $.ajax({
                url:"contactmail.php",
                method:"POST",
                data:{name:name, email:email,subject:subject, message:message},
                success:function(data)
                {

                     alert(data);
                }
           });
         }
         else {
           alert ("All fields are mandatory..");
         }

 });
});
</script>
</html>
