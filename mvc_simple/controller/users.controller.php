<?php



    class UsersController{

        static public function ctlListUsers(){
            return UsersModel::mdlListUser("users");
        }
    }