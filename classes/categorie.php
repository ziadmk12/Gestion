<?php


class {

private $id_cat ;
private $name_cat;

public function __construct($id_cat,$name_cat)
{
    
    $this->id_cat=$id_cat;
    $this->name_cat=$name_cat;
   
}
////////////////////
public function getcategorie_ID()
{
    return $this->id_cat;
}
public function setcategorie_ID($article_ID)
{
    $this->id_cat=$id_cat;
}
////////////////////
public function getcategorie_Name()
{
    return $this->name_cat;
}
public function setcategorie_Name($name_cat)
{
    $this->name_cat=$name_cat;
}
