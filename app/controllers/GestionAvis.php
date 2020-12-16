<?php
class GestionAvis extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function gestionavis() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('gestion_avis', $data);
    }
  
}