<?php
class Commande {
private $id;
private $dateadd;
private $etat;
private $id_article;
private $id_fourniseur;

public function __construct($dateadd,$etat,$id_article,$id_fourniseur)
{
    $this->dateadd=$dateadd;
    $this->etat=$etat;
    $this->id_article=$id_article;
    $this->id_fourniseur=$id_fourniseur;
}

public function getDateadd()
{
    return $this->dateadd;
}
public function setDateadd($dateadd)
{
    $this->dateadd=$dateadd;
}
////////////////////
public function getEtat()
{
    return $this->etat;
}
public function setEtat($etat)
{
    $this->etat=$etat;
}
////////////////////
public function getId_article()
{
    return $this->id_article;
}
public function setId_article($id_article)
{
    $this->id_article=$id_article;
}
////////////////////
public function getId_fourniseur()
{
    return $this->id_fourniseur;
}
public function setId_fourniseur($id_fourniseur)
{
    $this->id_fourniseur=$id_fourniseur;
}










}




