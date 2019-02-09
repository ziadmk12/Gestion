<?php

class Compte{

    private $id;
    private $login;
    private $motPass;
    private $personne_id;
    
    function __construct($id,$login,$motPass,$personne_id){
        
        $this->id = $id;
        $this->login = $login;
        $this->motPass = $motPass;
        $this->personne_id=$personne_id;

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