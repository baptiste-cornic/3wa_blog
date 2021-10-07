<?php

require_once(ROOT .'/Model/Database/MysqlDatabaseConnection.php');

class UserRepository
{
    private ?PDO $dbConnexion;

    public function __construct() {
        $mysqlDbConnexion = new MysqlDatabaseConnetion();
        $this->dbConnexion = $mysqlDbConnexion->connect();
    }

    public function findByUsername(string $username) 
    {
        $sql = "SELECT * FROM user WHERE username=?";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute([$username]);
        $user = $stmt->fetch();
// si user est vide car mauavais username
        if(empty($user))
        {
            header('Location: login.php');
        }
 
        $userFactory = new UserFactory();
        $user = $userFactory->createUserFromDb($user);
       
        return $user;        
    }

}
