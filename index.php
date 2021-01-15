
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Property Wala Landing Page</title>
		<!-- Bootstrap Core CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<!-- Custom Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Mrs+Sheppards%7CDosis:300,400,700%7COpen+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800;' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
		<!-- Plugin CSS -->
		<link rel="stylesheet" href="css/animate.min.css" type="text/css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<link rel="stylesheet" href="css/slick.css" type="text/css">
		<link rel="stylesheet" href="css/slick-theme.css" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<style>
		.modal {
		display: none; /* Hidden by default */
		position: fixed; /* Stay in place */
		z-index:2000;
		padding-top: 100px; /* Location of the box */
		}
		/* Modal Content */
		.modal-content1 {
		background-color: #fefefe;
		margin: auto;
		padding: 20px;
		border: 1px solid #888;
		width: 50%;
		}
		 input {
    margin-bottom: 25px !important;
}
		</style>
	</head>
	<body>
		<div class="whatasapp">
			<span class="paddingall10 heading text-white pull-left"> Schedule a Site Visit<a href="https://api.whatsapp.com/send?phone=+91-123456789
				&amp;text=Hi I am interested in knowing more about *Propertywala*.Please Share the details. My Name is" target="_blank">
			<img src="images/Image 2.png" height="50px"></a></span>
		</div>
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					
					<a data-toggle="modal" data-target="#myModal">
					<img src="http://thepropertywala.in/realstatelogomoreshadow.png" class="img-responsive logo" style="width: 123px; height:80px;"></a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a  href="#Godrej-new">Overview</a>
						</li>
						<li>
							<a  href="#Amenities">Highlights & Amenities</a>
						</li>
						<li>
							<a  href="#services">Floor Plan</a>
						</li>
						<li>
							<a  href="#pricing">Price</a>
						</li>
						<li>
							<a  href="#invest">Brochure</a>
						</li>
						<li>
							<a class="call-no" href="tel:" style="color: #B80F5D!important">Book Free Site Tour</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->
		</nav>
		<!-- banner start -->
		<section class="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-4 wow fadeInLeft banner-text" style="">
						<h2 class="text-white">PropertywalaNew Project </h2>
						<h4 class="text-white">Sector 43, Noida</h4>
						<ul class="list-inline">
							<li>2 BHK | 3 BHK | 4 BHK Luxury Apartments </li>
							<li>Starting ₹ 1Cr. Onwards* </li>
							
						</ul>
					</div>
					<div class="col-md-2">
						
					</div>
					<div class="col-md-6 topForm" style="z-index: 1">
						<h4 class="text-white">Get Early Bird Offers</h4>
						
						<!--<form  method="post" action="email.php"  class="text-left">-->
						<form name="registration_form" action="newemail.php"  method="POST" class="text-left"  >
							<input name="name" type="text" class="col-md-12 norightborder" placeholder="Enter Your Name *" required>
							<input name="contactno" type="phone" class="col-md-12" placeholder="Enter Your Mobile No. *" required>
							<input name="email" type="email" class="col-md-12" placeholder="Enter Your email *" required>
							<input type="submit" id="myButton"  name="submit" class="contact submit btn btn-primary btn-xl" value="Book Visit Now"  >
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- banner end -->
		<!-- service section start -->
		<section class="service wow zoomIn" >
			<div class="container">
				<div class="row">
					<div class="col-md-2 text-center borderRight">
						<div class="row">
							<div class="img-service">
								<img src="images/noun_Apartment_2062209.svg">
							</div>
							<div class="content-service">
								<h3>Property Type</h3>
								<h5>Luxury Residential Apts</h5>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-sm-12 col-xs-12 text-center borderRight">
						<div class="row">
							<div class="img-service">
								<img src="images/noun_bedroom_2366242.svg">
							</div>
							<div class="content-service">
								<h3>Configuration</h3>
								<h5>2 | 3 | 4 BHK </h5>
							</div>
						</div>
					</div>
					<div class="col-md-2 col-sm-12 col-xs-12 text-center borderRight">
						<div class="row">
							<div class="img-service">
								<img src="images/noun_price_3034875.svg">
							</div>
							<div class="content-service">
								<h3>Pricing</h3>
								<h5>₹ 1 Cr. Onwards* </h5>
							</div>
						</div>
					</div>
					<div class="col-md-2  col-sm-12 col-xs-12 text-center borderRight">
						<div class="row">
							<div class="img-service">
								<img src="images/noun_Construction_2085177.svg">
							</div>
							<div class="content-service">
								<h3>Possession</h3>
								<h5 style="white-space: nowrap;">Coming Soon</h5>
							</div>
						</div>
					</div>
					<div class="col-md-2  col-sm-12 col-xs-12 text-center borderRight">
						<div class="row">
							<div class="img-service">
								<img src="images/noun_Compass_1460128.svg">
							</div>
							<div class="content-service">
								<h3>Vaastu Check</h3>
								<h5 style="white-space: nowrap;">Vaastu Complaint</h5>
							</div>
						</div>
					</div>
					<div class="col-md-2  col-sm-12 col-xs-12 text-center">
						<div class="row">
							<div class="img-service">
								<img src="images/noun_Location_3036947.svg">
							</div>
							<div class="content-service">
								<h3>Location</h3>
								<h5 style="white-space: nowrap;">Sector 43, Noida</h5>
							</div>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
	</section>
	<!-- service section end -->
	<!-- about us start -->
	<section class="about-us" id="AIPL">
		<div class="container">
			<div class="row">
				<div class="col-md-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
					<h2 class="section-heading">Propertywala New Project, Sector 43</h2>
					<p>Propertywala Properties with its much awaited project in Noida has arrived in its pre-launch phase, matching luxury with legacy through its magnificent 2/3/4 BHK apartments. Providing the residents with premium amenities like green landscape, clubhouse, fitness centre, swimming pool, kids play zone, meditation corner, 24x7 security, & much more. Inspired & indulged by luxurious living style, Propertywala Sector 43 apartments are designed with utmost care providing comfort, peace & happiness to the residents creating an unmatched legacy, and lifestyle.
					</p>
					<div class="button buttonOne">
						<a data-toggle="modal" data-target="#myModal" class="book-btn">Book Visit Now<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-6 f-play-video  wow fadeInRight">
					<img src="images/videoblocks-beautiful-young-woman-relaxing-on-balcony-with-city-view-holding-a-cup-of-coffee-or-tea-enjoying-a-hot-drink_spfuqbw3e_thumbnail-full01.png" class="img-responsive">
				</div>
			</div>
		</div>
	</section>
	<!-- about us end -->
	<!-- booking section start -->
	<section class="book">
		<div class="container">
			<div class="row">
				<div class="col-md-8 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
					<h3 class="text-white">Want to know even more, Request an Instant Call Back from our Expert</h3>
				</div>
				<div class="col-md-4 wow zoomIn" style="visibility: visible; animation-name: zoomIn;" class="map1">
					<div class="btn-section">
						<a data-toggle="modal" data-target="#myModal" class="book-btn">Request Now<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- booking section end -->
	<!--Premium Amenities section start -->
	<section class="service wow zoomIn" >
		<div class="container">
			<h3 class="text-center title">Premium Amenities</h3>
			<div class="row">
				<div class="col-md-offset-1 col-md-2 text-center borderRight">
					<div class="row">
						<div class="img-service">
							<img src="images/004-gym.svg">
						</div>
						<div class="content-service">
							<h5>Fitness Gym</h5>
							
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-12 col-xs-12 text-center borderRight">
					<div class="row">
						<div class="img-service">
							<img src="images/Mask Group 1.svg">
						</div>
						<div class="content-service">
							<h5>Lift Elevator</h5>
							
						</div>
					</div>
				</div>
				<div class="col-md-2 col-sm-12 col-xs-12 text-center borderRight">
					<div class="row">
						<div class="img-service">
							<img src="images/005-house.svg">
						</div>
						<div class="content-service">
							<h5>Club House</h5>
							
						</div>
					</div>
				</div>
				<div class="col-md-2  col-sm-12 col-xs-12 text-center borderRight">
					<div class="row">
						<div class="img-service">
							<img src="images/002-badminton.svg">
						</div>
						<div class="content-service">
							<h5>Badminton Court</h5>
							
						</div>
					</div>
				</div>
				<div class="col-md-2  col-sm-12 col-xs-12 text-center borderRight">
					<div class="row">
						<div class="img-service">
							<img src="images/001-restaurant.svg">
						</div>
						<div class="content-service">
							<h5>Food Court</h5>
							
						</div>
					</div>
				</div>
				<!--<div class="col-md-2  col-sm-12 col-xs-12 text-center">-->
				<!--	<div class="row">-->
				<!--	<div class="img-service">-->
				<!--		<img src="images/001-restaurant.svg">-->
				<!--	</div>-->
				<!--	<div class="content-service">-->
				<!--		<h5>Location</h5>-->
				
				<!--	</div>-->
				<!--</div>-->
				<!--</div>-->
				
				
			</div>
		
		
		
		<div class="row">
		
			<div class="col-md-offset-1 col-md-2 col-sm-12 col-xs-12 text-center borderRight">
				<div class="row">
					<div class="img-service">
						<img src="images/003-swimming.svg">
					</div>
					<div class="content-service">
						<h5>Swimming Pool</h5>
						
					</div>
				</div>
			</div>
			<div class="col-md-2 col-sm-12 col-xs-12 text-center borderRight">
				<div class="row">
					<div class="img-service">
						<img src="images/013-park.svg">
					</div>
					<div class="content-service">
						<h5>Walking Track</h5>
						
					</div>
				</div>
			</div>
			<div class="col-md-2  col-sm-12 col-xs-12 text-center borderRight">
				<div class="row">
					<div class="img-service">
						<img src="images/010-lotus-position.svg">
					</div>
					<div class="content-service">
						<h5>Meditation Area</h5>
						
					</div>
				</div>
			</div>
			<div class="col-md-2  col-sm-12 col-xs-12 text-center borderRight">
				<div class="row">
					<div class="img-service">
						<img src="images/012-table-tennis.svg">
					</div>
					<div class="content-service">
						<h5>Table Tennisk</h5>
						
					</div>
				</div>
			</div>
				<div class="col-md-2 text-center borderRight">
				<div class="row">
					<div class="img-service">
						<img src="images/008-cctv-1.svg">
					</div>
					<div class="content-service">
						<h5>24X7 Security</h5>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
	

</section>
<!-- Premium Amenities section end -->
<!-- slide section -->
<section class="side-slide" id="about">
<div class="container-fluid">


<div class="col-md-6">
	<!-- Full-width images with number and caption text -->
	<div class="mySlides row" style="margin-left: -30px;">
		<div>
			<img src="images/slide-one.png" class="img-responsive">
		</div>
		
	</div>
	<div class="mySlides row" style="margin-left: -30px;">
		<div>
			<img src="images/Highlight2.jpg" class="img-responsive">
		</div>
		
	</div>
	<div class="mySlides row" style="margin-left: -30px;">
		<div>
			<img src="images/Highlight3.jpg" class="img-responsive">
		</div>
		
	</div>
	<div class="mySlides row" style="margin-left: -30px;">
		<div>
			<img src="images/Highlight4.jpg" class="img-responsive">
		</div>
		
	</div>
	<!-- Next and previous buttons -->
	<!--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>-->
	<!--<a class="next" onclick="plusSlides(1)">&#10095;</a>-->
	
	
	<!-- The dots/circles -->
	<div class="dot-nav">
		<span class="dot" onclick="currentSlide(1)"></span>
		<span class="dot" onclick="currentSlide(2)"></span>
		<span class="dot" onclick="currentSlide(3)"></span>
		<span class="dot" onclick="currentSlide(4)"></span>
	</div>
</div>
<div class="col-md-6">
	<div class="right-arrow">
		<div class="text">
			<h2 class="text-white">Project Highlights</h2>
			<ul class="arrow-list ">
				<li>2 , 3 & 4 BHK Homes starting at a price of ₹ 1 Cr* onwards</li>
				<li>Project spreads over an area of approx. 11 Acres</li>
				<li>Clubhouse spans over an area of 40,000 Sq.Ft.</li>
				<li>Located in the absolute heart of Noida</li>
				<li>All apartments present picturesque park view</li>
				<li>Vertical gardens inspired by Famous Changi Airport</li>
				<li>Project comprises of 7 Towers with 999 total units</li>
			</ul>
			<div class="btn-section">
				<a data-toggle="modal" data-target="#myModal" class="book-btn">Know More<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
			</div>
		</div>
	</div>
</div>
</div>
</section>

<!-- slide section end -->
<!-- booking section start -->
<section class="book mt-5">
<div class="container">
<div class="row">
	<div class="col-md-8 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
		<h3 class="text-white">Want to provide a Luxury Experience for your Kids</h3>
	</div>
	<div class="col-md-4 wow zoomIn" style="visibility: visible; animation-name: zoomIn;" class="map1">
		<div class="btn-section">
			<a data-toggle="modal" data-target="#myModal" class="book-btn">Book Visit Now<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
	</div>
</div>
</div>
</section>
<!-- booking section end -->
<!-- Floor Plans section start -->
<!-- Floor Plans section end -->
<!-- Joy Square start -->
<section id="invest">
<div class="container">
<div class="row">
	<h3 class="text-center title">Noida Sector 43 Pricing Plans</h3>
	<div class=" col-md-offset-3 col-md-6">
		<div class="tab" role="tabpanel">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" ><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab" id="sectionone">2 BHK</a></li>
				<li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab" id="sectionTwo">3 BHK</a></li>
				<li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab" id="sectionThree">4 BHK</a></li>
				<!-- <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab" id="sectionfour">Leasing</a></li>
				<li role="presentation"><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab" id="sectionfive">Resale Benefits</a></li> -->
			</ul>
			<!-- Tab panes -->
			<div class="tab-content tabs">
				<div role="tabpanel" class="tab-pane fade in active" id="Section1">
					<img src="images/download (35).png" class="img-responsive">
				</div>
				<div role="tabpanel" class="tab-pane fade" id="Section2">
					<img src="images/download (35).png" class="img-responsive">
				</div>
				<div role="tabpanel" class="tab-pane fade" id="Section3">
					<img src="images/download (35).png" class="img-responsive">
				</div>
				<!-- <div role="tabpanel" class="tab-pane fade" id="Section4">
					<ul class="tab-list">
							<li>Lease assurance to be provided by AIPL</li>
							<li>AIPL has a strong team on 15+ resale experts</li>
							<li>Previous AIPL projects have received massive success on the leasing front</li>
													<li>Top retail, food & fashion have already been onboarded</li>
												
					</ul>
				</div>
				<div role="tabpanel" class="tab-pane fade" id="Section5">
					<ul class="tab-list">
							<li>Mix land projects will bring great footfall and hence will create a lot of users requirement</li>
							<li>Residential area near the project surroundings will create a huge demand for retail shops</li>
							<li>Smalls shops in the project will create more liquidity</li>
													<li>20,000+ families residing near the project</li>
												
					</ul>
				</div> -->
			</div>
		</div>
	</div>
</div>
</div>
</section>
<!-- Joy Square -->
<!-- section free book start -->
<section class="free-book">
<div class="container">
<div class="row">
	<div class="col-md-8">
		<h3>Want to schedule a site visit? Book a free blah</h3>
	</div>
	<div class="col-md-4">
		<div class="btn-section">
			<a data-toggle="modal" data-target="#myModal" class="book-btn">Book Visit Now<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
	</div>
</div>
</div>
</section>
<!-- section freebook end -->
<!-- about AIPL -->
<section class="about-aipl">
<div class="container">
<div class="row">
	<div class="col-md-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
		<h3>About Propertywala Properties</h3>
		<p>The Propertywala Group is one of India’s most renowned & trusted business conglomerate, having a diverse business portfolio including Real Estate development, FMCG, Engineering, Furniture & much more. Propertywala Properties established in 1897 built 14.29 million sqmeters across 12 cities bringing together the philosophy of innovation, sustainability and excellence to the real estate sector. In the last 3 years, Propertywala Properties has been credited with building some of the iconic projects across Delhi, Bangalore, Mumbai & Kolkatta.
		</p>
		<div class="button">
			<a data-toggle="modal" data-target="#myModal" class="book-btn">Book Visit Now<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
		</div>
	</div>
	<div class="col-md-6 f-play-video  wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
		<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
			
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-interval="false" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-interval="false" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-interval="false" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-interval="false" data-slide-to="3"></li>
			</ol>
			
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div><img src="images/AIPLCelebrationMall.jpg" class="img-responsive"></div>
					
					<div class="carousel-caption">
						Past projects: AIPL Business Club
					</div>
				</div>
				<div class="item">
					<img src="images/AIPL-Peaceful-Homes.jpg" class="img-responsive">
					<div class="carousel-caption">
						Past projects: AIPL Business Club
					</div>
				</div>
				
				<div class="item">
					<img src="images/AIPL-Masterpiece.jpg" class="img-responsive">
					<div class="carousel-caption">
						Past projects: AIPL Business Club
					</div>
				</div>
				<div class="item">
					<img src="images/AIPL-Peaceful-Homes.jpg" class="img-responsive">
					<div class="carousel-caption">
						Past projects: AIPL Business Club
					</div>
				</div>
				
			</div>
			
		</div> -->
		<div class="slider-content">
			<ul class="about-slider">
				<li>
					<div class="about-bg">
						<img src="images/download (36).png" class="img-responsive">
						<div class="slide-detail">
							Successful Projects: Propertywala South Estate
						</div>
					</div>
				</li>
				<li>
					<div class="about-bg">
						<img src="images/Godrej Palm Retreat.jpg" class="img-responsive">
						<div class="slide-detail">
							Successful Projects: Propertywala Palm Retreat
						</div>
					</div>
				</li>
				<li>
					<div class="about-bg">
						<img src="images/Godrej Nurture - 2.jpg" class="img-responsive">
						<div class="slide-detail">
							Successful Projects: Propertywala South Estate
						</div>
					</div>
				</li>
				<li>
					<div class="about-bg">
						<img src="images/Godrej Golf Links, Noida.jpeg" class="img-responsive">
						<div class="slide-detail">
							Propertywala Golf Links, Noida
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</div>
</section>
<!-- about AIPL End -->
<!-- contact start -->
<!-- contact start -->
<section class="contact" id="contact">

<div class="container">
<div class="row">
	<div class="col-md-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
		<h4>Schedule a free visit</h4>
		
		<!--<form  method="post" action="newemail.php"  class="text-left">-->
		<form name="registration_form" action="newemail.php"  method="POST" class="text-left" onsubmit="return false;">
			<input name="name" type="text" class="col-md-12 norightborder" placeholder="Enter Your Name *" required >
			<input name="contactno" type="phone" class="col-md-12" placeholder="Enter Your Mobile No. *" required >
			<input name="email" type="email" class="col-md-12" placeholder="Enter Your email *" required >
			<input type="submit" id="myButton"  name="submit" class="contact submit btn btn-primary btn-xl" value="Book Visit Now"  ><i class="fa fa-chevron-right" aria-hidden="true"></i>
		</form>
		
	</div>
	<!-- <div class="col-md-6 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
			<div id="googleMap" style="width:100%;height:400px;"></div>
	</div> -->
	
</div>
</div>
<div class="map-content">

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14039.529918759936!2d77.0930198!3d28.3926173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x99520fcf0fe2a3c5!2sAIPL%20Joy%20Square!5e0!3m2!1sen!2sin!4v1577522291208!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</div>

</section>
<!-- contact end -->
<!-- faq section -->
<!-- <section class="faq">
	<div class="container">
		<div class="row">
				<h3 class="text-left">Frequently Asked Questions</h3>
				<div class="demo">
		
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
					<h4 class="panel-title">
					<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						<img src="images/question.png">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit?
					</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
					<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<img src="images/question.png">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit?
					</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
					<h4 class="panel-title">
					<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<img src="images/question.png">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit?
					</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="panel-body">
						Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
					</div>
				</div>
			</div>
		</div>
		
	</div>
		</div>
	</div>
</section> -->
<!-- disclamer start -->




<section class="disclamer">
<div class="container">
<div class="row">
	<h4 class="text-white">Disclaimer</h4>
	<p>This is not the official website of developer, it belongs to the authorised channel partner for information & marketing purposes only. All rights for logo & images are reserved by the developer. By using or accessing this website you agree with the disclaimer without any limitation. By accessing this website, the viewer confirms that the information including brochures and marketing collaterals on this website are solely for informational purposes only, and the viewer has not relied on this information for making any booking/purchase in any project of the company.</p>
	<h3 class="text-white">Copyright © 2019 | All Rights Reserved</h3>
</div>
</div>
</section>
<!-- disclame end -->
<!-- copywirght start -->
<section class="copywirght">
<div class="container">
<div class="row">
	
	<div class="col-md-12 text-center">
		<a href="#">Digital Media planned by <strong></strong> </a>
	</div>
</div>
</div>
</section>
<!-- copyright end -->
<button id="myBtn" style="display:none;">Open Modal</button>
<!-- The Modal -->
<div id="myModal" class="modal">
<!-- Modal content -->
<div class="modal-content1">
<div class="modal-body">
	<a class="close" data-dismiss="modal" style="font-size:40px;
		
		
		color: white;
		top: -15px;
	right: -15px;">&times;</a>
	<form name="registration_form" action="newemail.php"  method="POST" class="text-left"   >
		<input name="name" type="text" class="col-md-12 norightborder" placeholder="Enter Your Name *" required>
		<input name="contactno" type="phone" class="col-md-12" placeholder="Enter Your Mobile No. *" required>
		<input name="email" type="email" class="col-md-12" placeholder="Enter Your email *" required >
		<input type="submit" id="myButton"  name="submit" class="contact submit btn btn-primary btn-xl" value="Book Visit Now"  >
	</form>
</div>
</div>
</div>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/parallax.js"></script> -->
<script src="js/contact.js"></script>
<script src="js/countto.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/wow.min.js"></script>
<!-- <script src="js/common.js"></script> -->
<script src="js/slick.min.js"></script>
<script>
function myMap() {
var mapProp= {
center:new google.maps.LatLng(20.0063,77.006),
zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgqh1JJsUrVXWOU82kFQhKmcYjesxEg7s&callback=myMap"></script>
<script>
// Get the modal
// Get the modal
var modal = document.getElementById('myModal');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementsByClassName('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
//iterate over img to add click event for each one,, jquery will make it much easier
for(var i=0;i< img.length;i++){
img[i].onclick = function(){
modal.style.display = "block";
modalImg.src = this.src;
captionText.innerHTML = this.alt;
}
}
//jquery option
/*$('.myImg').on('click', function(){
modal.style.display = "block";
modalImg.src = $(this).attr('src');
captionText.innerHTML = $(this).attr('alt');
})*/
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
</script>
<script type="text/javascript">
	var slideIndex = 1;
showSlides(slideIndex);
// Next/previous controls
function plusSlides(n) {
showSlides(slideIndex += n);
}
// Thumbnail image controls
function currentSlide(n) {
showSlides(slideIndex = n);
}
function showSlides(n) {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
if (n > slides.length) {slideIndex = 1}
if (n < 1) {slideIndex = slides.length}
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}
</script>
<script type="text/javascript">
	$('.about-slider').slick({
	infinite: false,
	slidesToShow: 1,
	slidesToScroll: 1,
	dots: true,
	arrows: false,
	});
</script>
<script>
//	$(document).on('mouseleave', leaveFromTop);
//function leaveFromTop(e){
//if( e.clientY < 0 )
//document.getElementById("myBtn").click();

//}
// Get the modal
var modal = document.getElementById("myModal");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal
btn.onclick = function() {
modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	modal.style.display = "none";
	}
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	if (event.target == modal) {
	modal.style.display = "none";
	}
	}
	</script>
</body>
</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$('#contactform').validate({
rules:{
name:{
required:true,
},
email:{
required:true,
email:true,

},
contactno:{
required:true,
number:true,
},
},
messages:{
name:{
required:"Enter Name",
},
email:{
required:"Enter Email",
email:"Enter valid emial address",

},
contactno:{
required:"Enter Contact Number",
number:"Enter Only Numeric Number",

},
},
errorElement : 'div',
submitHandler:function(form)
{
var data = $('#contactform').serialize();
$.ajax({
url:form.action,
type:form.method,
data:data,
dataType:"json",
success:function(response)
{
if(response.result){
toastr.success(response.message);
setTimeout(function(){ location.href='Index.php'; }, 1500);
}else{
toastr.error('Something went wrong');

}
},
});
}
});
});
</script>