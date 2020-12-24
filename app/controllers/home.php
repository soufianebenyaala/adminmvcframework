<?php
class home extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Home_');
    }

    public function home() {
        $data = [
            'title' => 'Home page'
        ];

        //nombre de produit achete
        $produittotal = 0 ;
        for ($i=1 ; $i<13 ;$i++){
            $tabll = $this->userModel->nombre_de_produitParMois($i);
            foreach($tabll as $set){
                $produittotal = $produittotal + count(explode('.',$set->monbreProduitParMois));
            }
        $data["produitparmois".$i] = $produittotal;

        }
        //9adch fel da5lit fil mois
        $montanttotal = 0;
        for ($i=1 ; $i<13 ;$i++){
             $tabl = $this->userModel->montant_de_commandeParMois($i);
             foreach($tabl as $set){
                $montanttotal = $montanttotal + $set->montantCommandeParMois;
            }
        $data["mois".$i] = $montanttotal;
    
        }
        //nombre de commande par mois
        for ($i=1 ; $i<13 ;$i++){
            $data[$i] = $this->userModel->nombre_de_commandeCommandeParMois($i);
        }
        //nombre de membre que sont inscrit dans le site
        $data['nombre_de_membre'] = $this->userModel->nombre_de_membre();
        //nombre de commande total
        $data['nombre_de_commande'] = $this->userModel->nombre_de_commande();
        //nombre de views total
        $tab = $this->userModel->nombre_de_views();
        $total = 0;
        foreach($tab as $set){
            if(isset($set->views)){
                $total = $total + $set->views;
            }
        
        }
        $data['nombre_de_views'] =  $total;
        //affiche data of admin
        $dataa = $this->userModel->affichemembreData();
        foreach ( $dataa as $tab){
            $fullname = $tab->first_name.' ben '.$tab->last_name;
            $_SESSION['fullname'] =$fullname ;
            $_SESSION['email'] = $tab->email ;
        }
        $this->view('home', $data);
    }
  
}