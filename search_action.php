<div class="row">
	        	
<?php
	       			
$connect = new PDO("mysql:host=localhost;dbname=test", "root", "");

$stmt = $connect->prepare("SELECT COUNT(*) AS numrows FROM tbl_product WHERE name LIKE :keyword");
$stmt->execute(['keyword' => '%'.$_POST['keyword'].'%']);
$row = $stmt->fetch();
/* if($row['numrows'] < 1){
echo '<h1 class="page-header">No results found for <i>'.$_POST['keyword'].'</i></h1>';
}
else{
echo '<h1 class="page-header">Search results for <i>'.$_POST['keyword'].'</i></h1>'; */
try{
	
$result = $connect->prepare("SELECT * FROM tbl_product WHERE name LIKE :keyword");
$result->execute(['keyword' => '%'.$_POST['keyword'].'%']);
					 
$output = '';					    
foreach($result as $k)
  {
    $output .= '
    
<div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
      <!-- Card -->
      <div class="card card-cascade narrower card-ecommerce example hoverable">
        <!-- Card image -->
        <div class="view view-cascade overlay ">
          <img src="img/'.$k["image"].'"" class="card-img-top img-fluid"
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
              <a href="">'.$k["balance"].'</a>
              

            </strong>
          </h4>
          
          
          <!-- Card footer -->
          <div class="card-footer px-1">
            <span class="float-left font-weight-bold">
              <strong>TND '.$k["price"] .'</strong>

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

                            
catch(PDOException $e){
echo "There is some problem in connection: " . $e->getMessage();
}


?> 
</div>
	        	
	        	
	        
	      
	     
	    
	  
  
  	


<