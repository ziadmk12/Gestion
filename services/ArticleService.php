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

    $sql = "SELECT * FROM article WHERE article.Pers_id=:id";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute(['id'=>$id]);

    return $stmt->fetchAll();
}

public function createArticle($obj) {

    $sql = "INSERT INTO `article`(`Article_Name`, `CodeArticle`, `Stock`, `DateAddArt`, `Pers_id`, `id_cat`) VALUES (:Article_Name,:CodeArticle,:Stock,:DateAddArt,:Pers_id,:id_cat)";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute(array(

        'Article_Name' => $obj->getarticle_Name(),
        'CodeArticle' => $obj->getcodeArticle(),
        'Stock' => $obj->getstock(),
        'DateAddArt'=>$obj->getdateAddArt(),
        'Pers_id'=>$obj->getper_id(),
        'id_cat'=>$obj->getid_cat()
        
    ));
   
}
public function findArticleById($id) {

    $sql = "SELECT * FROM article WHERE Article_ID = :Article_ID";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute(array('Article_ID' => $id));

    return $stmt->fetch();

}
public function updateArticle($obj) {

    $sql = "UPDATE article SET Article_Name=:Article_Name,CodeArticle=:CodeArticle,Stock=:Stock,DateAddArt=:DateAddArt,Pers_id=:Pers_id,id_cat=:id_cat WHERE Article_ID=:Article_ID";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute(array(

        'Article_Name' => $obj->getarticle_Name(),
        'CodeArticle' => $obj->getcodeArticle(),
        'Stock' => $obj->getstock(),
        'DateAddArt'=>$obj->getdateAddArt(),
        'Pers_id'=>$obj->getper_id(),
        'id_cat'=>$obj->getid_cat(),
        'Article_ID'=>$obj->getarticle_ID()

    ));

}
public function deleteArticle($id)
{
    $sql = "DELETE FROM article WHERE Article_ID = :Article_ID";
    $stmt = $this->conn->getConn()->prepare($sql);
    $stmt->execute(['Article_ID'=>$id]);
}









}