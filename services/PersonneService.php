<?php


class PersonneService
{
    private $conn;

    function __construct() {
        $this->conn = new connection();
    }

    public function findPersonebyId($idPers) {

        $sql = "SELECT * from personne WHERE id=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$idPers]);
        return $stmt->fetch();
    }
    public function createPersone($obj) {

        $sql = "INSERT INTO personne(matricule,nom,prenom,dateNaissance,adress,email,tel,image) VALUES(:matricule,:nom,:prenom,:dateNaissance,:adress,:email,:tel,:image)";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'matricule' => $obj->getMatricule(),
            'nom' => $obj->getNom(),
            'prenom' => $obj->getPrenom(),
            'dateNaissance' => $obj->getDateNaissance(),
            'adress' => $obj->getAdress(),
            'email' => $obj->getEmail(),
            'tel' => $obj->getTel(),
            'image' => $obj->getImage()

        ));

        return $this->conn->getConn()->lastInsertId();

    }

}

