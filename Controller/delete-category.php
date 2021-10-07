<?php

require_once('../Config/config.php');
require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT .'/Model/Entity/EntityInterface.php');


$id = $_GET['id'];

$category = new EntityManager();
$category->delete($category->getId());

header('Location: index.php');
