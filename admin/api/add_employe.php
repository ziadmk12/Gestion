<?php


include_once '../../racine.php';




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

    $pers=new Personne($matricule,$nom,$prenom,$datenaissance,$adresse,$email,$telefone,$image);
    $sevPersone=new PersonneService();
    $id=$sevPersone->createPersone($pers);

    $comp=new Compte($email,$pass,$id,$grade);

    header('Content-type: application/json');

    echo json_encode("treu");
}
