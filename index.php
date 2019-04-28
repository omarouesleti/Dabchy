<?php

include('database_connection.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  
    <link href="MDBootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <link href="MDBootstrap/css/mdb.min.css" rel="stylesheet">
  
    <link href="MDBootstrap/css/style.css" rel="stylesheet">

    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico">
	

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css2/util.css">
	<link rel="stylesheet" type="text/css" href="css2/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
	<title>Dabchy.com | vente de vêtements en Tunisie</title>
	<link href="https://fonts.googleapis.com/css?family=Germania+One|Sniglet" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="jquery.reflection.js"></script>
	<script src="jquery.cloud9carousel.js"></script>
	<style>
	html{
		scroll-behavior: smooth;
	}



	.gotopbtn{
	
	position: fixed;
	width: 50px;
	height: 50px;
	background:#05090F;
	bottom: 50px;
	right: 50px;

	text-decoration: none;
	text-align: center;
	line-height: 50px;
	color: white;
	font-size: 22px;}

}

	</style>
	
</head>
<body>

<header>
	
	<nav class="navbar navbar-expand-md navbar-dark fixed-top text-white" style="background: #000000
" id="col">
		<a class="text-white navbar-brand" href="#">
			<i class="fas fa-store-alt"></i> Dabchy Store
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

			<span class="navbar-toggler-icon"></span>
			
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto menu">
				<li class="nav-item active">
				<a href="" class="nav-link">Home </a>

			</li>
			<li class="nav-item">
				<a class="nav-link "href="#homme">Men <i class="fas fa-male"></i></i></a>
				
				
			</li>
			

			<li class="nav-item">
				<a class="nav-link "href="#femme">Women <i class="fas fa-female"></i></i></a>
				
			</li>

			
			<li class="nav-item">
				<a class="nav-link "href="#Team">Team <i class="fas fa-user-friends"></i></a>
				
			</li>
			<li class="nav-item">
				<a class="nav-link "href="#Contact">Contact US <i class="fas fa-envelope"></i></a>
				
			</li>
			
				
			</ul>
			<form class="form-inline mt-2 mt-md-0">
				<a class="text-white nav-link">
					
					<i class="text-warning fas fa-shopping-cart">
					</i> Shopping Cart
					<i  id="cart_n"></i>
				</a>

				<a href="loginn.php" style="cursor: pointer" class="nav-link text-white"><i class="far fa-user" > </i> Account
				</a>
			</form>
		</div>
	</nav>
</header>
  <section class="header">
		<video autoplay loop class="video-background z-depth-5" muted plays-inline>
			<source src="video/video6.mp4" type="video/mp4">
		</video>
		<div id="home-overlay">
			<div class="container">
				<div id="home-content">
				<div id="home-content-inner" class="text-left">
					<div id="home-heading">
						<h1 id="home-heading-1">MODERN</h1>
						<h1 id="home-heading-2">Creative <span>Agency</span></h1>
					</div>
					<div id="home-text">
						<p>
							The only app that lets you make money selling clothes<br> and buying new ones at less than 70%
						</p>
					</div>
					<div id="home-btn">
						<a href="" class="btn btn-outline-dark example hoverable rounded-pill" role="button" href="#About">About US</a>
					</div>	
				</div>
			</div>
			</div>
		</div>
	</section>
<div class="container marketing">

	<h2 id="#About">About</h2>
	<hr>
	<div class="">
		<p class=" " style="text-align: justify;">
			As an actor in the French economy and society, Amazon is committed to helping young people in France to gain access to employment. With this in mind, Amazon launched the Amazon Campus Challenge contest in 2017, the main goal of which is to train Master students in e-commerce through a unique and practical entrepreneurial experience. Complementary "field" to the training provided in progress, Amazon Campus Challenge solicits and strengthens their skills in many fields such as e-commerce, management, or digital marketing. The principle: in teams, students must convince a VSE or SME of their choice to assist in the development of its online sales activity in the Amazon marketplace. Once the strategy and objectives are defined, each team launches and manages its online store over a period of four months, after which the winners are appointed based on their performance, but also their strategy and commitment. Throughout this challenge, the teams benefit from the follow-up and practical advice of the organizing team of the Amazon Campus Challenge, and collaborate with the partner company in complete independence vis-à-vis Amazon.

		</p>
		
	</div>
	<div class="img-responsive ">
		<img src="img/2.png" class="example hoverable  img-fluid" alt="Responsive image" style="height: 400px;width: 1110px; border-radius: 30px;">
	</div>
	<br>


	<h2 id="homme" class="dec">Men</h2>
	<hr>
	<div>
	<div class="row"> 
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/21.jpeg" alt="First slide" style="height: 400px;width: 1110px; border-radius: 30px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/21.jpeg" alt="Second slide" style="height: 400px;width: 1110px; border-radius: 30px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/21.jpeg" alt="Third slide" style="height: 400px;width: 1110px; border-radius: 30px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
		<!-- <div>
			<img src="img/21.jpeg" class="example hoverable img-fluid" alt="Responsive image" style="height: 400px;width: 1110px; border-radius: 30px;">
		</div> -->


  	
<form>  		
  	<a href="jeans_men.php" class="btn btn-outline-dark z-depth-5 rounded-pill" role="button" aria-pressed="true" >Jeans men</a>
  	<a href="shoes_men.php" class="btn btn-outline-danger z-depth-5 rounded-pill" role="button" aria-pressed="true">Shoes men</a>
		<a href="jacket_men.php" class="btn btn-outline-primary z-depth-5 rounded-pill" role="button" aria-pressed="true">Jacket men</a>
		<a href="accessoir_men.php" class="btn btn-outline-secondary z-depth-5 rounded-pill" role="button" aria-pressed="true">Accessoire Men</a>
  </form>
 
  </div>
</div>
	<div class="row" id="hommeDiv"></div>
	<h2 id="femme" style="padding-top: 65px">Women</h2>
	<hr>
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/1.jpg" alt="First slide" style="border-radius: 30px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/1.jpg" alt="Second slide" style="border-radius: 30px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/1.jpg" alt="Third slide" style="border-radius: 30px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<!-- <div>
		<img src="img/1.jpg" class="example hoverable img-fluid alt="Responsive image" style="border-radius: 30px;">
	</div> -->
	<div>
		<a href="Dresses_Women.php" class="btn btn-dark z-depth-5 rounded-pill" role="button" aria-pressed="true" >Dress Woman</a>
  	<a href="#" class="btn btn-danger z-depth-5 rounded-pill" role="button" aria-pressed="true">Blazers Woman</a>
		<a href="#" class="btn btn-primary z-depth-5 rounded-pill" role="button" aria-pressed="true">Shoes Woman</a>
		<a href="accessories_women.php" class="btn btn-secondary z-depth-5 rounded-pill" role="button" aria-pressed="true">Accessories Woman</a>
	</div>

	<div class="row" id="femmeDiv"></div>
	<h2 id="Accs" style="padding-top: 65px">Accessories</h2>
	<hr>
	<div class="row" id="AccsDiv"></div>
	
	<h2 id="Team" style="padding-top: 65px">Team</h2>
	<hr>

		<div style="background:">

		<section class="team" id="TeamDiv">
			<div class="container" >
				<div class="row">
					<div class="col-md-3 profile text-center  ">
						<div class="img-box">
							<img src="img/img4.jpg" class="img-responsive" id="team1">
							<ul>
								<a href="https://www.facebook.com/omar.ouesleti.5"><li><i class="fab fa-facebook-f"></i></li></a>
								<a href="#"><li><i class="fab fa-github"></i></li></a>
								<a href="#"><li><i class="fab fa-linkedin"></i></li></a>
							</ul>
						</div>
						<h2>OUESLATI Omar</h2>
						<h4>Full Stack</h4>
					</div>
					<div class="col-md-3 profile text-center">
						<div class="img-box">
							<img src="img/shirt.jpg" class="img-responsive" id="team1">
							<ul>
								<a href="https://www.facebook.com/omar.ouesleti.5"><li><i class="fab fa-facebook-f"></i></li></a>
								<a href="#"><li><i class="fab fa-github"></i></li></a>
								<a href="#"><li><i class="fab fa-linkedin"></i></li></a>
							</ul>
						</div>
						<h2>TRABELSI Sofien</h2>
						<h4>Developpeur</h4>
					</div>
					<div class="col-md-3 profile text-center">
						<div class="img-box">
							<img src="img/img9.jpg" class="img-responsive" id="team1">
							<ul>
								<a href="https://www.facebook.com/omar.ouesleti.5"><li><i class="fab fa-facebook-f"></i></li></a>
								<a href="#"><li><i class="fab fa-github"></i></li></a>
								<a href="#"><li><i class="fab fa-linkedin"></i></li></a>
							</ul>
						</div>
						<h2>JEBARI Chaima</h2>
						<h4>ADMIN</h4>
					</div>
					<div class="col-md-3 profile text-center">
						<div class="img-box">
							<img src="img/client3.jpg" class="img-responsive" id="team1">
							<ul>
								<a href="https://www.facebook.com/omar.ouesleti.5"><li><i class="fab fa-facebook-f"></i></li></a>
								<a href="#"><li><i class="fab fa-github"></i></li></a>
								<a href="#"><li><i class="fab fa-linkedin"></i></li></a>
							</ul>
						</div>
						<h2>OUESLATI Ahmed</h2>
						<h4>Redacteur</h4>
					</div>
				</div>
			</div>
		</section>
	</div>

	<hr class="featurette-divider">
	<h2 id="homme" style="padding-top: 65px">WHAT OUR CUSTOMERS SAY</h2>
	<hr>
	<div id="imgb">
		<section id="testimonials" >
			<div id="testimonials-cover" >
				<div class="container" >
					<div class="row z-depth-5"  style="border-radius: 20px;">
						<div class="col-md-12">
							<div id="customers-testimonial" class="text-center owl-carousel owl-theme">
								<div class="testimonial">

									<img src="img/omar.jpg" class="img-responsive img-cicle" alt="">
									<blockquote class="text-center w-responsive mx-auto mb-5">
										
											Fashion is part of the daily air and it changes all the time, with all the events. Being a Dabchy client will facilitate your business and satisfy your needs.
										
										
									</blockquote>
									<div class="testimonial-author">
										<p>
											<strong>Khaled Jerbi
											</strong>
											<span>CEP & Founder-Tayara</span>
										</p>
									</div>
								</div>
								<div class="testimonial">
									<img src="img/client2.jpg" class="img-responsive img-cicle" alt="">
									<blockquote class="text-center w-responsive mx-auto mb-5">
										
											Fashion is part of the daily air and it changes all the time, with all the events. Being a Dabchy client will facilitate your business and satisfy your needs.
										
										
									</blockquote>
									<div class="testimonial-author">
										<p>
											<strong>Slimani Hayet
											</strong>
											<span>CEP & Founder-Jumia</span>
										</p>
									</div>
								</div>
								<div class="testimonial">
									<img src="img/client3.jpg" class="img-responsive img-cicle" alt="">
									<blockquote class="text-center w-responsive mx-auto mb-5">
										
											Fashion is part of the daily air and it changes all the time, with all the events. Being a Dabchy client will facilitate your business and satisfy your needs.
										
										
									</blockquote>
									<div class="testimonial-author">
										<p>
											<strong>Besrour Amine
											</strong>
											<span>CEP & Founder-Zara</span>
										</p>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
	<hr class="featurette-divider">
	<h2  style="padding-top: 65px">CONTACT US</h2>
	<hr>
	<div class="container-contact100" id="Contact">
		<div class="contact100-map " id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Contact Us
				</span>

				<span class="contact100-form-title-2">
					Feel free to drop us a line below!
				</span>
			</div>

			<form class="contact100-form validate-form">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name:</span>
					<input class="input100" type="text" name="name" placeholder="Enter full name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email:</span>
					<input class="input100" type="text" name="email" placeholder="Enter email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Phone:</span>
					<input class="input100" type="text" name="phone" placeholder="Enter phone number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message:</span>
					<textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

	
	
</div>

<br>
  <!-- Footer -->
  <a class="gotopbtn" href="#" ><i class="fas fa-chevron-up"></i></i></i></i></a>
  <footer style="background-color: #000000" >

    <!-- Footer Links -->
    <div class="container text-center text-md-left" >

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate esse
            quasi, veritatis totam voluptas nostrum.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

          <ul class="list-unstyled">
            <li>
              <p>
                <a href="#!">PROJECTS</a>
              </p>
            </li>
            <li>
              <p>
                <a href="#!">ABOUT US</a>
              </p>
            </li>
            <li>
              <p>
                <a href="#!">BLOG</a>
              </p>
            </li>
            <li>
              <p>
                <a href="#!">AWARDS</a>
              </p>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

          <!-- Contact details -->
          <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

          <ul class="list-unstyled">
            <li>
              <p>
                <i class="fas fa-home mr-3"></i> TUNIS, TN 10012, TN</p>
            </li>
            <li>
              <p>
                <i class="fas fa-envelope mr-3"></i> info@dabchy.tn</p>
            </li>
            <li>
              <p>
                <i class="fas fa-phone mr-3"></i> +216 53 306 396</p>
            </li>
            <li>
              <p>
                <i class="fas fa-print mr-3"></i> +216 56 809 321</p>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

          <!-- Social buttons -->
          <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

          <!-- Facebook -->
          <a>
            <i class="fab fa-facebook"></i>
          </a>
          <!-- Twitter -->
          <a >
            <i class="fab fa-twitter"></i>
          </a>
          <!-- Google +-->
          <a >
            <i class="fab fa-google-plus-g"></i>
          </a>
          <!-- Dribbble -->
          <a >
            <i class="fab fa-github"></i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->


    <!-- Copyright -->
    <div class="footer-copyright text-center py-3" style="background-color: #05090F">© 2019 Copyright:
      <a href=""> Dabchy.tn</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
	<script src="js/main.js"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
  
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/cart.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
$(function(){
		$("#customers-testimonial").owlCarousel({
			items:1,
			autoplay:true,
			smartSpeed:20,
			look:true,
			autoPlayHoverPause:true
		});
	});
</script>
</body>
</html>