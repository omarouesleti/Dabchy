<?php
require_once './produit.php';
$n = $_POST['name'];
$i = $_POST['image'];
$p = $_POST['price'];
$c = $_POST['cathegories'];
$t = $_POST['type'];
$b = $_POST['balance'];


$e = new Produit($n, $i, $p ,$c ,$t ,$b);
$e->ajouter();

header('location: wellcome.php');