<?php
class GestionProduits extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function gestionproduit() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('gestion_produit', $data);
    }
  
}