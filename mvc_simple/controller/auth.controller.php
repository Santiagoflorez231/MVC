<?php

    class authenticationUsers{
        
        
        static public function register(){
            
            if(isset($_POST["nombre"])){
                $table = "users";
                $data = array(
                    "nombre" => $_POST["nombre"],
                    "email"=> $_POST["email"],
                    "password"=> $_POST["password"],
                );

                $responseModel = ModelsAuth::mdlRegister($table,$data);
                return $responseModel;
            }
        }

        static public function login(){}

    }