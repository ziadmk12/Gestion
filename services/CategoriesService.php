<?php 
class CategoriesService
{
    private $conn;

    function __construct() {
        $this->conn = new connection();
    }

    public function createcategories($obj) {

        $sql = "INSERT INTO categories (cat_name,descrip,date_add) VALUES (:cat_name,:descrip,:date_add)";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'cat_name' => $obj->getcat_name(),
            'descrip' => $obj->getdescrip(),
            'date_add' => $obj->getdate_add()
            
        ));
       
    }

    public function findCategoriebyId($idCat) {

        $sql = "SELECT * from categories WHERE cat_id=:cat_id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['cat_id'=>$idCat]);
        return $stmt->fetch();
    }

    public function findAllCat() {

        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }

    public function updateCategories($obj) {

        $sql = "update categories 
        SET cat_name=:cat_name,descrip=:descrip,date_add=:date_add WHERE cat_id=:cat_id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'cat_name' => $obj->getcat_name(),
            'descrip' => $obj->getdescrip(),
            'date_add' => $obj->getdate_add(),
            'cat_id' => $obj->getcat_id()



        ));

    }
    public function deleteCategories($idCat)
    {
        $sql = "DELETE FROM categories WHERE cat_id=:cat_id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$idCat]);
    }

    public function coutCategorie() {

        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->rowCount();
    }




}













?>