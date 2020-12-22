<?php
class GestionAviss extends Controller {
    public function __construct() {
        $this->userModel = $this->model('gestionavis');
    }

    public function gestionavis() {
        $data = [
            'getdata' => ''
        ];
        $data['getdata'] = $this->userModel->afficheavisData();

        $this->view('gestion_avis', $data);
    }

    public function deleteavis($id){
        
        $this->userModel->deleteavis($id);
        $this->gestionavis();
    }
  
}