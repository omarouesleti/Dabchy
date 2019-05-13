<?php
class Produit {
	
	private $id;
	private $name;
	private $image;
	private $price;
    private $cathegories;
    private $type;
    private $balance;
	
	public function __construct($name ,$image ,$price ,$cathegories ,$type , $balance){
		
		$this->name= $name;
		$this->image= $image;
		$this->price= $price;
        $this->cathegories= $cathegories;
        $this->type= $type;
        $this->balance= $balance;
        
		
	}
	public function ajouter() {
        $con = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $req = "insert into tbl_product(name, image ,price ,cathegories ,type ,balance, quantity) values('$this->name', '$this->image', '$this->price', '$this->cathegories', '$this->type', '$this->balance', '$this->quantity')";
        $con->query($req);
    }
	public static function getProduit() {
        $con = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $req = "select * from tbl_product";
        $stmt = $con->query($req);
        $listeProduit = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $listeProduit;
    }
	public static function getProduitById($id) {
        $con = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $req = "select * from tbl_product where id=$id";
        $stmt = $con->query($req);
        $tabProduit = $stmt->fetch(PDO::FETCH_ASSOC);

        
        $objProduit = new Produit($tabProduit['name'], $tabProduit['image'], $tabProduit['price'], $tabProduit['cathegories'], $tabProduit['type'], $tabProduit['balance']);
        return $objProduit;
    }
	public function supprimer($id) {
        $con = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $req = "delete from tbl_product where id=$id";
        $con->query($req);
    }
	public function modifier($id) {
        $con = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $req = "update tbl_product set name='$this->name', image='$this->image', price='$this->price', cathegories='$this->cathegories', type='$this->type', balance='$this->balance' where id=$id";
        $con->query($req);
    }
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCathegories() {
        return $this->cathegories;
    }

    public function getType() {
        return $this->type;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function setCathegories($cathegories) {
        $this->cathegories = $cathegories;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setBalance($balance) {
        $this->balance = $balance;
    }


	
	
}