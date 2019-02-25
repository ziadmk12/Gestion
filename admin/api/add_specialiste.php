<?php

include_once '../../racine.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $nom=$_POST['Nom'];
    $description=$_POST['Descrip'];


    $specialis=new specialiste($nom,$description);
    $servicSperc=new SpecialisteService();
    $servicSperc->CreateSpecialiste($specialis);

    header('Content-type: application/json');

    echo json_encode("treu");
}














?>