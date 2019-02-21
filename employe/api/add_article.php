<?php
session_start();
include_once '../../racine.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    $nom=$_POST['nom'];
    $code=$_POST['code'];
    $stock=$_POST['stock'];

    $pers_id=$_SESSION["idPersone"];
    $cat_id=$_POST['cat_id'];



    $Art=new article($nom,$code,$stock,Date("Y-m-d"),$pers_id,$cat_id);
    $servArticle=new ArticleService();
    $servArticle->createArticle($Art);

    header('Content-type: application/json');

    echo json_encode("treu");
}











?>