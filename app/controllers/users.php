<?php
class users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }


    
    
    public function login() {
        
        $data = [
            'title' => 'Login page',
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '',
            ];
            //Validate username
            if (empty($data['email'])) {
                $data['emailError'] = 'Please enter a email.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'Please enter a password.';
            }

            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    $this->createUserSession($loggedInUser);
                } else {
                    $data['passwordError'] = 'Password or email is incorrect. Please try again.';

                    $this->view('login', $data);
                }
            }

        } else {
            $data = [
                'email' => '',
                'password' => '',
                'emailError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('login', $data);
    }
    public function createUserSession($user) {
        $_SESSION['user_id'] = $user->id_admin;
        $_SESSION['user_first_name'] = $user->first_name;
        $_SESSION['user_last_name'] = $user->last_name;
        $_SESSION['email'] = $user->email;
        //$this->view('home');
        header('location:' . URLROOT . 'home/home');
        exit;
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_first_name']);
        unset($_SESSION['user_last_name']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . 'users/login');
    }

}

?>