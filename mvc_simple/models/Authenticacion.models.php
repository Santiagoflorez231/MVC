<?php


    class ModelsAuth{

            static public function mdlRegister($table, $data){

                $passwordEncript = password_hash($data["password"], PASSWORD_DEFAULT);

                $stamt = conectionDB::conectar()->prepare("INSERT INTO $table(name, email, password) VALUES (:name, :email, :password)");
                $stamt->bindParam(":name", $data['nombre'], PDO::PARAM_STR);
                $stamt->bindParam(":email", $data['email'], PDO::PARAM_STR);
                $stamt->bindParam(":password", $passwordEncript, PDO::PARAM_STR);

                if($stamt->execute()){
                    return true;
                }else{
                    return conectionDB::conectar()->errorInfo();
                }

                $stamt = "";
            }
    }