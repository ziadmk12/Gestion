<?php


include_once '../../racine.php';




if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $matricule=$_POST['matricule'];
    $nom=$_POST['nom'];
    $id=$_POST['id'];
    $prenom=$_POST['prenom'];
    $datenaissance=$_POST['dateN'];
    $adresse=$_POST['adresse'];
    $email=$_POST['email'];
    $telefone=$_POST['tele'];
    $id_c=$_POST['id_c'];
    $image=$_FILES['image']['name'];
    if(empty($_FILES['image']['name'])){
        $image=$_POST['old_image'];
    }else{
        $image=$_FILES['image']['name'];
        $target_dir='../../images/';
        if(!empty($_FILES['image'][tmp_name])){
            move_uploaded_file($_FILES['image'][tmp_name],$target_dir.$image);
        }
    } 
    $grade=$_POST['grade'];
    
    if(empty($_POST['pass'])){
        $pass=$_POST['old_pass'];
    }else{
        $pass=$_POST['pass'];
    }


    $person=new Personne($matricule,$nom,$prenom,$datenaissance,$adresse,$email,$telefone,$image);
    $person->setId($id);
    $persoserve=new PersonneService();
    $persoserve->updatePersonne($person);
    $compte=new Compte($email,$pass,null,$grade);
    $compte->setId($id_c);
    $comservice=new CompteService();
    $comservice->updateCompte($compte);
    


   


    header('Content-type: application/json');


    echo json_encode("");

}
