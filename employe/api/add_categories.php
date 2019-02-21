<?php
session_start();
include_once '../../racine.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nom=$_POST['Nom'];
    $description=$_POST['Descrip'];
   



    $cat=new categories($nom,$description,Date("Y-m-d"),$_SESSION["idPersone"]);
    $servicecat=new CategoriesService();
    $servicecat->createcategories($cat);

    header('Content-type: application/json');

    echo json_encode("treu");
}











?>