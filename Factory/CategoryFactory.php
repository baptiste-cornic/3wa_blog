<?php

require_once(ROOT . '/Model/Entity/Category.php');

class CategoryFactory
{
    public function createCategory(string $title, string $color)
    {
        $category = new Category();
        $category->setTitle($title);
        $category->setColor($color);
        return $category;
    }

    public function createCategoryFromDb(array $category)
    {
        $categoryEntity = new Category();
        $categoryEntity->setId($category['id']);
        $categoryEntity->setTitle($category['title']);
        $categoryEntity->setStatus($category['status']);
        $categoryEntity->setColor($category['color']);
        $categoryEntity->setCreatedAt(new \DateTime($category['created_at']));
         
        return $categoryEntity;
    }

    public function createCategoriesFromDb(array $categoriesDb)
    {
        $categories = [];

        foreach ($categoriesDb as $category) {
            $categoryEntity = new Category();
            $categoryEntity->setId($category['id']);
            $categoryEntity->setTitle($category['title']);
            $categoryEntity->setStatus($category['status']);
            $categoryEntity->setColor($category['color']);
            $categoryEntity->setCreatedAt(new \DateTime($category['created_at']));
            array_push($categories, $categoryEntity);
        }

        return $categories;
    }

    

}