<?php
class article{

Private $article_ID;
private $article_Name;
private $codeArticle;
private $reference;
private $stock;
private $unite;
private $reserve;
private $seuil;
private $dateAddArt;
private $forni_id;
private $id_cat;

public function __construct($article_Name,$codeArticle,$reference,$stock,$unite,$Reserve,$seuil,$dateAddArt,$forni_id,$id_cat)
{
    
    $this->article_Name=$article_Name;
    $this->codeArticle=$codeArticle;
    $this->reference=$reference;
    $this->stock=$stock;
    $this->unite=$unite;
    $this->reserve=$reserve;
    $this->seuil=$seuil;
    $this->dateAddArt=$dateAddArt;
    $this->forni_id=$forni_id;
    $this->id_cat=$id_cat;
}
////////////////////
public function getArticle_ID()
{
    return $this->article_ID;
}
public function setArticle_ID($article_ID)
{
    $this->article_ID=$article_ID;
}
////////////////////
public function getArticle_Name()
{
    return $this->article_Name;
}
public function setArticle_Name($article_Name)
{
    $this->article_Name=$article_Name;
}
////////////////////
public function getCodeArticle()
{
    return $this->codeArticle;
}
public function setCodeArticle($codeArticle)
{
    $this->codeArticle=$codeArticle;
}
////////////////////
public function getReference()
{
    return $this->reference;
}
public function setReference($reference)
{
    $this->reference=$reference;
}
////////////////////
public function getStock()
{
    return $this->stock;
}
public function setStock($stock)
{
    $this->stock=$stock;
}
////////////////////
public function getReserve()
{
    return $this->reserve;
}
public function setReserve($reserve)
{
    $this->reserve=$reserve;
}
////////////////////
public function getSeuil()
{
    return $this->seuil;
}
public function setSeuil($seuil)
{
    $this->seuil=$seuil;
}
////////////////////
public function getDateAddArt()
{
    return $this->dateAddArt;
}
public function setDateAddArt($dateAddArt)
{
    $this->dateAddArt=$dateAddArt;
}
////////////////////
public function getforni_id()
{
    return $this->forni_id;
}
public function setforni_id($forni_id)
{
    $this->forni_id=$forni_id;
}
////////////////////
public function getid_cat()
{
    return $this->id_cat;
}
public function setid_cat($id_cat)
{
    $this->id_cat=$id_cat;
}
}


?>
