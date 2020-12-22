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
    public function delete($id){
        $this->db->query('DELETE FROM membre WHERE id_membre = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

         //Find user by email. Email is passed in by the Controller.
         public function afficheadminData() {

            //Prepared statement
            $this->db->query('SELECT * FROM admin');
        
            $res=$this->db->resultSet();
        
            return $res;
            
            }

}