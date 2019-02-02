<?php

class Compte{

    private $id;
    private $login;
    private $motPass;
    
    function __construct($id,$login,$motPass){
        
        $this->id = $id;
        $this->login = $login;
        $this->motPass = $motPass;

    }
    
    function getId() {
        return $this->id;
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

    function setLogin($login) {
        $this->login = $login;
    }

    function setMotPass($motPass) {
        $this->motPass = $motPass;
    }


}