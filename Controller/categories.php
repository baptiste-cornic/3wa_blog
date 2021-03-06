<?php

require_once('../Config/config.php');

require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT . '/Factory/CategoryFactory.php');
require_once(ROOT .'/Model/Repository/CategoryRepository.php');

$categoryFactory = new CategoryRepository();
$categories = $categoryFactory->findLasts(4);

echo $twig->render('categories.html.twig', 
    ['categories' => $categories ]);

