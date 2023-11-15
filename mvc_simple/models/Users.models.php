<?php


    class UsersModel{

        static public function mdlListUser($table){

            $stamt = conectionDB::conectar()->prepare("SELECT * FROM $table");
            $stamt->execute();
            $users = $stamt->fetchAll(PDO::FETCH_ASSOC); 

            return $users;
        }
    }