<?php

class PersonneService {

    /*private $conn;

    function __construct() {
        $this->conn = new Connection();
    }

    public function create($obj) {

        $sql = "INSERT INTO personnes(matricule,nom,prenom,date_naissance,adress,email,tel,image) VALUES(:matricule,:nom,:prenom,:date_naissance,:adress,:email,:tel,:image)";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'matricule' => $obj->getMatricule(),
            'nom' => $obj->getNom(),
            'prenom' => $obj->getPrenom(),
            'date_naissance' => $obj->getDateNaissance(),
            'adress' => $obj->getAdress(),
            'email' => $obj->getEmail(),
            'tel' => $obj->getTel(),
            'image' => $obj->getImage()

        ));

        return $this->conn->getConn()->lastInsertId();

    }

    public function delete($id) {

        $sql = "DELETE FROM personnes WHERE id = :id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([ 'id' => $id ]);

    }

    public function findAll() {

        $sql = "SELECT * FROM personnes";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }

    public function findById($id) {

        $sql = "SELECT * FROM personnes WHERE id = :id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array('id' => $id));

        return $stmt->fetch();

    }
    public function findmatriculeById($id) {

        $sql = "SELECT matricule FROM personnes WHERE id = :id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array('id' => $id));

        return $stmt->fetchAll();

    }

    public function update($obj) {

        $sql = "UPDATE personnes SET matricule = :matricule, nom = :nom, prenom = :prenom, date_naissance = :date_naissance, adress = :adress, email = :email, tel = :tel, image = :image WHERE id = :id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([

            'matricule' => $obj->getMatricule(),
            'nom' => $obj->getNom(),
            'prenom' => $obj->getPrenom(),
            'date_naissance' => $obj->getDateNaissance(),
            'adress' => $obj->getAdress(),
            'email' => $obj->getEmail(),
            'tel' => $obj->getTel(),
            'image' => $obj->getImage(),
            'id' => $obj->getId()

        ]);

    }

    public function updateAdmin($id,$matricule,$nom,$prenom,$email,$dateN,$adresse,$tel,$image) {

        $sql = "UPDATE personnes SET matricule = ?, nom = ?, prenom = ?, date_naissance = ?, adress = ?, email = ?, tel = ?, image = ? WHERE id = ?";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([$matricule,$nom,$prenom,$dateN,$adresse,$email,$tel,$image,$id]);

    }

    public function getUserImage($id){

        $sql = "SELECT image FROM personnes WHERE id = ?";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public function verifyEmail($email){

        $sql = "SELECT * FROM personnes p INNER JOIN comptes c ON(p.id = c.personne_id) WHERE email = ?";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([$email]);
        return $stmt->fetch();

    }*/


}
