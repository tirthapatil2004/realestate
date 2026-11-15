<header id="header" class="transparent-header-modern fixed-header-bg-white w-100">
            <div class="top-header bg-dark">
                <div class="container">
                    
                </div>
            </div>
            <div class="main-nav secondary-nav hover-success-nav py-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0"> <a class="navbar-brand position-relative" href="index.php"><img class="nav-logo" src="images/logo/log.png" alt=""></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                       <!-- <li class="nav-item dropdown"> <a class="nav-link" href="index.php" role="button" aria-haspopup="true" aria-expanded="false">Home</a></li>-->
										
										<li class="nav-item"> <a class="nav-link" href="about.php" style="font-weight: 900;font-size:1.5rem;">About</a> </li>
										
                                        <li class="nav-item"> <a class="nav-link" href="contact.php" style="font-weight: 900;font-size:1.5rem;">Contact</a> </li>										
										
                                        <li class="nav-item"> <a class="nav-link" href="property.php" style="font-weight: 900;font-size:1.5rem;">Properties</a> </li>
                                        
                                        <!-- <li class="nav-item"> <a class="nav-link" href="agent.php">Agent</a> </li> -->

										
										
                                    </ul>
                                    <ul class="navbar-nav" style="padding-left:30rem;">
									<?php  if(isset($_SESSION['uemail']))
										{ ?>
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false " style="font-weight: 900;font-size:1.5rem;">My Account</a>
											<ul class="dropdown-menu">
												<li class="nav-item"> <a class="nav-link" href="profile.php" >Profile</a> </li>
												<!-- <li class="nav-item"> <a class="nav-link" href="request.php">Property Request</a> </li> -->
                                                <li class="nav-item"><a class="nav-link" style="border-radius:30px;" href="submitproperty.php">Submit Property</a></li>
												<li class="nav-item"> <a class="nav-link" href="feature.php">Your Property</a> </li>
												<li class="nav-item"> <a class="nav-link" href="logout.php">Logout</a> </li>	
											</ul>
                                        </li>
										<?php } else { ?>
										<li class="nav-item"> <a class="nav-link" href="login.php"style="font-weight:900;font-size:1.5rem">Login/Register</a> </li>
										<?php } ?>
										
                                        </ul>

								<!--	<a class="btn text-white d-none d-xl-block bg-dark" style="border-radius:30px;" href="submitproperty.php">Submit Property</a> -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        