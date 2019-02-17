<?php
<?php 
class fournisseursrvice
{
    private $conn;

    function __construct() {
        $this->conn = new connection();
    }
    public function findAll() {

        $sql = "SELECT * FROM fournisseur";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }
    
    public function findfourById($id) {

        $sql = "SELECT * FROM fournisseur 
        WHERE fourni_id=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$id]);

        return $stmt->fetch();
    }

    public function create($obj) {

        $sql = "INSERT INTO fournisseur (forni_id,nom,prenom,cin,datAddFourni,mobile) VALUES (:forni_id,:nom,:prenom,:cin,:datAddFourni,:mobile)";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'forni_id' => $obj->getforni_id(),
            'nom' => $obj->getnom(),
            'prenom' => $obj->getprenom(),
            'cin' => $obj->getcin(),
            'datAddFourni' => $obj->getdatAddFourni(),
            'mobile' => $obj->getmobile(),



        ));
    }
    public function coutfourni() {

        $sql = "SELECT count(*) FROM fournisseur";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->rowCount();
    }
    public function delete($id){
        $sql = "DELETE FROM `fournisseur` WHERE `personne`.`forni_id` = :iforni_idd";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['forni_id'=>$id]);
    }

    public function updatefournisseur($obj) {

        $sql = "update fournisseur
        SET forni_id=:forni _id,nom=:nom,prenom=:prenom,cin=:cin,datAddFourni=:datAddFourni,mobile=:mobile WHERE  forni_id=forni_id ";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'forni_id' => $obj->getforni_id(),
            'nom' => $obj->getnom(),
            'prenom' => $obj->getprenom(),
            'cin'=>$obj->getcin(),
            'datAddFourni'=>$obj->getdatAddFourni(),
            'mobile'=>$obj->getmobile()


        
        ));

        

    }


    
}
