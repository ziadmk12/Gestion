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
        WHERE compte.grade='chef'";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }
    public function findById($id) {

        $sql = "SELECT personne.*,compte.id as 'copmte_id',compte.login,compte.pass,compte.grade FROM compte INNER JOIN personne ON personne.id=compte.personne_id
        WHERE personne.id=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$id]);

        return $stmt->fetch();
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
    public function coutEmploye() {

        $sql = "SELECT * FROM personne INNER JOIN compte on personne.id=compte.personne_id WHERE compte.grade='chef'";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->rowCount();
    }

    public function updateCompte($obj) {

        $sql = "update compte
        SET login=:login,pass=:pass,grade=:grade WHERE id=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'login' => $obj->getLogin(),
            'pass' => $obj->getMotPass(),
            'grade' => $obj->getGrade(),
            'id'=>$obj->getId()
        
        ));

        

    }


    
}
