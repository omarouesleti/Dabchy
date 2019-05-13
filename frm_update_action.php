<?php
require_once './produit.php';

$id = $_GET['id'];


$objProduit = Produit::getProduitById($id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Edit Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body class="">
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
                <a class="nav-link "href="alo/index.html">ADD CATEGORY <i class="fas fa-user"></i></i></i></a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link "href="contactAdmin.php">CONTACT <i class="fas fa-envelope"></i></a>
                
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
 

      <div class="container">
  <div class="card mt-5" style="background-color:">
    <div class="card-header bg-dark" style="margin-top:12px;">
      <h2>Edit Product</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post" action="frm_update.php">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control" value="<?php echo $objProduit->getName(); ?>" required>
        </div>
        <div class="form-group">
          <label for="name">Image</label>
          <input type="text" name="image" id="name" class="form-control" value="<?php echo $objProduit->getImage(); ?>" required>
        </div>
        <div class="form-group">
          <label for="name">price</label>
          <input type="text" name="price" id="name" class="form-control" value="<?php echo $objProduit->getPrice(); ?>"required>
        </div>
        <div class="form-group">
          <label for="name">categories</label>
          <input type="text" name="categories" id="name" class="form-control" value="<?php echo $objProduit->getCathegories(); ?>"required>
        </div>
        <div class="form-group">
          <label for="name">type</label>
          <input type="text" name="type" id="name" class="form-control" value="<?php echo $objProduit->gettype(); ?>"required>
        </div>
        <div class="form-group">
          <label for="email">balance</label>
          <input type="text" name="balance" id="email" class="form-control" value="<?php echo $objProduit->getBalance(); ?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="id" value="<?php echo $id = $_GET['id'];  ?>">
          <button type="submit" class="btn btn-dark">Edit</button>
        </div>
      </form>
    </div>
  </div>
</div>
<br>
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
          <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
<!-- <?php 
require_once './produit.php';

$id = $_GET['id'];


$objProduit = Produit::getProduitById($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        <form method="post" action="frm_update.php">
            <center>
                <h1>update product</h1>
                <table border="5">
                    <tr>
                        <td>name</td><td><input type="text" name="name" value="<?php echo $objProduit->getName(); ?>"></td>
                    </tr>
                    <tr>
                        <td> image</td><td> <input type="text" name="image" value="<?php echo $objProduit->getImage(); ?>"></td>
                    </tr>
                    
                    <tr>
                        <td>price</td><td> <input type="text" name="price" value="<?php echo $objProduit->getPrice(); ?>"></td>
                    </tr>
                    <tr>
                        <td>categories</td><td> <input type="text" name="categories" value="<?php echo $objProduit->getCathegories(); ?>"></td>
                    </tr>
                    <tr>
                        <td>type</td><td> <input type="text" name="type" value="<?php echo $objProduit->getType(); ?>"></td>
                    </tr>
                    <tr>
                        <td>balance</td><td> <input type="text" name="balance" value="<?php echo $objProduit->getBalance(); ?>"></td>
                    </tr>
                    <tr>
                        <input type="hidden" name="id" value="<?php echo $id = $_GET['id'];  ?>">
                        <tr>
                            <td><center><input type="submit" value="Modifier"></center></td>
                <td><center><input type="reset" value="Annuler"></center></td>
                    </tr>
            </center>
        </form>
        


    
    </body>
</html>
 -->