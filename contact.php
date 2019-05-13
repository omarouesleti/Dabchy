<?php

Class Contact{
    
    private $fullname;
    private $email;
    private $phone;
    private $message;


    function __construct($fullname, $email, $phone, $message) {
        
        $this->fullname = $fullname;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }
    public function ajouter() {
        $con = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $req = "insert into contact(fullname, email ,phone ,message) values('$this->fullname', '$this->email', '$this->phone', '$this->message')";
        $con->query($req);
    }
    public static function getContact() {
        $con = new PDO('mysql:host=localhost;dbname=test', 'root', '');
        $req = "select * from contact ORDER BY id DESC";
        $stmt = $con->query($req);
        $listeContact = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $listeContact;
    }
    public function getFullname() {
        return $this->fullname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setFullname($fullname) {
        $this->fullname = $fullname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setMessage($message) {
        $this->message = $message;
    }






}