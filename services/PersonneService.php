<?php


class PersonneService
{
    private $conn;

    function __construct() {
        $this->conn = new connection();
    }

}

