<?php

include_once '../../racine.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    $nom=$_POST['nom'];
    $description=$_POST['descr'];
    $id_spec=$_POST['id'];

    $specialite=new specialiste($nom,$description);
    $specialite->setId_spec($id_spec);

    $servSpecialite=new SpecialisteService();
    $servSpecialite->UpdateSpecialiste($specialite);
    

    header('Content-type: application/json');


    echo json_encode("");



}
?>


