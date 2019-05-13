<?php
require_once './contact.php';
$n = $_POST['fullname'];
$i = $_POST['email'];
$p = $_POST['phone'];
$c = $_POST['message'];



$e = new Contact($n, $i, $p ,$c);
$e->ajouter();

header('location: index.html');