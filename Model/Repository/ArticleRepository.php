<?php

require_once(ROOT .'/Model/Database/MysqlDatabaseConnection.php');
require_once(ROOT .'/Model/Article.php');
require_once(ROOT .'/Factory/ArticleFactory.php');

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

        $articlesFactory = new ArticleFactory();
        $articlesDb = $articlesFactory->createArticlesFromDb($articlesDb);

        return $articlesDb;
    }

    public function findLasts(int $nbarticles): array
    {

        $sql = "SELECT * FROM article ORDER BY id DESC LIMIT $nbarticles";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $articlesDb = $stmt->fetchAll();
        
        $articlesFactory = new ArticleFactory();
        $articlesDb = $articlesFactory->createArticlesFromDb($articlesDb);
        
        return $articlesDb;
    }

    public function findOne($id) 
    {
        $sql = "SELECT * FROM article WHERE id=?";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute([$id]);
        $articleDb = $stmt->fetch();
    
        $articlesFactory = new ArticleFactory();
        $articleDb = $articlesFactory->createArticleFromDb($articleDb);
        
        return $articleDb;
    }

}
