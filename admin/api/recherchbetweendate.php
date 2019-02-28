<?php


include_once '../../racine.php';




if($_SERVER['REQUEST_METHOD'] == 'POST'){


    
$date1=$_POST["date1"];
$date2=$_POST["date2"];

$serArticle=new ArticleService();
$find=$serArticle->findArticleBetweendates($date1,$date2);
   
  



    header('Content-type: application/json');

    echo json_encode($find);
}
