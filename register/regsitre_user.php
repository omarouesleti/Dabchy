
<?php
//Connexion à la BDD

  try
  {

   $bdd = new PDO ('mysql:host=localhost;dbname=test', 'root', '');

  }

  catch(Exception $e)
  {
   die('Erreur :'.$e->getMessage());
  }

    if(ISSET($_POST['submit']))
{


  


    $fullname=$_POST["fullname"];
    $email=$_POST["youremail"];
    $pass=$_POST["password"];


  $req = "INSERT INTO user(fullname,email,password)
                        VALUES ($fullname,$email,$pass)";
  $res=mysqli_query($req)  ;                    

                        session_start();
                        $_SESSION['pseudo'] = $_POST['pseudo'];
                        header('Location: index.php');


  }


                        

?>