<?php
include_once '../../racine.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    $nom=$_POST['nom']; 
    $code=$_POST['code'];
    $id_article=$_POST['id'];
    $stock=$_POST['stock'];
    $dateadd=$_POST['dateadd'];
    $pers_id=$_SESSION["idPersone"];
    $cat_id=$_POST['cat_id'];
    $image=$_FILES['image']['name'];
    if(empty($_FILES['image']['name'])){
        $image=$_POST['old_image'];
    }
    else{
        $image=$_FILES['image']['name'];
        $target_dir='../../images/';
        if(!empty($_FILES['image'][tmp_name])){
            move_uploaded_file($_FILES['image'][tmp_name],$target_dir.$image);
        }
    } 

    $article=new article($nom,$code,$stock,$dateadd,$pers_id,$cat_id,$image);
    $article->setarticle_ID($id_article);
    $servArticl=new ArticleService();
    $servArticl->updateArticle($article);
    

    header('Content-type: application/json');


    echo json_encode("ok");



}