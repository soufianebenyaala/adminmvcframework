<?php
class GestionSalles extends Controller {
    public function __construct() {
        $this->userModel = $this->model('gestionsalle');
    }

    public function gestionsalle() {
        

       
        $data = [
            'title' => '',
            'description' => '',
            'address' => '',
            'country' => '',
            'city' => '',
            'cp' => '',
            'capacity' => '',
            'category' => '',
            'photo_1' => '',
            'photo_2' => '',
            'photo_3' => '',
            'photo_4' => '',
            'getdata' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'address' => trim($_POST['address']),
                'country' => trim($_POST['country']),
                'city' =>trim($_POST['city']) ,
                'cp' => trim($_POST['cp']),
                'capacity' =>trim($_POST['capacity']) ,
                'category' => trim($_POST['category']),
                'photo_1' => trim($_POST['photo_1']),
                'photo_2' => trim($_POST['photo_2']),
                'photo_3' =>trim($_POST['photo_3']) ,
                'photo_4' => trim($_POST['photo_4']),
                'titleEORRE' => '',
                'descriptionEORRE' => '',
                'countryEORRE' => '',
                'cityEORRE' => '',
                'cpEORRE' => '',
                'capacityEORRE' => '',
                'photo_1EORRE' => '',
                'photo_2EORRE' => '',
                'photo_3EORRE' => '',
                'photo_4EORRE' => '',
                'getdata' => ''
            ];

            $capacityValidation = "/^[0-9]*$/";
            $pseudoValidation = "/^[a-zA-Z0-9]*$/";
            $nameValidation = "/^[a-zA-Z' ]*$/";
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Validate title on letters
            if (empty($data['title'])){ 
                $data['titleEORRE'] = 'Please enter title.';
            } 

             //Validate photo 1 PNG
             if (empty($data['photo_1'])) {
                $data['photo_1EORRE'] = 'Please enter photo.';
            }

             //Validate photo 2 PNG
             if (empty($data['photo_2'])) {
                $data['photo_2EORRE'] = 'Please enter photo.';
            } 

             //Validate photo 3 PNG
             if (empty($data['photo_3'])) {
                $data['photo_3EORRE'] = 'Please enter photo.';
            } 

             //Validate photo 4 PNG
             if (empty($data['photo_4'])) {
                $data['photo_4EORRE'] = 'Please enter photo.';
            }            

             //Validate description on letters
            if (empty($data['description'])) {
                $data['descriptionEORRE'] = 'Please enter last name.';
            } 

             //Validate city on letters
             if (empty($data['city'])) {
                $data['cityEORRE'] = 'Please enter city.';
            }
            
            //Validate country on letters
             if (empty($data['country'])) {
                $data['countryEORRE'] = 'Please enter country.';
            }

            //Validate address on letters
             if (empty($data['address'])) {
                $data['addressEORRE'] = 'Please enter Address.';
            } 

             //Validate cp on letters
             if (empty($data['cp'])) {
                $data['cpEORRE'] = 'Please enter zip code.';
            } elseif (!preg_match($capacityValidation, $data['cp'])) {
                $data['cpEORRE'] = 'Zip code can only contain numbre .';
            }

            
             //Validate capacity on letters
             if (empty($data['capacity'])) {
                $data['capacityEORRE'] = 'Please enter capacity.';
            } elseif (!preg_match($capacityValidation, $data['capacity'])) {
                $data['capacityEORRE'] = 'capacity can only contain numbre .';
            }

            // Make sure that EORREs are empty
            if (empty($data['capacityEORRE']) && empty($data['cpEORRE']) && empty($data['addressEORRE']) && empty($data['cityEORRE']) && empty($data['descriptionEORRE'])  && empty($data['titleEORRE']) && empty($data['photo_1EORRE']) && empty($data['photo_2EORRE']) && empty($data['photo_3EORRE']) && empty($data['photo_4EORRE'])){

                //Register user from model function
                if ($this->userModel->gestionsalle($data)) {
                    //Redirect to the login page
                    header('location:' . URLROOT . 'GestionSalles/gestionsalle');
                    
                } else {
                    die('Something went wrong.');
                    
                }
            }
        }
     $data['getdata'] = $this->userModel->afficheData();
    $this->view('gestion_salle', $data);
        
        
    }

}


        
            
      
    
  