<?php
class gestionproduit {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    public function gestionproduit($data) {
        $this->db->query('INSERT INTO produit (id_salle,prix,date_depart,date_arrivee) 
        VALUES(:id_salle,:prix,:date_depart,:date_arrivee)');
        
        //Bind values
        
        $this->db->bind(':id_salle', $data['id_salle']);
        $this->db->bind(':prix', $data['prix']);
        $this->db->bind(':date_depart', $data['date_depart']);
        $this->db->bind(':date_arrivee', $data['date_arrivee']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }






     //Find user by email. Email is passed in by the Controller.
    public function affichesproduitData() {

    //Prepared statement
    $this->db->query('SELECT * FROM produit');

    $res=$this->db->resultSet();

    return $res;
    
    }

     //Find user by email. Email is passed in by the Controller.
    public function affichesalleData() {
                    //Prepared statement
        $this->db->query('SELECT * FROM salle');
                
        $res=$this->db->resultSet();
                        
        return $res;
        
    }

    public function getProduitDataById($id){
            //Prepared statement
    $this->db->query('SELECT * FROM produit WHERE id_produit = :id');

    $this->db->bind(':id', $id);

    $res=$this->db->resultSet();

    return $res;
    }

    public function deleteproduit($id){
        $this->db->query('DELETE FROM produit WHERE id_produit = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}