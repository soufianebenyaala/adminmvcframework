<?php
class gestionmembre {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }


     //Find user by email. Email is passed in by the Controller.
    public function affichemembreData() {

    //Prepared statement
    $this->db->query('SELECT * FROM membre');

    $res=$this->db->resultSet();

    return $res;
    
    }

}