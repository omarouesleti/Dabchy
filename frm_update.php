<?php
require_once './produit.php';
$id     = $_POST['id'];
$name    = $_POST['name'];
$image = $_POST['image'];
$price     = $_POST['price'];
$cathegories    = $_POST['cathegories'];
$type = $_POST['type'];
$balace = $_POST['balance'];
$objProduit = new Produit($name, $image, $price ,$cathegories ,$type ,$balance);
$objProduit->modifier($id);
header('location: listeProduit.php');


