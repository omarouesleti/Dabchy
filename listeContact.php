<?php 
require_once './contact.php';
$listeContact = Contact::getContact();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <meta charset="UTF-8">
        <title>List of contact</title>
        
    </head>
    <body>
         
<center>
<table class="table" style="background-color: #F9EEEC;">
    

  <thead class="thead-dark">

    <tr>
      <th scope="col">id</th>
      <th scope="col">fullname</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

 
  <tbody>
    <?php
    foreach ($listeContact as $contact) {
        $i=$contact['id'];
    echo'<tr>';

      echo'<th scope="row">'.$contact["id"] .'</th>';
      echo'<td>'.$contact["fullname"] .'</td>';
     echo' <td>'.$contact["email"] .'</td>';
      echo'<td>'.$contact["phone"] .'</td>';
      echo'<td>'.$contact["message"] .'</td>';
      
      echo '<td>';
      echo "<a href='sendmail/index.php/config.php' class='btn btn-dark mr-1'>Send</a>";
      echo "<a href='delete.php?id=$i' class='btn btn-outline-danger mr-1'>Delete</a>";
     
    
     
                echo '</td>';
   echo "</tr>"; 
     }
?>
  </tbody>
 
</table>
</center>



    </body>
</html>
