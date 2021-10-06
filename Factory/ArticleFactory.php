<?php

require_once(ROOT . '/Model/Article.php');

class ArticleFactory
{
    public function createArticle(string $title, string $content)
    {
        $article = new Article();
        $article->setTitle($title);
        $article->setContent($content);
        return $article;
    }

    public function createArticles(int $article_number):array
    {
        $articles = [];

        for($i = 1; $i <= $article_number; $i++)
        {
            $articleFactory = new ArticleFactory();
            $article = $articleFactory->createArticle('titre '.$i, 'contenu '.$i);
            array_push($articles, $article);
        }

        return $articles;

        // test git
        
    }

}