<?php
class ArticleService {
private $conn;

function __construct() {
    $this->conn = new connection();
}


public function findAllArticle() {

    $sql = "SELECT * FROM article";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute([]);

    return $stmt->fetchAll();
}
public function findAllByPers($id) {

    $sql = "SELECT article.*,categories.cat_name FROM article  INNER JOIN categories on categories.cat_id=article.id_cat WHERE article.Pers_id=:id";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute(['id'=>$id]);

    return $stmt->fetchAll();
}

public function createArticle($obj) {

    $sql = "INSERT INTO `article`(`Article_Name`, `CodeArticle`, `Stock`, `DateAddArt`, `Pers_id`, `id_cat`, `image`) VALUES (:Article_Name,:CodeArticle,:Stock,:DateAddArt,:Pers_id,:id_cat,:image)";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute(array(

        'Article_Name' => $obj->getarticle_Name(),
        'CodeArticle' => $obj->getcodeArticle(),
        'Stock' => $obj->getstock(),
        'DateAddArt'=>$obj->getdateAddArt(),
        'Pers_id'=>$obj->getper_id(),
        'id_cat'=>$obj->getid_cat(),
        'image'=>$obj->getimage()

        
    ));
   
}
public function findArticleById($id) {

    $sql = "SELECT * FROM article WHERE Article_ID = :Article_ID";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute(array('Article_ID' => $id));

    return $stmt->fetch();

}
public function updateArticle($obj) {

    $sql = "UPDATE article SET Article_Name=:Article_Name,CodeArticle=:CodeArticle,Stock=:Stock,DateAddArt=:DateAddArt,Pers_id=:Pers_id,id_cat=:id_cat,image=:image WHERE Article_ID=:Article_ID";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute(array(

        'Article_Name' => $obj->getarticle_Name(),
        'CodeArticle' => $obj->getcodeArticle(),
        'Stock' => $obj->getstock(),
        'DateAddArt'=>$obj->getdateAddArt(),
        'Pers_id'=>$obj->getper_id(),
        'id_cat'=>$obj->getid_cat(),
        'image'=>$obj->getimage(),
        'Article_ID'=>$obj->getarticle_ID()
        
    ));

}
public function deleteArticle($id)
{
    $sql = "DELETE FROM article WHERE Article_ID = :Article_ID";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute(['Article_ID'=>$id]);
}
public function coutArticlebypers($id) {

    $sql = "SELECT * FROM article WHERE Pers_id=:Pers_id";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute(['Pers_id'=>$id]);

    return $stmt->rowCount();
}
public function coutArticle() {

    $sql = "SELECT * FROM article";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute([]);

    return $stmt->rowCount();
}

public function AllArticle() {

    $sql = "SELECT article.*,personne.nom,personne.prenom,categories.cat_name FROM article INNER JOIN personne on personne.id=article.Pers_id INNER JOIN categories on categories.cat_id=article.id_cat";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute([]);

    return $stmt->fetchAll();
}

public function NombreCArticleParPersonne() {

    $sql = "SELECT personne.nom,COUNT(*) as 'nbr' FROM article INNER JOIN personne on personne.id=article.Pers_id GROUP BY personne.nom";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute([]);

    return $stmt->fetchAll();
}
public function findArticleBetweendates($date1,$date2) {

    $sql = "SELECT article.*,personne.nom,personne.prenom FROM article 
    inner JOIN personne ON personne.id=article.Pers_id WHERE article.DateAddArt BETWEEN :date1 AND :date2";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute([
        'date1'=>$date1,
        'date2'=>$date2
        ]);

    return $stmt->fetchAll();
}









}