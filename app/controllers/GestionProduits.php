<?php
class GestionProduits extends Controller {
    public function __construct() {
        $this->userModel = $this->model('gestionproduit');
    }

    public function gestionproduits() {
        $data = [
            'getproduitdata' => '',
            'getsalledata' => '',
            'id_salle' => '',
            'prix' => '',
            'date_depart' => '',
            'date_arrivee' => '',
            'id_salleEORRE' => '',
            'prixEORRE' => '',
            'date_departEORRE' => '',
            'date_arriveeEORRE' => ''

        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'getproduitdata' => '',
                'getsalledata' => '',
                'id_salle' => trim($_POST['id_salle']),
                'prix' => trim($_POST['prix']),
                'date_depart' => trim($_POST['date_depart']),
                'date_arrivee' => trim($_POST['date_arrivee']),
                'prixEORRE' => '',
                'date_departEORRE' => '',
                'date_arriveeEORRE' => ''
    
            ];
            $numbreValidation = "/^[0-9]*$/";

             //Validate prix
             if (empty($data['prix'])) {
                $data['prixEORRE'] = 'Please enter prix.';
            } elseif (!preg_match($numbreValidation, $data['prix'])) {
                $data['prixEORRE'] = 'prix can only contain numbre .';
            }

            //Validate date_depart
             if (empty($data['date_depart'])) {
                $data['date_departEORRE'] = 'Please enter date de depart.';
            } 

            //Validate date_arrivee
             if (empty($data['date_arrivee'])) {
                $data['date_arriveeEORRE'] = "Please enter date d'arrivee.";
            } 


            // Make sure that EORREs are empty
            if (empty($data['prixEORRE']) && empty($data['date_departEORRE']) && empty($data['date_arriveeEORRE'])){

                //Register user from model function
                if ($this->userModel->gestionproduit($data)) {
                    //Redirect to the login page
                    header('location:' . URLROOT . 'GestionProduits/gestionproduits');
                   
                    
                } else {
                    die('Something went wrong.');
                    
                }
            }
        
        }


        $data['getproduitdata'] = $this->userModel->affichesproduitData();
        $data['getsalledata'] = $this->userModel->affichesalleData();
        $this->view('gestion_produit', $data);
    }
  
}