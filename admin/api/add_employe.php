<?php




if($_SERVER['REQUEST_METHOD'] == 'POST'){

   
    $matricule=$_POST['matricule'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    

    header('Content-type: application/json');

    echo json_encode($matricule."/".$nom."/".$prenom);
}
