<?php 
    function getPdo()
    {
        try 
        {
            $pdo = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root');

        } catch (Exception $e) 
        {
            die('Erreur : '.$e->getMessage());
        }
        return $pdo;
    }


?>