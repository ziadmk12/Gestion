<?php

class Compte{

    private $id;
    private $login;
    private $motPass;
    private $personne_id;
    private $grade;
    
    function __construct($login,$motPass,$personne_id,$grade){
        
        
        $this->login = $login;
        $this->motPass = $motPass;
        $this->personne_id=$personne_id;
        $this->grade=$grade;

    }
    function getGrade() {
        return $this->grade;
    }
    function setGrade($grade) {
        $this->grade = $grade;
    }
    
    function getId() {
        return $this->id;
    }
    function getPersonne_Id() {
        return $this->personne_id;
    }


    function getLogin() {
        return $this->login;
    }

    function getMotPass() {
        return $this->motPass;
    }

    function setId($id) {
        $this->id = $id;
    }
    function setPersonne_Id($personne_id) {
        $this->personne_id = $personne_id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setMotPass($motPass) {
        $this->motPass = $motPass;
    }


}