<?php

class CommandeService
{
    private $conn;

    function __construct() {
        $this->conn = new connection();
    }
    public function createCommande($obj) {

        $sql = "INSERT INTO commande(dateadd, etat, id_article, id_fourniseur) VALUES (:dateadd,:etat,:id_article,:id_fourniseur)";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            'dateadd' => $obj->getDateadd(),
            'etat' => $obj->getEtat(),
            'id_article' => $obj->getId_article(),
            'id_fourniseur' => $obj->getId_fourniseur()

        ));

        

    }

















}
