<?php

require_once(ROOT .'/Model/Database/MysqlDatabaseConnection.php');

class EntityManager
{
    private ?PDO $dbConnection;

    public function __construct() {
        $connect = new MysqlDatabaseConnetion();
        $this->dbConnection = $connect->connect();
    }

    public function persistArticle(Article $article)
    {
        $sql = "INSERT INTO article (title, content, status, created_at)
                VALUES (
                        :title, 
                        :content, 
                        :status,
                        :created_at
                )
        ";
        $req = $this->dbConnection->prepare($sql);
        $req->execute(array(
            "title" => $article->getTitle(),
            "content" => $article->getContent(),
            "status" => $article->getStatus(),
            "created_at" => $article->getCreatedAt()->format('Y-m-d H:i:s')
        ));
    }

    public function deleteArticle($id)
    {
        $sql = 'DELETE FROM article WHERE id = ?';
        $query = $this->dbConnection->prepare($sql);
        $query->execute([$id]);
    }

    public function persistCategory(Category $category)
    {
        $sql = "INSERT INTO category (title, color, status, created_at)
                VALUES (
                        :title, 
                        :color, 
                        :status,
                        :created_at
                )
        ";
        $req = $this->dbConnection->prepare($sql);
        $req->execute(array(
            "title" => $category->getTitle(),
            "created_at" => $category->getCreatedAt()->format('Y-m-d H:i:s'),
            "status" => $category->getStatus(),
            "color" => $category->getColor()
        ));
    }

    public function deleteCategory($id)
    {
        $sql = 'DELETE FROM category WHERE id = ?';
        $query = $this->dbConnection->prepare($sql);
        $query->execute([$id]);
    }

    public function persistUser(User $user)
    {
        $sql = "INSERT INTO user (username, email, password)
                VALUES (
                        :username, 
                        :email, 
                        :password
                )";
        $req = $this->dbConnection->prepare($sql);
        $req->execute(array(
            "username" => $user->getUsername(),
            "email" => $user->getEmail(),
            "password" => $user->getPassword()            
        ));

        // envoir d'un email de confirmation

    }
}
