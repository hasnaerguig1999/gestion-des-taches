<?php

class Database
{
    static public function  connect(){
        $db_name = 'tasks';
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
        $db = new PDO('mysql:host=localhost;dbname='.$db_name.';charset=utf8', 'root', '', $options);
        return $db;
    }
}