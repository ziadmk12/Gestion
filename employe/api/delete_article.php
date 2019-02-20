<?php


include_once '../../racine.php';




if($_SERVER['REQUEST_METHOD'] == 'POST'){

   
    $idArticle=$_POST["id"];
    $serArticle=new ArticleService();
    $serArticle->deleteArticle($idArticle);



    header('Content-type: application/json');

    echo json_encode($idArticle);
}
