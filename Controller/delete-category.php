<?php

require_once('../Config/config.php');
require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT .'/Model/Entity/EntityInterface.php');
require_once(ROOT .'/Model/Repository/CategoryRepository.php');


$id = $_GET['id'];

$entityManager = new EntityManager();
$repository = new CategoryRepository();
$category = $repository->findOne($id);
$entityManager->delete($category);

header('Location: index.php');
