<?php
class fournisseur {
    private $forni_id;
    private $nom;
    private $prenom;
    private $cin;
    private $datAddFourni;
    private $mobile;

    public function __construct($Nom,$Prenom,$Cih,$DatAddFourni,$Mobile)
{
    $this->nom=$Nom;
    $this->prenom=$Prenom;
    $this->cin=$Cih;
    $this->datAddFourni=$DatAddFourni;
    $this->mobile=$Mobile;
}
////////////////////
public function getforni_id()
{
    return $this->forni_id;
}
public function setforni_id($Forni_id)
{
    $this->forni_id=$Forni_id;
}
////////////////////
public function getnom()
{
    return $this->nom;
}
public function setnom($Nom)
{
    $this->nom=$Nom;
}
////////////////////
public function getprenom()
{
    return $this->prenom;
}
public function setprenom($Prenom)
{
    $this->prenom=$Prenom;
}
////////////////////
public function getcin()
{
    return $this->cin;
}
public function setcin($Cin)
{
    $this->cin=$Cin;
}
////////////////////
public function getdatAddFourni()
{
    return $this->datAddFourni;
}
public function setdatAddFourni($DatAddFourni)
{
    $this->datAddFourni=$DatAddFourni;
}
////////////////////
public function getmobile()
{
    return $this->mobile;
}
public function setmobile($Mobile)
{
    $this->mobile=$Mobile;
}
}




?>