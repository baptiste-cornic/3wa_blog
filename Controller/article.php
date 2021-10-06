<?php

require_once('../Config/config.php');

require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT . '/Factory/ArticleFactory.php');
require_once(ROOT .'/Model/Repository/ArticleRepository.php');

$id = $_GET['id'];
$articleFactory = new ArticleRepository();
$article = $articleFactory->findOne($id);

require_once(ROOT . '/View/articleView.php');