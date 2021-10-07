<?php

require_once(ROOT . '/Model/Entity/User.php');

class UserFactory
{ 
    // a modifier
    public function createUser(string $username, string $email, string $password)
    {
        $options = ['cost' => 12,];
        $passwordHash = password_hash($password, PASSWORD_BCRYPT, $options);

        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPassword($passwordHash);
        return $user;
    }

    public function createUserFromDb(array $user)
    {
        $userEntity = new User();
        $userEntity->setUsername($user['username']);
        $userEntity->setEmail($user['email']);  
        $userEntity->setPassword($user['password']);

        return $userEntity;
    }
}