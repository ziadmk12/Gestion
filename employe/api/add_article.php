<?php
session_start();
include_once '../../racine.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    $nom=$_POST['nom'];
    $code=$_POST['code'];
    $stock=$_POST['stock'];
    $dateadd=$_POST['dateadd'];
    $pers_id=$_SESSION["idPersone"];
    $cat_id=$_POST['cat_id'];



    $Art=new article($nom,$code,$stock,$dateadd,$pers_id,$cat_id);
    $servArticle=new ArticleService();
    $servArticle->createArticle($Art);

    header('Content-type: application/json');

    echo json_encode("treu");
}











?>