<?php

require_once('../Config/config.php');

require_once(ROOT .'/View/create-userView.php');
require_once(ROOT . '/Factory/UserFactory.php');
require_once(ROOT . '/Model/EntityManager.php');

if(!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']))
{
    $user = new UserFactory();
    $user = $user->createUser($_POST['username'], $_POST['email'], $_POST['password']);
    $persist = new EntityManager();
    $persist->persistUser($user);
    header('Location: index.php');

}