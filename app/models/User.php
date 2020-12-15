<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

 
    public function login($email, $password) {
        $this->db->query('SELECT * FROM admin WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);
        

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            
            return $row;
        } else {
            return false;
        }
    }
    



    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM admin WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }






        //Find user by email. Email is passed in by the Controller.
        public function findUserByEmailAndReturnUserData($email) {
            //Prepared statement
            $this->db->query('SELECT * FROM admin WHERE email = :email');
            
            //Email param will be binded with the email variable
            $this->db->bind(':email', $email);
            
                $res=$this->db->resultSet();
                
                return $res;

            }
                

}
