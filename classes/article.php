<?php


class article {

private $article_ID;
private $article_Name;
private $codeArticle;
private $stock;
private $dateAddArt;
private $per_id;
private $id_cat;

public function __construct($article_Name,$codeArticle,$stock,$dateAddArt,$per_id,$id_cat)
{
    $this->article_Name=$article_Name;
    $this->codeArticle=$codeArticle;
    $this->stock=$stock;
    $this->dateAddArt=$dateAddArt;
    $this->per_id=$per_id;
    $this->id_cat=$id_cat;

}

public function getarticle_ID()
{
    return $this->article_ID;
}
public function setarticle_ID($article_ID)
{
    $this->article_ID=$article_ID;
}
////////////////////
public function getarticle_Name()
{
    return $this->article_Name;
}
public function setarticle_Name($article_Name)
{
    $this->article_Name=$article_Name;
}
////////////////////
public function getcodeArticle()
{
    return $this->codeArticle;
}
public function setcodeArticle($codeArticle)
{
    $this->codeArticle=$codeArticle;
}
////////////////////
public function getstock()
{
    return $this->stock;
}
public function setstock($stock)
{
    $this->stock=$stock;
}
////////////////////
public function getdateAddArt()
{
    return $this->dateAddArt;
}
public function setdateAddArt($dateAddArt)
{
    $this->dateAddArt=$dateAddArt;
}
////////////////////
public function getper_id()
{
    return $this->per_id;
}
public function setper_id($per_id)
{
    $this->per_id=$per_id;
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
