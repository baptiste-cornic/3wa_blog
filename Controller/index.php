<?php

require_once('../Config/config.php');

require_once(ROOT .'/Model/Repository/ArticleRepository.php');
require_once(ROOT .'/Model/Repository/CategoryRepository.php');

$articleFactory = new ArticleRepository();
$articles = $articleFactory->findAll();

$categoryFactory = new CategoryRepository();
$categories = $categoryFactory->findAll();

echo $twig->render('home.html.twig', 
    ['categories' => $categories,
     'articles' => $articles
    ]);

//require_once(ROOT . '/View/homeView.php');
