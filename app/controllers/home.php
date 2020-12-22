<?php
class home extends Controller {
    public function __construct() {
        $this->userModel = $this->model('gestionmembre');
    }

    public function home() {
        $data = [
            'title' => 'Home page'
        ];
        $dataa = $this->userModel->affichemembreData();
        foreach ( $dataa as $tab){
            $fullname = $tab->first_name.' ben '.$tab->last_name;
            $_SESSION['fullname'] =$fullname ;
            $_SESSION['email'] = $tab->email ;
        }
        $this->view('home', $data);
    }
  
}