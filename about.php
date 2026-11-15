<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");								
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
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!-- Css Link -->
<!-- FOR MORE PROJECTS visit: codeastro.com -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Title -->
<title>Real Estate PHP</title>
</head>
<body>

<!--	Page Loader -->
<!-- <div class="page-loader position-fixed z-index-9999 w-100 bg-white vh-100">
	<div class="d-flex justify-content-center y-middle position-relative">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>
</div> -->
<!-- FOR MORE PROJECTS visit: codeastro.com -->
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <!-- <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>About US</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div> -->
         <!--	Banner   --->
		 <!-- FOR MORE PROJECTS visit: codeastro.com -->
        <!--	About Our Company -->
        <div class="full-row" >
            <div class="container">
                
				
				<?php 
					
					$query=mysqli_query($con,"SELECT * FROM about");
					while($row=mysqli_fetch_array($query))
					{
				?>
				<div class=" row border" style="background:#fdb733;border-top-left-radius:23rem;border-top-right-radius:23rem;">
                    <div class="col-md-12 col-lg-12  item-center d-flex justify-content-center ">
                        <h2 class="flex text-center font-weight-bolder text-secondary position-relative pb-4 mb-4" style="font-weight:400 !important;"><strong><?php echo $row['1'];?></h2>
                    </div>
                </div>
                <div class="row about-company text-white" style="background:#324661">
                    <div class="col-md-12 col-lg-12">
                        <div class="about-content">
                           <p>The "RealEstate" is a provide the information about rooms, flats ,Home,Buildings
which is available for rent and sale and will make easy to find the location of rooms
,flats,home and the cost also.<br>
At RealEstate, we believe that buying or selling a property is more than just a
transaction,it's a life-changing experience. That's why our team of dedicated real estate
professionals is committed to providing exceptional, personalized service to all of our clients.<br>
With years of experience and in-depth market knowledge, we help clients navigate the
complexities of the real estate market with ease and confidence. Whether you’re a first-time
homebuyer, an investor, or looking to sell your property, we tailor our services to meet your
unique needs.<br>
Our core values of integrity, professionalism, and commitment to client satisfaction guide
everything we do. We strive to make the process of buying or selling property as smooth and
stress-free as possible, always keeping your best interests at heart.<br>
At RealEstate, we don't just sell homes—we build relationships. Let us help you turn your
real estate dreams into reality.</p>
                        </div>
                    </div>
                    <!-- <div class="col-md-12 col-lg-5 mt-5">
                        <div class="about-img"> <img src="admin/upload/<?php echo $row['3'];?>" alt="about image"> </div>
                    </div> -->
                </div>
				
				<?php } ?>
				
            </div>
        </div>
        <!--	About Our Company -->        
        
       <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div><!-- FOR MORE PROJECTS visit: codeastro.com -->
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
