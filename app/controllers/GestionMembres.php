<?php
class GestionMembres extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function gestionmembre() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('gestion_membre', $data);
    }
  
}