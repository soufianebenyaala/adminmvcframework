<?php
class home extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('User');
    }

    public function home() {
        $data = [
            'title' => 'Home page'
        ];

        $this->view('home', $data);
    }
  
}