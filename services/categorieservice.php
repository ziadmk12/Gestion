<?php 
class categoriesrvice
{
    private $conn;

    function __construct() {
        $this->conn = new connection();
    }
    public function findAll() {

        $sql = "SELECT * FROM categories";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetchAll();
    }
    
    public function findcatById($id) {

        $sql = "SELECT * FROM categories 
        WHERE cat_id=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$id]);

        return $stmt->fetch();
    }

    public function create($obj) {

        $sql = "INSERT INTO categories (cat_id,cat_name,decrip,date_add) VALUES (:cat_id,:cat_name,:decrip,:date_add)";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'cat_id' => $obj->getcat_id(),
            'cat_name' => $obj->getcat_name(),
            'decrip' => $obj->getdescrip(),
            'date_add' => $obj->getdate_add(),
        ));
    }
    public function coutarticle_in_categorie() {

        $sql = "SELECT count(*) FROM categories INNER JOIN article on categories.cat_id=article.id_cat WHERE categories.cat_id=article.id_cat ";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->rowCount();
    }

    public function updatecategorie($obj) {

        $sql = "update categorie
        SET cat_id=:cat_id,cat_name=:cat_name,descrip=:descrip,date_add=:date_add WHERE cat_id=:cat_id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'cat_id' => $obj->getcat_id(),
            'cat_name' => $obj->getcat_name(),
            'descrip' => $obj->getdescrip(),
            'date_add'=>$obj->getdate_add()
        
        ));

        

    }


    
}
