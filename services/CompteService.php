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

        $sql = "SELECT compte.*,personne.*,specialiste.nom as 'snom' FROM compte
        INNER JOIN personne ON personne.id=compte.personne_id
        INNER JOIN specialiste ON compte.specialiste=specialiste.id
        WHERE compte.grade !='admin'";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }
    public function findById($id) {

        $sql = "SELECT specialiste.nom as 'snom',personne.*,compte.id as 'copmte_id',compte.login,compte.pass,compte.grade FROM 
        compte 
        INNER JOIN personne ON personne.id=compte.personne_id
        INNER JOIN specialiste ON compte.specialiste=specialiste.id
        WHERE personne.id=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$id]);

        return $stmt->fetch();
    }

    public function create($obj) {

        $sql = "INSERT INTO compte (login,pass,personne_id,grade,specialiste) VALUES (:login,:pass,:pers_id,:grade,:specialiste)";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'login' => $obj->getLogin(),
            'pass' => $obj->getMotPass(),
            'pers_id' => $obj->getPersonne_Id(),
            'grade' => $obj->getGrade(),
            'specialiste'=>$obj->getSpecialite()
        ));
    }
    public function coutEmploye() {

        $sql = "SELECT * FROM personne INNER JOIN compte on personne.id=compte.personne_id WHERE compte.grade='chef'";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->rowCount();
    }

    public function coutFournisseur() {

        $sql = "SELECT * FROM personne INNER JOIN compte on personne.id=compte.personne_id WHERE compte.grade='fournisseur'";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->rowCount();
    }



    public function updateCompte($obj) {

        $sql = "update compte
        SET login=:login,pass=:pass,specialiste=:specialite WHERE id=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'login' => $obj->getLogin(),
            'pass' => $obj->getMotPass(),
            'specialite' => $obj->getSpecialite(),
            'id'=>$obj->getId()
        
        ));

        

    }


    
}
