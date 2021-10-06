<?php

require_once(ROOT . '/Model/Article.php');

class ArticleFactory
{
    public function createArticleFromDb(array $article)
    {
        $articleEntity = new Article();
        $articleEntity->setId($article['id']);
        $articleEntity->setTitle($article['title']);
        $articleEntity->setStatus($article['status']);
        $articleEntity->setContent($article['content']);
        $articleEntity->setCreatedAt(new \DateTime($article['created_at']));
         
        return $articleEntity;
    }

    public function createArticlesFromDb(array $articlesDb)
    {
        $articles = [];

        foreach ($articlesDb as $article) {
            $articleEntity = new Article();
            $articleEntity->setId($article['id']);
            $articleEntity->setTitle($article['title']);
            $articleEntity->setStatus($article['status']);
            $articleEntity->setContent($article['content']);
            $articleEntity->setCreatedAt(new \DateTime($article['created_at']));
            array_push($articles, $articleEntity);
        }

        return $articles;
    }

    
}