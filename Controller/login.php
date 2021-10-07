<?php

require_once('../Config/config.php');

require_once(ROOT . '/Factory/UserFactory.php');
require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT . '/Model/Repository/UserRepository.php');

$message = "";

if(!empty($_POST['username']) && !empty($_POST['password']))
{
    $userFactory = new UserRepository();
    $user = $userFactory->findByUsername($_POST['username']);
    
    $message = "identifiants invalides";
// m'emmerde si jamais le username existe pas donc je fais un header location dans le repository
    if($user){
        if(password_verify($_POST['password'], $user->getPassword())){
            $message = "bien joué";
        }
    } 

}

require_once(ROOT . '/View/loginView.php');