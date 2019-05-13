<?php
require_once './produit.php';
$id     = $_POST['id'];
$name    = $_POST['name'];
$image = $_POST['image'];
$price     = $_POST['price'];
$cathegories    = $_POST['categories'];
$type = $_POST['type'];
$balance = $_POST['balance'];
$objProduit = new Produit($name, $image, $price ,$cathegories ,$type ,$balance);
$objProduit->modifier($id);
header('location: wellcome.php');


