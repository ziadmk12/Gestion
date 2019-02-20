<?php


include_once '../../racine.php';




if($_SERVER['REQUEST_METHOD'] == 'POST'){

   
    $idCat=$_POST["id"];
    $serCategorie=new CategoriesService();
    $serCategorie->deleteCategories($idCat);



    header('Content-type: application/json');

    echo json_encode($idCat);
}
