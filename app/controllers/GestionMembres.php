<?php
class GestionMembres extends Controller {
    public function __construct() {
       $this->userModel = $this->model('gestionmembre');
    }

    public function gestionmembre() {
        $data = [
            'getdata' => '',
        ];
        $data['getdata'] = $this->userModel->affichemembreData();
        $this->view('affiche_membre', $data);
    }
    public function deletemembre($id) {
        
        $this->userModel->delete($id);
        
        $this->gestionmembre();
    }


  
}