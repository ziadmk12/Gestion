<?php
include_once '../../racine.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nom=$_POST['Nom'];
    $description=$_POST['Descrip'];
    $dateAdd=$_POST['datadd'];



    $cat=new categories($nom,$description,$dateAdd);
    $servicecat=new CategoriesService();
    $servicecat->createcategories($cat);

    header('Content-type: application/json');

    echo json_encode("treu");
}











?>