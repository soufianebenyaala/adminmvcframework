<?php
class gestioncommande {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function afficheDataCommande(){
    //Prepared statement
    $this->db->query('SELECT * FROM commande');

    $res=$this->db->resultSet();

    return $res;
    }
}