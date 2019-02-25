<?php 
class CategoriesService
{
    private $conn;

    function __construct() {
        $this->conn = new connection();
    }

    public function createcategories($obj) {

        $sql = "INSERT INTO categories (cat_name,descrip,date_add,id_perso) VALUES (:cat_name,:descrip,:date_add,:id_perso)";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'cat_name' => $obj->getcat_name(),
            'descrip' => $obj->getdescrip(),
            'date_add' => $obj->getdate_add(),
            'id_perso'=>$obj->getId_Pers()
            
        ));
       
    }

    public function findCategoriebyId($idCat) {

        $sql = "SELECT * from categories WHERE cat_id=:cat_id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['cat_id'=>$idCat]);
        return $stmt->fetch();
    }

    public function findAllCat() {

        $sql = "SELECT categories.*,personne.prenom,personne.nom FROM categories
        inner JOIN personne ON personne.id=categories.id_perso";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }
    
    public function findAllCatper($id) {

        $sql = "SELECT *  FROM categories WHERE id_perso=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$id]);

        return $stmt->fetchAll();
    }
    
    public function findAllNameCat($id) {

        $sql = "SELECT categories.cat_name from categories
        WHERE categories.id_perso=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$id]);

        return $stmt->fetchAll();
    }


    public function updateCategories($obj) {

        $sql = "update categories 
        SET cat_name=:cat_name,descrip=:descrip WHERE cat_id=:cat_id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'cat_name' => $obj->getcat_name(),
            'descrip' => $obj->getdescrip(),
            'cat_id' => $obj->getcat_id()
        ));

    }
    public function deleteCategories($idCat)
    {
        $sql = "DELETE FROM categories WHERE cat_id=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$idCat]);
    }

    public function coutCategorie() {

        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->rowCount();
    }
    public function coutCategoriespers($id) {

        $sql = "SELECT * FROM categories WHERE categories.id_perso=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$id]);

        return $stmt->rowCount();
    }
    public function findCategorieBetweendates($date1,$date2) {

        $sql = "SELECT categories.*,personne.nom,personne.prenom FROM categories 
        inner JOIN personne ON personne.id=categories.id_perso WHERE date_add BETWEEN :date1 AND :date2
        ";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([
            'date1'=>$date1,
            'date2'=>$date2
            ]);

        return $stmt->fetchAll();
    }

    public function NombreCategorieParPersonne() {

        $sql = "SELECT personne.nom,COUNT(*) as 'nbr' FROM categories INNER JOIN personne on personne.id=categories.id_perso GROUP BY id_perso";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }






}













?>