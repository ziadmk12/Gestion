<?php

include_once '../../racine.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nom=$_POST['nom'];
    $description=$_POST['descrip'];
  
    $idcat=$_POST['id'];

    $categorie=new categories($nom,$description,null,null);
    $categorie->setcat_id($idcat);
    $catService=new CategoriesService();
    $catService->updateCategories($categorie);
    

    header('Content-type: application/json');


    echo json_encode("ok");



}