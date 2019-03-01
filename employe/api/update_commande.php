<?php
include_once '../../racine.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
    $Article=$_POST['article']; 
    $fourniseur=$_POST['fourni'];
    $id=$_POST['id'];


  
    $Commande = new Commande(Date("Y-m-d"),null,$Article,$fourniseur);
    $Commande->setid($id);
    $servCommande=new CommandeService();
    $servCommande->updateCommande($Commande);
    
    

    header('Content-type: application/json');


    echo json_encode("ok");



}