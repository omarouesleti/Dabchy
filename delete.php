<?php
require_once './produit.php';
$id = $_GET['id'];

 
$objProduit = Produit::getProduitById($id);


$objProduit->supprimer($id);


header('location: wellcome.php');



