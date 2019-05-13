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
	font-size: 22px;
	

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
		
			<style>
.dropbtn {
  background-color: #000000;
  color:#fff;
  padding: 8px;
  font-size: 16px;
  /*border: none;*/
  cursor: pointer;
	
}

.dropdown {
  /*position: relative;*/
  display: inline-block;
}

.dropdown-content {
/* 	background-image:url(img/image4.jpg);
	background-attachment:fixed;
	background-position:100% 100%; */
  display: none;
  position: absolute;
  background-color: #000000;
	opacity: 0.8;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  /*z-index: 1;*/
}

.dropdown-content a {
  color: #fff;
  padding: 12px 16px;
  text-decoration: #547789;
  display: block;
}

.dropdown-content a:hover {background-color: #000000}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #547789;
}

</style>
<div class="dropdown">
   <button class="dropbtn">Men <i class="fas fa-male"></i></button>
  <div class="dropdown-content">
  <a href="jeans_men.php">jeans men  <img src="https://img.icons8.com/color/26/000000/trousers.png"></a>
  <a href="shoes_men.php">shoes men <img src="https://img.icons8.com/color/26/000000/trainers.png"></a>
	<a href="jacket_men.php">jacket men  <img src="https://img.icons8.com/color/26/000000/jacket.png"></a>
	<a href="accessoir_men.php">accessories men </a>
	<?php
             
						 
						 $connect = new PDO("mysql:host=localhost;dbname=test", "root", "");
						 try{
							 $stmt = $connect->prepare("SELECT * FROM categorie");
							 $stmt->execute();
							 foreach($stmt as $row){
								 echo "
									 <li><a href='#".$row['name']."'>".$row['name']."</a></li>
								 ";                  
							 }
						 }
						 catch(PDOException $e){
							 echo "There is some problem in connection: " . $e->getMessage();
						 }

						 

					 ?>
	
	</div>
</div>
	<div class="dropdown">
		<button class="dropbtn">Woman <i class="fas fa-male"></i></button>
		<div class="dropdown-content">
		<a href="Dresses_Women.php">Dress Woman <img src="https://img.icons8.com/color/26/000000/trousers.png"></a>
		<a href="accessories_women.php">accessories Woman </a>
		<?php
             
						 
						 $connect = new PDO("mysql:host=localhost;dbname=test", "root", "");
						 try{
							 $stmt = $connect->prepare("SELECT * FROM categorie");
							 $stmt->execute();
							 foreach($stmt as $row){
								 echo "
									 <li><a href='#".$row['name']."'>".$row['name']."</a></li>
								 ";                  
							 }
						 }
						 catch(PDOException $e){
							 echo "There is some problem in connection: " . $e->getMessage();
						 }

						 

					 ?>
		
		</div>
</div>
			</ul>
			<form method="POST" class="navbar-form navbar-left" action="search.php">
          <div class="input-group">
              <input type="text" class="form-control" id="navbar-search-input" name="keyword" placeholder="Search for Product" required>
              <span class="input-group-btn" id="searchBtn" style="display:none;">
                  <button type="submit" class="btn btn-default btn-flat"></button>
              </span>
          </div>
        </form>
			<form class="form-inline mt-2 mt-md-0">
				

				<a href="loginn.php" style="cursor: pointer" class="nav-link text-white"><i class="far fa-user" > </i> Admin
				</a>
				<a href="loginclient.php" style="cursor: pointer" class="nav-link text-white"><i class="far fa-user" > </i> User
				</a>
			</form>
		</div>
	</nav>
</header>
  <section class="header">
		<video autoplay loop class="video-background z-depth-5" muted plays-inline>
			<source src="video/video3.mp4" type="video/mp4">
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
				Dabchy est née d’une histoire d’amitié entre Ameni « une fashionista avec un parcours d’ingénierie Biomédical », Ghazi « ingénieur en sécurité informatique » et Oussama « développeur web », 3 jeunes tunisiens, qui se sont rencontrés en France lorsqu’ils étaient étudiants. Ils avaient en commun l’envie d’entreprendre même si au départ leur avenir était tout tracé dans différentes boites françaises.

				Ils ont toujours gardé dans un coin de leurs têtes le rêve de construire quelque chose en Tunisie, et d’être utile pour leur pays et c’est comme ça qu’ils ont franchi le cap!
				
				Un jour, autour d’un café, ils ont décidé de se lancer dans cette folle aventure, tout plaquer et rentrer en Tunisie ! Le jour même ils ont décidé du nom « Dabchy », créer une communauté friendly, sympathique qu’ils ont nommée « les Dabchouchas » ! La nouvelle plateforme a vu le jour en quelques jours. Petit a petit le site a commencé à prendre forme, évoluant tout en interaction avec les dabchouchas pour prendre en considération leurs demandes et intégrer les fonctionnalités qu’elles souhaitent voir.
				
				Dabchy.com est le fruit des dabchouchas, l’équipe de Dabchy essaye au quotidien de répondre au mieux à leurs besoins et à rendre leurs expériences d’achat et de vente la meilleure possible!

		</p>
		
	</div>
	<section id="v-1">
			<section class="magazine-section my-5">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="single-news mb-4">
							<div class="view overlay rounded z-depth-1-half mb-4">
								<img class="img-fluid" src="img/2.png" alt="Sample image">
								<a>
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>
							<div class="news-data d-flex justify-content-between">
								<a href="" class="light-blue-text">
									<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
								</a>
								<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
							</div>
						</div>
						<div class="single-news mb-4">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="single-news mb-4">	
							<div class="view overlay rounded z-depth-1-half mb-4">
								<img class="img-fluid" src="img/3.PNG" alt="Sample image">
								<a>
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>
								<div class="news-data d-flex justify-content-between">
										<a href="" class="light-blue-text">
											<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
										</a>
										<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
									</div>
							
					</div>
				</div>
				<div class="row">
						<div class="col-lg-6 col-md-12">
							<div class="single-news mb-4">
								<div class="view overlay rounded z-depth-1-half mb-4">
									<img class="img-fluid" src="img/5.png" alt="Sample image">
									<a>
										<div class="mask rgba-white-slight"></div>
									</a>
								</div>
								<div class="news-data d-flex justify-content-between">
									<a href="" class="light-blue-text">
										<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
									</a>
									<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
								</div>
							</div>
							<div class="single-news mb-4">
							</div>
						</div>
						<div class="col-lg-6 col-md-12">
							<div class="single-news mb-4">	
								<div class="view overlay rounded z-depth-1-half mb-4">
									<img class="img-fluid example-hoverable" src="img/4.PNG" alt="Sample image">
									<a>
										<div class="mask rgba-white-slight"></div>
									</a>
								</div>
									<div class="news-data d-flex justify-content-between">
											<a href="" class="light-blue-text">
												<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
											</a>
											<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
										</div>
								
						</div>
					</div>
			</section>
		
	<br>


	<h2 id="homme" class="dec">Men</h2>
	<hr>
	<section id="v-1">
		<section class="magazine-section my-5">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="single-news mb-4">
						<div class="view overlay rounded z-depth-1-half mb-4">
							<img class="img-fluid" src="img/6.png" alt="Sample image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
						<div class="news-data d-flex justify-content-between">
							<a href="" class="light-blue-text">
								<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
							</a>
							<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
						</div>
					</div>
					<div class="single-news mb-4">
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="single-news mb-4">	
						<div class="view overlay rounded z-depth-1-half mb-4">
							<img class="img-fluid" src="img/7.PNG" alt="Sample image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
							<div class="news-data d-flex justify-content-between">
									<a href="" class="light-blue-text">
										<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
									</a>
									<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
								</div>
						
				</div>
			</div>
			<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="single-news mb-4">
							<div class="view overlay rounded z-depth-1-half mb-4">
								<img class="img-fluid" src="img/21.jpeg" alt="Sample image">
								<a>
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>
							<div class="news-data d-flex justify-content-between">
								<a href="" class="light-blue-text">
									<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
								</a>
								<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
							</div>
						</div>
						<div class="single-news mb-4">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="single-news mb-4">	
							<div class="view overlay rounded z-depth-1-half mb-4">
								<img class="img-fluid example-hoverable" src="img/4.PNG" alt="Sample image">
								<a>
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>
								<div class="news-data d-flex justify-content-between">
										<a href="" class="light-blue-text">
											<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
										</a>
										<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
									</div>
							
					</div>
				</div>
		</section>


  	

	<div class="row" id="hommeDiv"></div>
	<h2 id="femme" style="padding-top: 65px">Women</h2>
	<hr>
	<section id="v-1">
		<section class="magazine-section my-5">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="single-news mb-4">
						<div class="view overlay rounded z-depth-1-half mb-4">
							<img class="img-fluid" src="img/8.png" alt="Sample image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
						<div class="news-data d-flex justify-content-between">
							<a href="" class="light-blue-text">
								<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
							</a>
							<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
						</div>
					</div>
					<div class="single-news mb-4">
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="single-news mb-4">	
						<div class="view overlay rounded z-depth-1-half mb-4">
							<img class="img-fluid" src="img/9.PNG" alt="Sample image">
							<a>
								<div class="mask rgba-white-slight"></div>
							</a>
						</div>
							<div class="news-data d-flex justify-content-between">
									<a href="" class="light-blue-text">
										<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
									</a>
									<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
								</div>
						
				</div>
			</div>
			<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="single-news mb-4">
							<div class="view overlay rounded z-depth-1-half mb-4">
								<img class="img-fluid" src="img/10.jpg" alt="Sample image">
								<a>
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>
							<div class="news-data d-flex justify-content-between">
								<a href="" class="light-blue-text">
									<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
								</a>
								<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
							</div>
						</div>
						<div class="single-news mb-4">
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="single-news mb-4"></div>	
							<div class="view overlay rounded z-depth-1-half mb-4">
								<img class="img-fluid example-hoverable" src="img/11.jpg" style="height: 400px;" alt="Sample image">
								<a>
									<div class="mask rgba-white-slight"></div>
								</a>
							</div>
								<div class="news-data d-flex justify-content-between">
										<a href="" class="light-blue-text">
											<h6 class="font-weight-bold"><i class="fas fa-plane pr-2"></i>Dabchy</h6>
										</a>
										<p class="font-weight-bold dark-grey-text"><i class="fas fa-clock-o pr-2"></i>10/06/2019</p>
									</div>
							
					</div>
				</div>
		</section>


	
	
	<h2 id="Team" style="padding-top: 65px">Team</h2>
	<hr>

		<div style="background:">


<section class="my-5">

		<!-- Section heading -->
		<h2 class="h1-responsive font-weight-bold text-center my-5">Our amazing team</h2>
		<!-- Section description -->
		<p class="grey-text text-center w-responsive mx-auto mb-5">
		<div class="row">
	
			<!-- Grid column -->
			<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
	
				<!-- Rotating card -->
				<div class="card-wrapper">
					<div id="card-1" class="card card-rotating text-center">
						<!-- Front Side -->
						<div class="face front">
							<!-- Image -->
							<div class="card-up">
								<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/19.jpg" alt="Team member card image">
							</div>
							<!-- Avatar -->
							<div class="avatar mx-auto white">
								<img src="img/omar.jpg" class="rounded-circle img-fluid"
									alt="First sample avatar image" style="width: 70%;height: 70%;">
							</div>
							<!-- Content -->
							<div class="card-body">
								<h4 class="font-weight-bold mt-1 mb-3">Omar Oueslati</h4>
								<p class="font-weight-bold dark-grey-text">Web Developer</p>
								<!-- Triggering button -->
								
							</div>
						</div>
						<!-- Front Side -->
						<!-- Back Side -->
						<div class="face back">
							<!-- Content -->
							<div class="card-body">
								<!-- Content -->
								
								<ul class="list-inline list-unstyled">
									<li class="list-inline-item">
										<a class="p-2 fa-lg fb-ic">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="p-2 fa-lg pin-ic">
											<i class="fab fa-github"> </i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="p-2 fa-lg ins-ic">
											<i class="fab fa-instagram"> </i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="p-2 fa-lg tw-ic">
											<i class="fab fa-twitter"> </i>
										</a>
									</li>
								</ul>
								<!-- Triggering button -->
								
							</div>
						</div>
						<!-- Back Side -->
					</div>
				</div>
				<!-- Rotating card -->
	
			</div>
			<!-- Grid column -->
	
			<!-- Grid column -->
			<div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
				<!-- Rotating card -->
				<div class="card-wrapper">
					<div id="card-2" class="card card-rotating text-center">
						<!-- Front Side -->
						<div class="face front">
							<!-- Image -->
							<div class="card-up">
								<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/82.jpg" alt="Team member card image">
							</div>
							<!-- Avatar -->
							<div class="avatar mx-auto white">
								<img src="img/sof.jpg" class="rounded-circle" style="width: 55%;height: 55%;" alt="Second sample avatar image">
							</div>
							<!-- Content -->
							<div class="card-body">
								<h4 class="font-weight-bold mt-1 mb-3">Sofien Trabelsi</h4>
								<p class="font-weight-bold dark-grey-text">Web Developer</p>
								<!-- Triggering button -->
								
							</div>
						</div>
						<!-- Front Side -->
						<!-- Back Side -->
						<div class="face back">
							<!-- Content -->
							<div class="card-body">
								<!-- Content -->
								
								<ul class="list-inline list-unstyled">
									<li class="list-inline-item">
										<a class="p-2 fa-lg fb-ic">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="p-2 fa-lg pin-ic">
											<i class="fab fa-github"> </i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="p-2 fa-lg ins-ic">
											<i class="fab fa-instagram"> </i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="p-2 fa-lg tw-ic">
											<i class="fab fa-twitter"> </i>
										</a>
									</li>
								</ul>
								<!-- Triggering button -->
							
							</div>
						</div>
						<!-- Back Side -->
					</div>
				</div>
				<!-- Rotating card -->
			</div>
			<!-- Grid column -->
	
			<!-- Grid column -->
			<div class="col-lg-4 col-md-12">
				<!-- Rotating card -->
				<div class="card-wrapper">
					<div id="card-3" class="card card-rotating text-center">
						<!-- Front Side -->
						<div class="face front">
							<!-- Image -->
							<div class="card-up">
								<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(14).jpg"
									alt="Team member card image">
							</div>
							<!-- Avatar -->
							<div class="avatar mx-auto white">
								<img src="https://mdbootstrap.com/img/Photos/Avatars/img(8).jpg" style="width: 55%;height: 55%;" class="rounded-circle img-fluid"
									alt="Third sample avatar image">
							</div>
							<!-- Content -->
							<div class="card-body">
								<h4 class="font-weight-bold mt-1 mb-3">Malek Mliki</h4>
								<p class="font-weight-bold dark-grey-text">Front-end Developer</p>
								<!-- Triggering button -->
								
							</div>
						</div>
						<!-- Front Side -->
						<!-- Back Side -->
						<div class="face back">
							<!-- Content -->
							<div class="card-body">
								<!-- Content -->
								
								
								<!-- Social Icons -->
								<ul class="list-inline list-unstyled">
									<li class="list-inline-item">
										<a class="p-2 fa-lg fb-ic">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="p-2 fa-lg pin-ic">
											<i class="fab fa-github"> </i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="p-2 fa-lg ins-ic">
											<i class="fab fa-instagram"> </i>
										</a>
									</li>
									<li class="list-inline-item">
										<a class="p-2 fa-lg tw-ic">
											<i class="fab fa-twitter"> </i>
										</a>
									</li>
								</ul>
								<!-- Triggering button -->
								
							</div>
						</div>
						<!-- Back Side -->
					</div>
				</div>
				<!-- Rotating card -->
			</div>
			<!-- Grid column -->
	
		</div>
		<!-- Grid row -->
	
	</section>
	<!-- Section: Team v.4 -->
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
											<strong>Oueslati Omar
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
											<strong>Chaima jebari
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
											<strong>Ghassen Madyouni
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

	



	<div id="dropDownSelect1"></div>

	
	
</div> 


<div class="container" >
		<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="well well-sm">
						<form class="form-horizontal" action="contact_action.php" method="post">
						<fieldset>
							
			
							<!-- Name input-->
							<div class="form-group">
								<label class="col-md-3 control-label" for="name">Name *</label>
								<div class="col-md-9">
									<input id="name" name="fullname" type="text" placeholder="Your name" class="form-control" required>
								</div>
							</div>
			
							<!-- Email input-->
							<div class="form-group">
								<label class="col-md-3 control-label" for="email" required>Your E-mail *</label>
								<div class="col-md-9">
									<input id="email" name="email" type="text" placeholder="Your email" class="form-control" required>
								</div>
							</div>
							<div class="form-group">
									<label class="col-md-3 control-label" for="email">phone *</label>
									<div class="col-md-9">
										<input id="email" name="phone" type="text" placeholder="Your email" class="form-control" required>
									</div>
								</div>
			
							<!-- Message body -->
							<div class="form-group">
								<label class="col-md-3 control-label" for="message">Your message *</label>
								<div class="col-md-9">
									<textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5" required></textarea>
								</div>
							</div>
			
							<!-- Form actions -->
							<div class="form-group">
								<div class="col-md-12 text-right">
									<button  type="submit" class="btn btn-outline-dark" >Send</button>
								</div>
							</div>
						</fieldset>
						</form>
					</div>
				</div>
		</div>
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
