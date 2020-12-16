<?php
class GestionSalles extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function gestionsalle() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('gestion_salle', $data);
    }
  
}