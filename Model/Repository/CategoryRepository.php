<?php

require_once(ROOT .'/Model/Database/MysqlDatabaseConnection.php');
require_once(ROOT .'/Model/Entity/Category.php');
require_once(ROOT .'/Factory/CategoryFactory.php');

class CategoryRepository
{
    private ?PDO $dbConnexion;

    public function __construct() {
        $mysqlDbConnexion = new MysqlDatabaseConnetion();
        $this->dbConnexion = $mysqlDbConnexion->connect();
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM category";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $categoriesDb = $stmt->fetchAll();

        $categoriesFactory = new CategoryFactory();
        $categoriesDb = $categoriesFactory->createCategoriesFromDb($categoriesDb);

        return $categoriesDb;
    }

    public function findLasts(int $nbcategories): array
    {

        $sql = "SELECT * FROM category ORDER BY id DESC LIMIT $nbcategories";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $categoriesDb = $stmt->fetchAll();
        
        $categoriesFactory = new CategoryFactory();
        $categoriesDb = $categoriesFactory->createCategoriesFromDb($categoriesDb);
        
        return $categoriesDb;
    }

    public function findOne($id) 
    {
        $sql = "SELECT * FROM category WHERE id=?";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute([$id]);
        $categoryDb = $stmt->fetch();
    
        $categoriesFactory = new CategoryFactory();
        $categoryDb = $categoriesFactory->createCategoryFromDb($categoryDb);
        
        return $categoryDb;
    }

}
