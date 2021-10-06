<?php

require_once('DatabaseConnectionInterface.php');

class MysqlDatabaseConnetion implements DatabaseConnectionInterface
{
    public function connect() :?PDO
    {
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $db = '3wa_blog';

        try{
            $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
            $conn->exec("set names utf8");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }
}