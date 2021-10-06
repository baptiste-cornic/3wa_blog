<?php

require_once('../Config/config.php');
require_once(ROOT . '/Model/EntityManager.php');

$id = $_GET['id'];

$article = new EntityManager();
$article->deleteArticle($id);

header('Location: index.php');
