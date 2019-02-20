<?php
class categories{
    private $cat_id;
    private $cat_name;
    private $descrip;
    private $date_add;
    private $id_pers;

    public function __construct($Cat_name,$Descrip,$Date_add,$id_pers)
{
    $this->cat_name=$Cat_name;
    $this->descrip=$Descrip;
    $this->date_add=$Date_add;
    $this->id_pers=$id_pers;
}
public function getId_Pers()
{
    return $this->id_pers;
}
public function setId_Pers($id_pers)
{
    $this->id_pers=$id_pers;
}
////////////////////
public function getcat_id()
{
    return $this->cat_id;
}
public function setcat_id($Cat_id)
{
    $this->cat_id=$Cat_id;
}
////////////////////
public function getcat_name()
{
    return $this->cat_name;
}
public function setcat_name($Cat_name)
{
    $this->cat_name=$Cat_name;
}
////////////////////
public function getdescrip()
{
    return $this->descrip;
}
public function setdescrip($Descrip)
{
    $this->descrip=$Descrip;
}
////////////////////
public function getdate_add()
{
    return $this->date_add;
}
public function setdate_add($Date_add)
{
    $this->date_add=$Date_add;
}
}


?>