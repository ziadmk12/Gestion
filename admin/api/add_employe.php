<?php

include_once '../../services/PersonneService.php';
include_once '../../classes/Personne.php';
include_once '../../classes/Compte.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

   
    $matricule=$_POST['matricule'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $datenaissance=$_POST['dateN'];
    $adresse=$_POST['adresse'];
    $email=$_POST['email'];
    $telefone=$_POST['tele'];
    $image=$_FILES['image']['name'];
    $grade=$_POST['grade'];
    $pass=$_POST['pass'];

    $pers=new Personne($matricule,$nom, $prenom,$datenaissance,$adresse,$email,$telefone,$image);
    $comp=new Compte($email,$pass,1,$grade);

    header('Content-type: application/json');

    echo json_encode("treu");
}
