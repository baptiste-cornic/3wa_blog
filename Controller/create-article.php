<?php

require_once('../Config/config.php');

require_once(ROOT .'/View/create-articleView.php');
require_once(ROOT . '/Factory/ArticleFactory.php');
require_once(ROOT . '/Model/EntityManager.php');

if(!empty($_POST['title']) && !empty($_POST['content'])){
    $article = new ArticleFactory();
    $article = $article->createArticle($_POST['title'], $_POST['content']);
    $persist = new EntityManager();
    $persist->persistArticle($article);
    header('Location: index.php');
}

