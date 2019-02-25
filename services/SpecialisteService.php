<?php
class SpecialisteService {

    private $conn;

    function __construct() {
        $this->conn = new connection();
    }
    public function CreateSpecialiste($obj) {

        $sql = " INSERT INTO specialiste(nom, descr) VALUES (:nom,:descr)";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'nom' => $obj->getnom(),
            'descr' => $obj->getDescription()
            
        ));
       
    }
    public function UpdateSpecialiste($obj) {

        $sql = "UPDATE specialiste SET 
        nom=:nom,descr=:descr WHERE id=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'nom' => $obj->getnom(),
            'descr' => $obj->getDescription(),
            'id'=>$obj->getId_spec()
            
        ));

    }
    public function DeleteSpecialiste($idSpec)
    {
        $sql = "DELETE FROM `specialiste` WHERE `id`=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$idSpec]);
    }

    public function findAllSpecial() {

        $sql = "SELECT * FROM specialiste";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }

    public function findAllSpecialistebyID($id) {

        $sql = "SELECT * FROM specialiste WHERE id=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$id]);

        return $stmt->fetch();
    }

   












}





