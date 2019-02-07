<?php
$dsn='mysql:host=localhost;dbname=gestion_stock';
$user='root';
$pass='';

try{
    $cnx=new PDO($dsn, $user, $pass);
    echo 'bien connecter';
    }
    catch(PDOException $m) {
      echo 'faild'. $m->getMessage();
    }


    
?>