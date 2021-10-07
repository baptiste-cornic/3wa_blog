<?php

require_once('../Config/config.php');
require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT .'/Model/Entity/EntityInterface.php');
require_once(ROOT .'/Model/Repository/ArticleRepository.php');

$id = $_GET['id'];

$entityManager = new EntityManager();
$repository = new ArticleRepository();
$article = $repository->findOne($id);
$entityManager->delete($article);

header('Location: index.php');
