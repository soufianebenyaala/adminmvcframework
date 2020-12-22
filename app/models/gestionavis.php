
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
    public function deleteavis($id){
        $this->db->query('DELETE FROM avis WHERE id_avis = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}