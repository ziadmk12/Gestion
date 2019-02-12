<?php




if($_SERVER['REQUEST_METHOD'] == 'POST'){

   
    $matricule=$_POST['matricule'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $datenaissance=$_POST['dateN'];
    $adresse=$_POST['adresse'];
    $email=$_POST['email'];
    $telefone=$_POST['tele'];
    $image=$_POST['image'];
    $grade=$_POST['grade'];

    header('Content-type: application/json');

    echo json_encode($matricule."/".$nom."/".$prenom."/".$datenaissance."/".$adresse."/".$email."/".$telefone."/".$image."/".$grade);
}
