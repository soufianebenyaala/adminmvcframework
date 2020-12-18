
<?php
class gestionavis {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }


     //Find user by email. Email is passed in by the Controller.
    public function afficheavisData() {

    //Prepared statement
    $this->db->query('SELECT * FROM avis');

    $res=$this->db->resultSet();

    return $res;
    
    }

}