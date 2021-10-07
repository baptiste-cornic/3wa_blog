<?php

require_once(ROOT .'/Model/Entity/Publishable.php');
require_once(ROOT .'/Model/Entity/EntityInterface.php');

class Category extends Publishable implements EntityInterface
{   
    private string $color;

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $getColor) : void
    {
        $this->color = $getColor;
    }    
    
    public function getTableName() :string
    {
        return 'category';
    }
}