<?php 
include("config.php");
$error="";
$msg="";
if(isset($_POST['send']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	
	if(!empty($name) && !empty($email) && !empty($phone) && !empty($subject) && !empty($message))
	{
		
		$sql="INSERT INTO contact (name,email,phone,subject,message) VALUES ('$name','$email','$phone','$subject','$message')";
		   $result=mysqli_query($con, $sql);
		   if($result){
			   $msg = "<p class='alert alert-success'>Message Send Successfully</p> ";
		   }
		   else{
			   $error = "<p class='alert alert-warning'>Message Not Send Successfully</p> ";
		   }
	}else{
		$error = "<p class='alert alert-warning'>Please Fill all the fields</p>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">
<!-- FOR MORE PROJECTS visit: codeastro.com -->
<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--	Title
	=========================================================-->
<title>Real Estate PHP</title>
</head>
<body>

<!--	Page Loader
=============================================================
<div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div>
--> 
<!-- FOR MORE PROJECTS visit: codeastro.com -->
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner -->
        <!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Contact</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
        <!--	Banner -->
		<!-- FOR MORE PROJECTS visit: codeastro.com -->
        <!--	Contact Information -->
        <div class="full-row" style="background-image: url('images/banner/p4.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; margin-bottom: 5px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-5 bg-secondary">
                        <div> 
                            <h3 class="mb-4 mt-4 text-white text-center">Contacts</h3>
							
                            <ul class="d-flex items-center justify-content-center text-center mx-auto">
                                <li class="inline-block mb-4 pr-6" style="list-style:none;display:inline-block; padding-right: 12px"> <i class="fas fa-map-marker-alt text-white mr-2 font-13 mt-1"></i>
                                    <div class="contact-address">
                                        <h5 class="text-white">Address</h5>
                                        <span class="text-white">Pen Private High School</span> <br>
										
										</div>
                                </li>
                                <li class="inline-block mb-4" style="list-style:none; display:inline-block; padding-right: 12px"> <i class="fas inline-block fa-phone-alt text-white mr-2 font-13 mt-1"></i>
                                    <div class="contact-address">
                                        <h5 class="text-white">Call Us</h5>
                                        <span class="d-table text-white">9096203815</span>
										<span class="text-white">7350919282 </span>
									</div>
                                </li>
								<li class="inline-block mb-4" style="list-style:none; display:inline-block; padding-right: 12px"> <i class="fas fa-envelope text-white mr-2 font-13 mt-1"></i>
                                    <div class="contact-address">
                                        <h5 class="text-white">Email Adderss</h5>
										<span class="d-table text-white"><a href="#">tirthapatil2004@gmail.com</a></span>
										<!-- <span class="text-white">helpline@realestatest.com</span> -->
										</div>
                                </li>
                            </ul>
                        </div>
                    </div>
					<div class="col-lg-1"></div>
                    <div class="col-md-12 col-lg-12">
						<div class="container">
                        <div class="row">
							<div class="col-lg-12">
								<h2 class=" text-center mb-5" style="color:#d3fc66">Get In Touch</h2>
								<?php echo $msg; ?><?php echo $error; ?>
							</div>
						</div><!-- FOR MORE PROJECTS visit: codeastro.com -->
						<div class="row">
							<div class="col-md-12">
								<form class="w-100" action="#" method="post">
									<div class="row">
										<div class="row mb-4">
											<div class="form-group col-lg-6">
												<input type="text"  name="name" class="form-control" style="background:#ffffdb;"placeholder="Your Name*">
											</div>
											<div class="form-group col-lg-6">
												<input type="text"  name="email" class="form-control" style="background:#ffffdb;"placeholder="Email Address*">
											</div>
											<div class="form-group col-lg-6">
												<input type="text"  name="phone" class="form-control" style="background:#ffffdb;"placeholder="Phone" maxlength="10">
											</div>
											<div class="form-group col-lg-6">
												<input type="text" name="subject"  class="form-control" style="background:#ffffdb;"placeholder="Subject">
											</div>
											<div class="col-lg-12">
												<div class="form-group">
													<textarea name="message" style="background:#ffffdb;"class="form-control" rows="5" placeholder="Type Comments..."></textarea>
												</div>
											</div>
										</div>
										<div class="flex text-center items-center justify-content-center">
										<button type="submit" value="send message" name="send" class="btn btn-danger">Send Message</button>
</div>
									</div>
								</form>
							</div>
						</div>
						</div>
					</div>
                </div>
            </div>
        </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
        <!--	Contact Inforamtion -->
        
        <!--	Map -->
		
		<iframe src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=Private%20High%20School%20pen%20pen+(Private%20High%20School)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		<!--	Map -->
        
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>  

</body>
</html>