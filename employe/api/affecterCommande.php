<?php

include_once '../../racine.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $Article_id=$_POST["article"];
    $Fourniseur_id=$_POST['fourni'];

    $commande=new Commande(Date("Y-m-d"),0,$Article_id,$Fourniseur_id);
    $servCommande=new CommandeService();
    $servCommande->createCommande($commande);

    header('Content-type: application/json');

    echo json_encode("treu");
}











?>