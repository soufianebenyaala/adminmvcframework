<?php
class gestionsalle {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function gestionsalle($data) {
        $this->db->query('INSERT INTO salle (pays,ville,cp,titre,description,photo_1,photo_2,photo_3,capacite,categorie,addresse,photo_4) 
        VALUES(:pays,:ville,:cp,:titre,:description,:photo_1,:photo_2,:photo_3,:capacite,:categorie,:addresse,:photo_4)');
        
        //Bind values
        $this->db->bind(':titre', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':addresse', $data['address']);
        $this->db->bind(':pays', $data['country']);
        $this->db->bind(':ville', $data['city']);
        $this->db->bind(':cp', $data['cp']);
        $this->db->bind(':capacite', $data['capacity']);
        $this->db->bind(':categorie', $data['category']);
        $this->db->bind(':photo_1', $data['photo_1']);
        $this->db->bind(':photo_2', $data['photo_2']);
        $this->db->bind(':photo_3', $data['photo_3']);
        $this->db->bind(':photo_4',$data['photo_4']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function editsalle($data) {
        $this->db->query('UPDATE salle SET  ville = :ville ,cp = :cp , titre = :titre , description = :description , capacite =:capacite , categorie =:categorie , addresse =:addresse , photo_1 = :photo_1, photo_2 = :photo_2, photo_3 = :photo_3, photo_4 = :photo_4
        WHERE id_salle= :id');
        
        //Bind values
        $this->db->bind(':id', $data['id_salle']);
        $this->db->bind(':titre', $data['title']);
        $this->db->bind(':description', $data['description']);
        $this->db->bind(':addresse', $data['address']);
        $this->db->bind(':ville', $data['city']);
        $this->db->bind(':cp', $data['cp']);
        $this->db->bind(':capacite', $data['capacity']);
        $this->db->bind(':categorie', $data['category']);
        $this->db->bind(':photo_1', $data['photo_1']);
        $this->db->bind(':photo_2', $data['photo_2']);
        $this->db->bind(':photo_3', $data['photo_3']);
        $this->db->bind(':photo_4',$data['photo_4']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

     //Find user by email. Email is passed in by the Controller.
    public function afficheData() {
        //Prepared statement
        $this->db->query('SELECT * FROM salle');
            
        $res=$this->db->resultSet();
                    
        return $res;
    
    }


    public function findsallebyid($id) {
        //Prepared statement
        $this->db->query('SELECT * FROM salle WHERE id_salle = :id');

        //Email param will be binded with the email variable
        $this->db->bind(':id', $id);

        $res=$this->db->resultSet();
                    
        return $res;
    }

    public function deletesalle($id) {
        $this->db->query('DELETE FROM salle WHERE id_salle = :id');

        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function country(){
        //Prepared statement
        $this->db->query('SELECT country_name FROM countries');

        $res=$this->db->resultSet();
                    
        return $res;
    }


}