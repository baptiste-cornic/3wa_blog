<?php

require_once('../Config/config.php');

require_once(ROOT . '/Model/EntityManager.php');
require_once(ROOT . '/Factory/CategoryFactory.php');
require_once(ROOT .'/Model/Repository/CategoryRepository.php');

$id = $_GET['id'];
$categoryFactory = new CategoryRepository();
$category = $categoryFactory->findOne($id);

require_once(ROOT . '/View/categoryView.php');