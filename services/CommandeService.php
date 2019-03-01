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
    public function findAllCommande($id) {

        $sql = "SELECT commande.id,commande.dateadd,commande.etat,article.Article_ID,article.Article_Name,personne.nom,personne.prenom FROM commande 
        INNER JOIN article on article.Article_ID=commande.id_article
         INNER JOIN personne on personne.id=commande.id_fourniseur WHERE article.Pers_id=:id

        ";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id'=>$id]);

        return $stmt->fetchAll();
    }
    public function updateCommande($obj) {

        $sql = "UPDATE commande SET
         dateadd=:dateadd,id_article=:id_article,id_fourniseur=:id_fourniseur WHERE id=:id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(array(

            
            'id_article' => $obj->getId_article(),
            'id_fourniseur'=>$obj->getId_fourniseur(),
            'dateadd'=>$obj->getDateadd(),
            'id'=>$obj->getid()
        
        ));

    }
    public function findIdofCommande() {

        $sql = "SELECT commande.id,commande.dateadd,commande.etat,article.Article_Name,personne.nom,personne.prenom FROM commande 
        INNER JOIN article on article.Article_ID=commande.id_article
         INNER JOIN personne on personne.id=commande.id_fourniseur 
         

        ";
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([]);

        return $stmt->fetch();
    }
   
















}
