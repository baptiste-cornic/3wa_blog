<?php

require_once(ROOT .'/Model/Database/MysqlDatabaseConnection.php');
require_once(ROOT .'/Model/Article.php');

class ArticleRepository
{

    private ?PDO $dbConnexion;

    public function __construct() {
        $mysqlDbConnexion = new MysqlDatabaseConnetion();
        $this->dbConnexion = $mysqlDbConnexion->connect();
    }

    // refacto en clean code
    public function findAll(): array
    {
        $sql = "SELECT * FROM article";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $articlesDb = $stmt->fetchAll();

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

    public function findLasts(int $nbarticles): array
    {

        $sql = "SELECT * FROM article ORDER BY id DESC LIMIT $nbarticles";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $articlesDb = $stmt->fetchAll();

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

    public function findOne($id) 
    {
        $sql = "SELECT * FROM article WHERE id=?";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute([$id]);
        $articlesDb = $stmt->fetch();
        
        $articleEntity = new Article();
        $articleEntity->setId($articlesDb['id']);
        $articleEntity->setTitle($articlesDb['title']);
        $articleEntity->setStatus($articlesDb['status']);
        $articleEntity->setContent($articlesDb['content']);
        $articleEntity->setCreatedAt(new \DateTime($articlesDb['created_at']));
        
        return $articleEntity;
    }

}
