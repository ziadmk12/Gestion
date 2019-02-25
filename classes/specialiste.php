<?php
class specialiste
{
    private $id_spec;
    private $nom;
    private $description;

   
    public function __construct($Nom,$Description)
{
    $this->nom=$Nom;
    $this->description=$Description;
    
}

public function getId_spec()
{
    return $this->id_spec;
}
public function setId_spec($id_spec)
{
    $this->id_spec=$id_spec;
}
////////////////////
public function getnom()
{
    return $this->nom;
}
public function setnom($nom)
{
    $this->nom=$nom;
}
////////////////////
public function getDescription()
{
    return $this->description;
}
public function setDescription($description)
{
    $this->description=$description;
}

















}





