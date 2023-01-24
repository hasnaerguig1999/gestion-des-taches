<?php

require_once '../models/admin.model.php';
    class login{
       
        public function login(){

            $email = $_POST['email'];
            $psw = $_POST['password'];


                $result=admin::get_admin($email);
                if(empty($result)){
                    echo '<script>alert("wrong password or email")</script>';
                    
                }else{



                if($result->email===$email && password_verify($psw,$result->password)){
                    session_start();
                    $_SESSION["login"] = true;

                    $_SESSION['id']=$result->user_id; 
                    // die(print_r($_SESSION['id']));

                    header('Location: dashboard.php');

               
            }
            }
        }
        
        public function sign_up() {
            $psw = password_hash($_POST['password'],PASSWORD_DEFAULT);
            // if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
            //     echo '<script>alert("invalid email email")</script>';
    
            //     die();
            //   }
                    $data=array(
    
                        'email'    => $_POST['email'],
                        'user_name'    => $_POST['user_name'],
                        'password' => $psw
                    );
    
                $result=admin::add_user($data);
    
            }
    }
    
    
    
    if(isset($_POST['adduser'])){
        $loginUser = new login();
        $loginUser->login();
    }

    if(isset($_POST['signup'])){
        $admin= new login();
        $admin->sign_up();
        header('Location: login.php');
        
    }