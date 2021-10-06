<?php

require_once('../Config/config.php');

require_once(ROOT .'/View/create-categoryView.php');
require_once(ROOT . '/Factory/CategoryFactory.php');
require_once(ROOT . '/Model/EntityManager.php');

if(!empty($_POST['title']) && !empty($_POST['color'])){
    $category = new CategoryFactory();
    $category = $category->createCategory($_POST['title'], $_POST['color']);
    $persist = new EntityManager();
    $persist->persistCategory($category);
    header('Location: index.php');
}