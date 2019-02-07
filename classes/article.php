<?php
class article{

Private $Article_ID;
private $Article_Name;
private $CodeArticle;
private $Reference;
private $Stock;
private $Unite;
private $Reserve;
private $Seuil;
private $DateAddArt;
private $forni_id;
private $id_cat;

public function constr($article_ID,$article_Name,$codeArticle,$reference,$stock,$unite,$Reserve,$seuil,$dateAddArt,$Forni_id,$Id_cat)
{
    $this->rticle_ID=$article_ID;
    $this->Article_Name=$article_Name;
    $this->CodeArticle=$codeArticle;
    $this->Reference=$reference;
    $this->Stock=$stock;
    $this->Reserve=$Reserve;
    $this->Seuil=$seuil;
    $this->DateAddArt=$dateAddArt;
    $this->forni_id=$Forni_id;
    $this->id_cat=$Id_cat;
}
////////////////////
public function getArticle_ID()
{
    return $this->Article_ID;
}
public function setArticle_ID($article_ID)
{
    $this->Article_ID=$article_ID;
}
////////////////////
public function getArticle_Name()
{
    return $this->Article_Name;
}
public function setArticle_Name($article_Name)
{
    $this->Article_Name=$article_Name;
}
////////////////////
public function getCodeArticle()
{
    return $this->CodeArticle;
}
public function setCodeArticle($codeArticle)
{
    $this->CodeArticle=$codeArticle;
}
////////////////////
public function getReference()
{
    return $this->Reference;
}
public function setReference($reference)
{
    $this->Reference=$reference;
}
////////////////////
public function getStock()
{
    return $this->Stock;
}
public function setStock($stock)
{
    $this->Stock=$stock;
}
////////////////////
public function getReserve()
{
    return $this->Reserve;
}
public function setReserve($reserve)
{
    $this->Reserve=$reserve;
}
////////////////////
public function getSeuil()
{
    return $this->Seuil;
}
public function setSeuil($seuil)
{
    $this->Seuil=$seuil;
}
////////////////////
public function getDateAddArt()
{
    return $this->DateAddArt;
}
public function setDateAddArt($dateAddArt)
{
    $this->DateAddArt=$dateAddArt;
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
public function getid_cat()
{
    return $this->id_cat;
}
public function setid_cat($Id_cat)
{
    $this->id_cat=$Id_cat;
}

}
?>