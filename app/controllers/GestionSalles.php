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
                'photo_1' => $_FILES['photo_1'],
                'photo_2' => $_FILES['photo_2'],
                'photo_3' =>$_FILES['photo_3'],
                'photo_4' =>$_FILES['photo_4'],
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
            $pseudoValidation = "/^[a-zA-Z0-9' ]*$/";
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

            $path=IMGROOT."public/img/salle date/".$data['title'];
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            foreach($_FILES as $key => $tab){  
                $fileName =$tab['name'];
                $fileTmpName =$tab['tmp_name'];
                $fileSize =$tab['size'];
                $fileError =$tab['error'];  
                $fileExt = explode('.',$fileName);
                $fileActualExt = strtolower(end($fileExt));
    
                $allowed = array('jpg', 'jpeg' , 'png');
                if(in_array($fileActualExt,$allowed)){
                 if($fileError === 0){
                    if($fileSize < 10000000){
                    $fileNameNew = $key.".".$fileActualExt;
                    $data[$key] = $fileNameNew;
                    $fileDestination =  $path.'/'.$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    }else{
                    $data['photoError'] ="Your file is too big!";
                     }
                   }else{
                   $data['photoError'] = "There was an error uploading your file!";
                   }
                }else{
                   $data['photoError'] = "you cannot upload files of this type!";
                }
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
    $data['country']= $this->userModel->country();
    $data['getdata'] = $this->userModel->afficheData();
    $this->view('gestion_salle', $data);
        
        
    }


    
    public function gotoeditsallepage($id){
        $data=[
            'getdata' => '' 
        ];

        $data['getdata'] = $this->userModel->findsallebyid($id);
        $this->view('editsalle',$data);


    }

    //delete salle
    public function deletesalle($id) {
        $tab = $this->userModel->findsallebyid($id);
        $titre = $tab[0]->titre;
        $path=IMGROOT."public/img/salle date/".$titre;
        $this->deleteDir($path);
        $this->userModel->deletesalle($id);
        $this->gestionsalle();

    }

    public static function deleteDir($dirPath) {
        if (! is_dir($dirPath)) {
            throw new InvalidArgumentException("$dirPath must be a directory");
        }
        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
                unlink($file);
            
        }
        rmdir($dirPath);
    }


    //edit salle 
    public function editsalle($id) {
        

       
        $data = [
            'id_salle'=>$id,
            'title' => '',
            'description' => '',
            'address' => '',
            
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
                'id_salle'=>$id,
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'address' => trim($_POST['address']),
                'city' =>trim($_POST['city']) ,
                'cp' => trim($_POST['cp']),
                'capacity' =>trim($_POST['capacity']) ,
                'category' => trim($_POST['category']),
                'photo_1' => $_FILES['photo_1'],
                'photo_2' => $_FILES['photo_2'],
                'photo_3' =>$_FILES['photo_3'],
                'photo_4' =>$_FILES['photo_4'],
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
            $pseudoValidation = "/^[a-zA-Z0-9' ]*$/";
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


            $path=IMGROOT."public/img/salle date/".$data['title'];
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            foreach($_FILES as $key => $tab){ 
                $fileName =$tab['name'];
                $fileTmpName =$tab['tmp_name'];
                $fileSize =$tab['size'];
                $fileError =$tab['error'];  
                $fileExt = explode('.',$fileName);
                $fileActualExt = strtolower(end($fileExt));
    
                $allowed = array('jpg', 'jpeg' , 'png');
                if(in_array($fileActualExt,$allowed)){
                 if($fileError === 0){
                    if($fileSize < 10000000){
                    $fileNameNew = $key.".".$fileActualExt;
                    $data[$key] = $fileNameNew;
                    $fileDestination =  $path.'/'.$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    }else{
                    $data['photoError'] ="Your file is too big!";
                     }
                   }else{
                   $data['photoError'] = "There was an error uploading your file!";
                   }
                }else{
                   $data['photoError'] = "you cannot upload files of this type!";
                }
            }



            // Make sure that EORREs are empty
            if (empty($data['capacityEORRE']) && empty($data['cpEORRE']) && empty($data['addressEORRE']) && empty($data['cityEORRE']) && empty($data['descriptionEORRE'])  && empty($data['titleEORRE'])  && empty($data['photo_1EORRE']) && empty($data['photo_2EORRE']) && empty($data['photo_3EORRE']) && empty($data['photo_4EORRE'])){

                //Register user from model function
                if ($this->userModel->editsalle($data)) {
                    //Redirect to the login page
                    header('location:' . URLROOT . 'GestionSalles/gestionsalle');
                    
                } else {
                    die('Something went wrong.');
                    
                }
            }
        }
    $data['country']= $this->userModel->country();
    $data['getdata'] = $this->userModel->findsallebyid($id);
    $this->view('editsalle', $data);
        
        
    }

}


        
            
      
    
  