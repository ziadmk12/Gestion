<?php


include_once '../../racine.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $matricule=$_POST['matricule'];
    $nom=$_POST['nom'];
    $id=$_POST['id'];
    $prenom=$_POST['prenom'];
    $datenaissance=$_POST['dateNaissance'];
    $adresse=$_POST['adress'];
    $email=$_POST['email'];
    $telefone=$_POST['tel'];
    $image=$_FILES['image']['name'];
    if(empty($_FILES['image']['name'])){
        $image=$_POST['old_image'];
    }else{
        $image=$_FILES['image']['name'];
        $target_dir='../../images/';
        if(!empty($_FILES['image'][tmp_name]))
        {
            move_uploaded_file($_FILES['image'][tmp_name],$target_dir.$image);
        }
    } 
    
    
    


    $person=new Personne($matricule,$nom,$prenom,$datenaissance,$adresse,$email,$telefone,$image);
    $person->setId($id);
    $persoserve=new PersonneService();
    $persoserve->updatePersonne($person);


    header('Content-type: application/json');


    echo json_encode("");

}
