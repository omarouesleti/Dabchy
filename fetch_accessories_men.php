<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  
    <link href="MDBootstrap/css/bootstrap.min.css" rel="stylesheet">
  
    <link href="MDBootstrap/css/mdb.min.css" rel="stylesheet">
  
    <link href="MDBootstrap/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
   <section class="text-center my-5">

  
  <h2 class="h1-responsive font-weight-bold text-center my-5 ">Our bestsellers</h2>
  
  <p class="grey-text text-center w-responsive mx-auto mb-5 ">Lorem ipsum dolor sit amet, consectetur
    adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas
    nostrum quisquam eum porro a pariatur veniam.</p>
    <hr>
</body>
</html>


<div class="row">  
<?php

//fetch_item.php

include('database_connection.php');


$query = "SELECT * FROM tbl_product where cathegories='men' and type='accessories'  ORDER BY id DESC";

$statement = $connect->prepare($query);

if($statement->execute())
{
  $result = $statement->fetchAll();
  $output = '';
  
  foreach($result as $k)
  {
    $output .= '
     

   
<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
      <!-- Card -->
      <div class="card card-cascade narrower card-ecommerce example hoverable">
        <!-- Card image -->
        <div class="view view-cascade overlay ">
          <img src="img/'.$k["image"].'"" class="card-img-top"
            >
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
      
        <div class="card-body card-body-cascade text-center">
          <!-- Category & Title -->
          <a href="" class="grey-text">
            <h5 id="name'.$k["id"].'">'.$k["name"].'</h5>
            
            <input type="hidden" name="hidden_name" id="name'.$k["id"].'" value="'.$k["name"].'" />
          </a>
          <h4 class="card-title">
            <strong>
              <a href="">'.$k["type"].'</a>
              <a href="">'.$k["cathegories"].'</a>
              
              

            </strong>
          </h4>
          
          
          <!-- Card footer -->
          <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>TND '.$k["price"] .'</strong>
              <a href="">'.$k["balance"].'</a>
              

              <input type="hidden" name="hidden_price" id="price'.$k["id"].'" value="'.$k["price"].'" />
            </span>
            <div>
            <input type="text"  name="quantity" id="quantity' . $k["id"] .'" class="form-control rounded-pill example hoverable" value="1" /> 
            <button type="button" name="add_to_cart" id="'.$k["id"].'" class="btn btn-outline-dark  add_to_cart rounded-pill example hoverable">Add to Cart <i class="fas fa-shopping-cart"></i></button>
            </div>
                    
          </div>
          
        </div>
        
      </div>
      <br>
      <hr>
    </div>
    
    ';
  }
  

  echo $output;
}
?>

</div>









 


