<?php

include_once '../../racine.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nom=$_POST['nom'];
    $description=$_POST['descrip'];
    $dateadd=$_POST['dateadd'];
    $idcat=$_POST['id'];

    $categorie=new categories($nom,$description,$dateadd);
    $categorie->setcat_id($idcat);
    $catService=new CategoriesService();
    $catService->updateCategories($categorie);
    

    header('Content-type: application/json');


    echo json_encode("");



}