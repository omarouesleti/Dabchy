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
  <?php

include('header.php');

?>

<div id="demo" class="carousel slide" data-ride="carousel" style="">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner z-depth-5">
    <div class="carousel-item active">
      <img src="img/3.jpg" alt="Los Angeles" width="1100" height="500">
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




<?php
include('footer.php');
?>


 
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
