<?php 
require_once './produit.php';
$listeProduit = Produit::getProduit();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
         
<center>
<table class="table " style="background-color: #F9EEEC;">
    

  <thead class="thead-dark">

    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">image</th>
      <th scope="col">price</th>
      <th scope="col">cathegories</th>
      <th scope="col">type</th>
      <th scope="col">balance</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

 
  <tbody>
    <?php
    foreach ($listeProduit as $produit) {
        $i=$produit['id'];
    echo'<tr>';

      echo'<th scope="row">'.$produit["id"] .'</th>';
      echo'<td>'.$produit["name"] .'</td>';
     echo' <td>'.$produit["image"] .'</td>';
      echo'<td>'.$produit["price"] .'</td>';
      echo'<td>'.$produit["cathegories"] .'</td>';
      echo'<td>'.$produit["type"] .'</td>';
      echo'<td>'.$produit["balance"] .'</td>';
      echo '<td>';

     echo "<a href='delete.php?id=$i' class='btn btn-dark mr-1'>Delete</a>";
     echo "<a href='frm_update_action.php?id=$i' class='btn btn-outline-danger mr-2'>Edit</a>";
    
     //<a href="logout.php ?logout" class="btn btn-outline-info float-right"> Logout</a>';
                echo '</td>';
   echo "</tr>"; 
     }
?>
  </tbody>
 
</table>
</center>


    </body>
</html>
