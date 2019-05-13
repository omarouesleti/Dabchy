
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
    <title>Admin</title>
</head>
<body>
<header>
    
    <nav class="navbar navbar-expand-md navbar-dark fixed-top text-white" style="background: #184947
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
                <a href="" class="nav-link"> </a>

            </li>
            <li class="nav-item">
                <a class="nav-link "href="frm_ajout_action.php">ADD PRODUCT <i class="fab fa-product-hunt"></i></i></i></a>
                
                
            </li>
            

            <li class="nav-item">
                <a class="nav-link "href="categorie.php">ADD CATEGORY <i class="fas fa-user"></i></i></i></a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link "href="contactAdmin.php">CONTACT <i class="fas fa-envelope"></i></a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link "href="sendmail/index.php">SEND MAIL <i class="fas fa-envelope"></i></a>
                
            </li>

            
                
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                
                <?php
    session_start();


    if(isset($_SESSION['User']))
    {
        echo 'Welcome ' .$_SESSION['User'].'';

        echo ' <a href="logout.php ?logout" class="btn btn-secondary float-right mr-5"> Logout</a>';
    }
    else
    {
        header("location:loginn.php");
    }

?> 

      
            </form>

        </div>
        </nav>
        <br>
        
        <div style="width:100%;height:300px;" class="view overlay rounded z-depth-1-half mb-4">
  <img src="img/2.png"  style="float:left;width:33%;height:100%; margin-top:30px;" class=" img-fluid view overlay rounded z-depth-5">
  <img src="img/4.png" style="float:left;width:33%;height:100%; margin-top:30px;" class=" img-fluid view overlay rounded z-depth-5">>
  <img src="img/13.jpg" style="float:left;width:34%;height:100%; margin-top:30px;" class=" img-fluid view overlay rounded z-depth-5">>
</div>
        
        
        
             <?php
            include('listeProduit.php');

            ?> 

            <br>
   
        
    

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
  

</body>
</html>
