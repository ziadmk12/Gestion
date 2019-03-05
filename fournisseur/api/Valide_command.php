<?php
include_once '../../racine.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    $id=$_POST['id'];


  
    $Commande = new Commande(Date("Y-m-d"),1,null,null);
    $Commande->setid($id);
    $servCommande=new CommandeService();
    $servCommande->updateEtatCommande($Commande);
    
    

    header('Content-type: application/json');


    echo json_encode("ok");



}