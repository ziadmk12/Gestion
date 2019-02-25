<?php
session_start();
include_once '../../racine.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    $nom=$_POST['nom'];
    $code=$_POST['code'];
    $stock=$_POST['stock'];
    $image=$_FILES['image']['name'];

    $pers_id=$_SESSION["idPersone"];
    $cat_id=$_POST['cat_id'];
    $target_dir='../../images/';
    if(!empty($_FILES['image'][tmp_name])){
        move_uploaded_file($_FILES['image'][tmp_name],$target_dir.$image);
    }



    $Art=new article($nom,$code,$stock,Date("Y-m-d"),$pers_id,$cat_id,$image);
    $servArticle=new ArticleService();
    $servArticle->createArticle($Art);

    header('Content-type: application/json');

    echo json_encode("treu");
}











?>