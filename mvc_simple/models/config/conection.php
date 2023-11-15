<?php

class conectionDB
{
    static public function conectar()
    {
        $link = new PDO("mysql:host=localhost;dbname=simple", "root", "");
        $link->exec("set names utf8");

        return $link;
    }
}

