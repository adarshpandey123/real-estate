<?php
if( isset($_POST['submit']) )
{
    //be sure to validate and clean your variables
    $name = htmlentities($_POST['name']);
    $contactno = htmlentities($_POST['phone']);
    $email = htmlentities($_POST['email']);

    //then you can use them in a PHP function. 
        // $to = 'udayvansh@gmail.com';
        $to = 'aadi.narmadatech@gmail.com';
         $subject = "Contact";
         
         $message = '<table class="tg" style="margin: 0 auto;width: 60%;background-color: #fff;">
            <tr>
            <th class="tg-031e" style="background-color: #efefef; padding:20px;">
              <img  src="images/Image 1.png">
            </th>
           </tr>
           <tr>
            <td class="tg-yw4l" style="border: 0;padding: 13px!important;">
              <p>Hi </p>
              <p>There we have received one new registration information on this account. </p>
            </td>
           </tr>
           <tr>
            <td class="tg-yw4l" style="border: 0;padding: 13px!important;">
                <center>
                  <table>
                     <tbody>
                        <tr>
                           <th style="text-align: left;display: table;">Name:-</th>
                           <td>'.$name.'</td>
                        </tr>
                        <tr>
                           <th style="text-align: left;display: table;">Email:-</th>
                           <td>'.$email.'</td>
                        </tr>
                        <tr>
                           <th style="text-align: left;display: table;">Contact Number:-</th>
                           <td>'.$contactno.'</td>
                        </tr>
                     </tbody>
                  </table>
               </center>
            </td>
           </tr>
           <tr>
            <td class="tg-yw4l" style="border: 0;padding: 13px!important;">
              <p>Need help? You can reply to this message directly or contact us by other means.</p>
              <p>Our customer service team is available weekdays from 8 to 5 Pacific Time.</p>
            </td>
           </tr>
          
           <tr style="border-bottom: 1px solid!important;padding: 10px;">
            <td class="tg-yw4l" style="border: 0;">
              <p style="margin-left:13px;">Thanks,</p>
              <p style="margin-left:13px;">Team Godrej</p>
            </td>
           </tr>
           
         </table>';
//         $message = "<b> </b>";
       //  $message .= "<h1 style="color: white;">This is headline.</h1>";
         
         $header = "From:kamleaditya@yahoo.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
          	header("Location: thankyou.html");
            // echo "Submit successfully...";
         }else {
            echo "Message could not be sent...";
         }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Godrej-new</title>
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
   <script type="text/javascript">
         google.charts.load('current', { 'packages': ['corechart'] });
         google.charts.setOnLoadCallback(drawChart);
         
         function drawChart() {
             var data = google.visualization.arrayToDataTable([
           ['Year', 'Years'],
           ['2014', 3924],
           ['2015', 5101],
           ['2016', 5412],
           ['2017', 5731],
           ['2018', 5303],
          ['2019', 6065]
         ]);
         
             var options = {
                 title: 'Increase in price over time',
                 curveType: 'function',
                 legend: { position: 'bottom' }
             };
         
             var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
         
             chart.draw(data, options);
         }
      </script>
</head>
<body>
    <div class="whatasapp">
        <span class="paddingall10 heading text-white pull-left"> Schedule a Site Visit<a href="https://api.whatsapp.com/send?phone=+91-8800304300

&amp;text=Hi I am interested in knowing more about *AIPL*.Please Share the details. My Name is" target="_blank">
            <img src="images/Image 2.png" height="50px"></a></span>
    </div>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
	    <a href="/AIPL">
		<img src="images/logo.png" class="img-responsive logo" height="85px"></a>
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
			<a  href="#AIPL">Overview</a>
			</li>
			<li>
			<a  href="#about">Amenities</a>
			</li>
			<li>
			<a  href="#services">Floor Plan</a>
			</li>
			<li>
			<a  href="#pricing">Price | Payment Plan</a>
			</li>
			<li>
			<a  href="#invest">Why Invest?</a>
			</li>
			<li>
			<a class="call-no" href="tel:8800304300" style="color: #379CD7!important">Call +91-8800304300</a>
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
		<div class="col-md-4 wow fadeInLeft banner-text" style="z-index: 1000">
			<h2 class="text-white">Godrej New Project </h2>
			<h4 class="text-white">Sector 43, Noida</h4>
			<ul class="list-inline">
				<li>2 BHK | 3 BHK | 4 BHK Luxury Apartments </li>
				<li>Starting ₹ 1Cr. Onwards* </li>
				
			</ul>

		</div>
		<div class="col-md-2">
			
		</div>

		<div class="col-md-6 topForm">
			<h4 class="text-white">Get Early Bird Offers</h4>
				
				<!--<form  method="post" action="email.php" id="contactform" class="text-left">-->
				    <form name="registration_form" action="email.php" id="contactform" method="POST" class="text-left" onsubmit="return false;">
				<input name="name" type="text" class="col-md-12 norightborder" placeholder="Enter Your Name *" required="">
				<input name="contactno" type="phone" class="col-md-12" placeholder="Enter Your Mobile No. *" required="">
				<input name="email" type="email" class="col-md-12" placeholder="Enter Your email *" required="">
				<input type="submit" id="myButton"href="" name="submit" class="contact submit btn btn-primary btn-xl" value="Book Visit Now"  ><i class="fa fa-chevron-right" aria-hidden="true"></i>
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
				<h2 class="section-heading">Godrej New Project, Sector 43</h2>
				<p>Godrej Properties with its much awaited project in Noida has arrived in its pre-launch phase, matching luxury with legacy through its magnificent 2/3/4 BHK apartments. Enriching the residents with premium amenities like green landscape, clubhouse, fitness centre, swimming pool, kids play zone, meditation corner, 24x7 security, & much more. Located in the heart of Noida, this project provides the best opportunity for the residents to enhance their living standards with ultra modern facilities.
					</p>
					<div class="button buttonOne">
				<a href="#contact" class="book-btn">Book Visit Now</a>
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
				<h3 class="text-white">Schedule A Free Site Visit? Book Now!</h3>
			</div>
			<div class="col-md-4 wow zoomIn" style="visibility: visible; animation-name: zoomIn;" class="map1">
				<div class="btn-section">
					<a href="#contact" class="book-btn">Book Visit Now<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- booking section end -->

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
		    <img src="images/Fold2 Slider2.jpg" class="img-responsive">
		   </div> 
		  
		  </div>

		  <div class="mySlides row" style="margin-left: -30px;">
		   <div>
		    <img src="images/Fold2 Slider3.jpg" class="img-responsive">
		   </div>
		   
		  </div>

		   <div class="mySlides row" style="margin-left: -30px;">
		   <div>
		    <img src="images/Fold 2 Slider4.jpg" class="img-responsive">
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
              	 <li>Project is spread over approx. 11 acres</li>
              	 <li>Open from sides with 7 towers</li>
              	 <li>Clubhouse spans over 40,000 sq.ft.</li>
              	 <li>Located in the heart of Noida</li>
              	 <li>Second Floor - Food Court, Restaurants, Café, Retail shops</li>
              	 <li>Third to Ninth Floor – Branded Serviced Residences</li>
              </ul>
               <div class="btn-section">
					<a href="#contact" class="book-btn">Book Visit Now<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
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
				<h3 class="text-white">Want to schedule a site visit? Book a free blah</h3>
			</div>
			<div class="col-md-4 wow zoomIn" style="visibility: visible; animation-name: zoomIn;" class="map1">
				<div class="btn-section">
					<a href="#contact" class="book-btn">Book Visit Now<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
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
			<div class="col-md-2 text-center borderRight">
				<div class="row">
				<div class="img-service">
					<img src="images/008-policeman.svg">
				</div>
				<div class="content-service">
					<h3>24X7 Security</h3>
					

				</div>
			</div>
			</div>
			<div class="col-md-2 col-sm-12 col-xs-12 text-center borderRight">
				<div class="row">
				<div class="img-service">
					<img src="images/Lift.svg">
				</div>
				<div class="content-service">
					<h3>Configuration</h3>
					

				</div>
			</div>
			</div>
			<div class="col-md-2 col-sm-12 col-xs-12 text-center borderRight">
				<div class="row">
				<div class="img-service">
					<img src="images/001-restaurant.svg">
				</div>
				<div class="content-service">
					<h3>Food Court</h3>
					

				</div>
			</div>
			</div>
			<div class="col-md-2  col-sm-12 col-xs-12 text-center borderRight">
				<div class="row">
				<div class="img-service">
					<img src="images/001-restaurant.svg">
				</div>
				<div class="content-service">
					<h3>Possession</h3>
					

				</div>
			</div>
			</div>
			<div class="col-md-2  col-sm-12 col-xs-12 text-center borderRight">
				<div class="row">
				<div class="img-service">
					<img src="images/001-restaurant.svg">
				</div>
				<div class="content-service">
					<h3>Vaastu Check</h3>
					

				</div>
			</div>
			</div>
			<div class="col-md-2  col-sm-12 col-xs-12 text-center">
				<div class="row">
				<div class="img-service">
					<img src="images/001-restaurant.svg">
				</div>
				<div class="content-service">
					<h3>Location</h3>
					

				</div>
			</div>
			</div>
			
			
			</div>
		</div>
		
		</div>
	</div>
</section>

<!-- Premium Amenities section end -->
 <!-- booking section start -->
<section class="book mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
				<h3 class="text-white">Want to schedule a site visit? Book a free blah</h3>
			</div>
			<div class="col-md-4 wow zoomIn" style="visibility: visible; animation-name: zoomIn;" class="map1">
				<div class="btn-section">
					<a href="#contact" class="book-btn">Book Visit Now<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- booking section end -->



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
                        <ul class="tab-list">
                        	<li>AIPL has a legacy of delivering projects before time with top-most quality</li>
                        	<li>Safe investment project, approved by H-RERA No.- 962/2017/1247</li>
                        	<li>Possession by Dec 2021, construction is on full swing</li>
							<li>Flexible payment plans with loan facility</li>
							
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section2">
                         <ul class="tab-list">
                        	<li>4 Side Road Connectivity with entrance on 150m wide expressway</li>
                        	<li>Located in the heart of Sector 63A Golf Course Extension, Gurgaon</li>
                        	<li>Prominently Located on Greater Southern Peripheral Road</li>
							<li>Surrounded by 20000+ current & upcoming Top Residential Apartments</li>
							<li>30 minute drive from the airport | Easy connectivity to NH8 | Metro</li>
                        </ul>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="Section3">
                         <ul class="tab-list">
                        	<li>Architecture by DP Architects - the name behind Dubai Mall, Select City etc.</li>
							<li> Double height retail shops </li>
							<li>Maximum Visibility</li>
							<li>200% expected Return on Investment under Appreciation</li>
                        </ul>
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

<!--location start -->
<section class="location" id="AIPL">
	<div class="container">
		<div class="row">
			<div class="col-md-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
				<h2 class="section-heading">Location Advantage</h2>
				<p>Godrej Properties is the most anticipated developer and has been offering the best landmarks in 12 major cities of the country. Godrej South Estate New Project in Okhla has been designed with great focus on client needs. Godrej South Estate New Project in Okhla has been designed with great focus on client needs. Godrej South Estate New Project in Okhla has been designed with great focus on client needs.
					</p>
					<div class="button buttonOne">
				<a href="#contact" class="book-btn">Book Visit Now</a>
			</div>
			</div>
			<div class="col-md-6 f-play-video  wow fadeInRight">
			 	  <img src="images/The Master Plan.png" class="img-responsive">

			</div>
		</div>
	</div>
</section>
<!-- location end -->



<!-- section free book start -->
<section class="free-book">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3>Want to schedule a site visit? Book a free blah</h3>
			</div>
			<div class="col-md-4">
				<div class="btn-section">
				<a href="#contact" class="book-btn">Book Visit Now<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
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
			<h3>About Godrej Properties</h3>
			<p>With a mission to create better, AIPL is India’s premier real estate development company and is known to build quality spaces since 1991. With a multi-dimensional portfolio of retail, commercial and residential segments, AIPL has been redefining the real estate development industry for the past 25 years. Largely known for its high-end delivery and transparency in the market, AIPL has delivered commercial development of over 2 million square ft and residential development of 250 acres.
			</p>
			<div class="button">
				<a href="#contact" class="book-btn">Book Visit Now<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
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
  								Successful Projects: Godrej South Estate
  							</div>
  						</div>
  					</li>
  					<li>
  						<div class="about-bg">
  							<img src="images/download (36).png" class="img-responsive">
  							<div class="slide-detail">
  								Successful Projects: Godrej South Estate
  							</div>
  						</div>
  					</li>
  					<li>
  						<div class="about-bg">
  							<img src="images/download (36).png" class="img-responsive">
  							<div class="slide-detail">
  								Successful Projects: Godrej South Estate
  							</div>
  						</div>
  					</li>
  					<li>
  						<div class="about-bg">
  						<img src="images/download (36).png" class="img-responsive">
  						<div class="slide-detail">
  						Successful Projects: Godrej South Estate
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
				
				<!--<form  method="post" action="email.php" id="contactform" class="text-left">-->
				    <form name="registration_form" action="email.php" id="contactform" method="POST" class="text-left" onsubmit="return false;">
				<input name="name" type="text" class="col-md-12 norightborder" placeholder="Enter Your Name *" required="">
				<input name="contactno" type="phone" class="col-md-12" placeholder="Enter Your Mobile No. *" required="">
				<input name="email" type="email" class="col-md-12" placeholder="Enter Your email *" required="">
				<input type="submit" id="myButton"href="" name="submit" class="contact submit btn btn-primary btn-xl" value="Book Visit Now"  ><i class="fa fa-chevron-right" aria-hidden="true"></i>
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
			<p>This is not the official website of developer & property, it belongs to authorised channel partner for information purposes only. All rights for logo & images are reserved to the developer. By using or accessing this website you agree with the Disclaimer without any qualification or limitation. By accessing this website, the viewer confirms that the information including brochures and marketing collaterals on this website is solely for informational purposes only and the viewer has not relied on this information for making any booking/purchase in any project of the company. The company is not liable for any consequence of any action taken by the viewer relying on such material/ information on this website.</p>
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
			    <a href="http://propacity.in/">Digital Media planned by <strong>Propacity</strong> </a>
			</div>
		</div>
	</div>
</section>
<!-- copyright end -->



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
   