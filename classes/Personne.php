<?php

class Personne {
    
    private $id;
    private $matricule;
    private $nom;
    private $prenom;
    private $dateNaissance;
    private $adress;
    private $email;
    private $tel;
    private $image;
    
    function __construct($matricule, $nom, $prenom, $dateNaissance, $adress, $email, $tel,$image) {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->adress = $adress;
        $this->email = $email;
        $this->tel = $tel;
        $this->image = $image;
    }
    
    function getId() {
        return $this->id;
    }

    function getMatricule() {
        return $this->matricule;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function getAdress() {
        return $this->adress;
    }

    function getEmail() {
        return $this->email;
    }

    function getTel() {
        return $this->tel;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setMatricule($matricule) {
        $this->matricule = $matricule;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    function setAdress($adress) {
        $this->adress = $adress;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setTel($tel) {
        $this->tel = $tel;
    }
    
    function getImage() {
        return $this->image;
    }

    function setImage($image) {
        $this->image = $image;
    }
    
    
    
}
