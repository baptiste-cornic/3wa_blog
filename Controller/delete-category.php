<?php

require_once('../Config/config.php');
require_once(ROOT . '/Model/EntityManager.php');

$id = $_GET['id'];

$article = new EntityManager();
$article->deleteCategory($id);

header('Location: index.php');
