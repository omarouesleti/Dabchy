<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dresses Woman</title>
  <script src="js/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico">
  <script src="js/bootstrap.min.js"></script>
    <style>
    .popover
    {
        width: 100%;
        max-width: 800px;
    }
    </style>
  
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>
<body>
  <header>
  
  <nav class="navbar navbar-expand-md navbar-dark fixed-top text-white" style="background: #184947" id="col">
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
        <a class="nav-link "href="#accesoires">Accessories <i class="fas fa-laptop-medical"></i></i></a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link "href="#Team">Team <i class="fas fa-user-friends"></i></a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link "href="#Contact">Contact US <i class="fas fa-envelope"></i></a>
        
      </li>
        
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <a class="text-white nav-link" data-toggle="popover" href="">
          
          <i class="text-warning fas fa-shopping-cart ">
          </i> Shopping Cart
          
          <i  id="cart_n"></i>
        </a>

        
      </form>

    </div>
    <div id="navbar-cart" class="navbar-collapse collapse text-right">
            <ul class="nav navbar-nav">
              <li>
                <a id="cart-popover" class="btn text-right" data-placement="bottom" title="Shopping Cart">
                  <span class="glyphicon glyphicon-shopping-cart"></span>
                  <span class="badge"></span>
                  <span class="total_price">TND 0.00</span>
                </a>
              </li>
            </ul>
    </div>
  </nav>
  <div id="popover_content_wrapper" style="margin-top: 70px; background:#F1E3D5">
        <span id="cart_details"></span>
        <div align="right">
          <a href="" class="btn btn-outline-secondary" id="check_out_cart">
          <span class="glyphicon glyphicon-shopping-cart"></span> Order
          </a>
          <a href="#" class="btn btn-outline-dark" id="clear_cart">
          <span class="glyphicon glyphicon-trash"></span> Clear
          </a>
        </div>
      </div>
</header>

<div id="demo" class="carousel slide" data-ride="carousel" style="">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner z-depth-5">
    <div class="carousel-item active">
      <img src="img/1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h1 style="color: #000000;text-transform: uppercase;font-size: 45px;">Woman's wear</h1>
        <p style="color: #000000 ;text-transform: uppercase;font-size: 18px;">We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h1 style="color: #000000;text-transform: uppercase;font-size: 45px;">Woman's wear</h1>
        <p style="color: #000000 ;text-transform: uppercase;font-size: 18px;">We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/1.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h1 style="color: #000000;text-transform: uppercase;font-size: 45px;">Woman's wear</h1>
        <p style="color: #000000 ;text-transform: uppercase;font-size: 18px;">We had such a great time in LA!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="text-center my-5">

  
  
    <div class="container marketing">
  <h2>Dresses Woman</h2>
  <hr>
  
  <?php
  include('fetch_dress_women.php');
  ?>
    
  </div>







 <footer class="z-depth-5" style="background-color: #000000" >

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
  <script>
   
$(document).ready(function(){

 // load_product();

  load_cart_data();
    
  

  function load_cart_data()
  {
    $.ajax({
      url:"fetch_cart.php",
      method:"POST",
      dataType:"json",
      success:function(data)
      {
        $('#cart_details').html(data.cart_details);
        $('.total_price').text(data.total_price);
        $('.badge').text(data.total_item);
      }
    });
  }

  $('#cart-popover').popover({
    html : true,
        container: 'body',
        content:function(){
          return $('#popover_content_wrapper').html();
        }
  });

  $(document).on('click', '.add_to_cart', function(){
    var product_id = $(this).attr("id");
    var product_name = $('#name'+product_id+'').val();
    var product_price = $('#price'+product_id+'').val();
    var product_quantity = $('#quantity'+product_id).val();
    var action = "add";
    if(product_quantity > 0)
    {
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
        success:function(data)
        {
          load_cart_data();
          alert("Item has been Added into Cart");
        }
      });
    }
    else
    {
      alert("lease Enter Number of Quantity");
    }
  });

  $(document).on('click', '.delete', function(){
    var product_id = $(this).attr("id");
    var action = 'remove';
    if(confirm("Are you sure you want to remove this product?"))
    {
      $.ajax({
        url:"action.php",
        method:"POST",
        data:{product_id:product_id, action:action},
        success:function()
        {
          load_cart_data();
          $('#cart-popover').popover('hide');
          alert("Item has been removed from Cart");
        }
      })
    }
    else
    {
      return false;
    }
  });

  $(document).on('click', '#clear_cart', function(){
    var action = 'empty';
    $.ajax({
      url:"action.php",
      method:"POST",
      data:{action:action},
      success:function()
      {
        load_cart_data();
        $('#cart-popover').popover('hide');
        alert("Your Cart has been clear");
      }
    });
  });
    
});

</script>
</body>
</html>
