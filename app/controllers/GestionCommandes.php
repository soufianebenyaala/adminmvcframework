<?php
class GestionCommandes extends Controller {
    public function __construct() {
       $this->userModel = $this->model('gestioncommande');
    }

    public function gestioncommande() {
        $data = [
            'getdata' => '',
        ];

        $data['getdata'] = $this->userModel->afficheDataCommande();
        $this->view('gestion_commande', $data);
    }


  
}