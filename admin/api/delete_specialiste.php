<?php

include_once '../../racine.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

   
   $id=$_POST["id"];
   $sevSpecialiste=new SpecialisteService();
   $sevSpecialiste->DeleteSpecialiste($id);



    header('Content-type: application/json');

    echo json_encode($id);
}






