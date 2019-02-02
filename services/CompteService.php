<?php

class CompteService {
    
    /*private $conn;
    
    function __construct() {
        $this->conn = new Connection();
    }

    public function create($compte) {
        
        $sql = 'INSERT INTO comptes(login,mot_pass,personne_id) VALUES(:login,:mot_pass,:personne_id)';
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute([

            'login' => $compte->getLogin(),
            'mot_pass' => $compte->getMotPass(),
            'personne_id' => $compte->getId()
        ]);

    }

    public function delete($id) {
        
        $sql = 'DELETE FROM comptes WHERE id = :id';
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id' => $id ]);

    }

    public function findAll() {

        $sql = 'SELECT * FROM comptes';
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();

    }

    public function findById($id) {
        
        $sql = 'SELECT * FROM comptes WHERE personne_id = :id';
        $stmt = $this->conn->getConn()->prepare($sql);
        $stmt->execute(['id' => $id ]);
        return $stmt->fetch();
       
    }

    public function update($compte) {
        
        $sql = "UPDATE comptes SET login = :login ,mot_pass = :mot_pass WHERE personne_id = :id";
        $stmt = $this->conn->getConn()->prepare($sql);
        $params = array();
        
        $params['login'] = $compte->getLogin();
        $params['mot_pass'] = $compte->getMotPass();
        $params['id'] = $compte->getId();
        
        $stmt->execute($params);
    }*/
    

}
