<?php

require_once('../Config/config.php');

require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT . '/Factory/ArticleFactory.php');
require_once(ROOT .'/Model/Repository/ArticleRepository.php');

$articleFactory = new ArticleRepository();
$articles = $articleFactory->findLasts(4);

require_once(ROOT . '/View/articlesView.php');