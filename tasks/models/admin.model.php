<?php
    require_once '../database/db_connection.php';
    class admin{
        
        static public function get_admin($data){
            $email=$data;
            
                $db=Database::connect()->prepare("SELECT * FROM tb_user WHERE email = :email");
                $db->bindParam(':email',$email);
        $db->execute();
        
        $a=$db->fetch(PDO::FETCH_OBJ);
        // die(print_r($a));
        return $a;
            

        }
        static public function add_user($data){
            $db=Database::connect()->prepare('INSERT INTO tb_user(  email, password,user_name)
                                            VALUES( :email, :password ,:name)');
        
                $db->bindParam( ':email',$data['email']);
                $db->bindParam( ':password',$data['password']);
                $db->bindParam( ':name',$data['user_name']);
        
        
        
                    $db->execute();
                    $db = NULL;
                    
        
        
        }
    }


    