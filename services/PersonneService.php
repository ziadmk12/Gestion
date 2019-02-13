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

}

