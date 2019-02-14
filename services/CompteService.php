<?php 
class CompteService
{
    private $conn;

    function __construct() {
        $this->conn = new connection();
    }
    public function findAll() {

        $sql = "SELECT * FROM compte";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }
    public function findEmploye() {

        $sql = "SELECT * FROM compte
        INNER JOIN personne ON personne.id=compte.personne_id
        WHERE compte.grade='employee'";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }

    public function create($obj) {

        $sql = "INSERT INTO compte (login,pass,personne_id,grade) VALUES (:login,:pass,:pers_id,:grade)";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'login' => $obj->getLogin(),
            'pass' => $obj->getMotPass(),
            'pers_id' => $obj->getPersonne_Id(),
            'grade' => $obj->getGrade(),
        ));
    }


    
}
