<?php
class Home_ {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }
    
    // nombre de membre
     public function nombre_de_membre() {

        //Prepared statement
        $this->db->query("SELECT count(*) as nombre_de_membre FROM membre WHERE verifyAccount = 'oui'");
    
        $res=$this->db->resultSet();
    
        return $res;
        
        }

    // nombre de commande 
     public function nombre_de_commande() {

        //Prepared statement
        $this->db->query('SELECT count(*) as nombre_de_commande FROM commande');
    
        $res=$this->db->resultSet();
    
        return $res;
        
        }
    // nombre de views
    public function nombre_de_views() {

        //Prepared statement
        $this->db->query('SELECT views FROM produit');
        
        $res=$this->db->resultSet();
        
        return $res;
            
    }

     //Find user by email. Email is passed in by the Controller.
    public function affichemembreData() {

    //Prepared statement
    $this->db->query('SELECT * FROM membre');

    $res=$this->db->resultSet();

    return $res;
    
    }

     //Find user by email. Email is passed in by the Controller.
    public function nombre_de_commandeCommandeParMois($mois) {

    //Prepared statement
    $this->db->query('SELECT count(*) as nombreCommandeParMois FROM commande WHERE MONTH(date_commande) = :mois AND YEAR(date_commande) =:thisyear');
    
   

    $this->db->bind(':mois',$mois);
    $this->db->bind(':thisyear',date('Y'));

    $res=$this->db->resultSet();
    
     return $res;
            
    }

    //Find user by email. Email is passed in by the Controller.
    public function montant_de_commandeParMois($mois) {

    //Prepared statement
    $this->db->query('SELECT montant as montantCommandeParMois FROM commande WHERE MONTH(date_commande) = :mois AND YEAR(date_commande) =:thisyear');
            
           
        
    $this->db->bind(':mois',$mois);
    $this->db->bind(':thisyear',date('Y'));
        
    $res=$this->db->resultSet();
            
    return $res;
                    
    }

    //Find user by email. Email is passed in by the Controller.
    public function nombre_de_produitParMois($mois) {

            //Prepared statement
    $this->db->query('SELECT lesproduits as monbreProduitParMois FROM commande WHERE MONTH(date_commande) = :mois AND YEAR(date_commande) =:thisyear');
                    
                   
                
    $this->db->bind(':mois',$mois);
    $this->db->bind(':thisyear',date('Y'));
                
    $res=$this->db->resultSet();
                    
    return $res;
                            
    }



}