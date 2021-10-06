<?php

require_once(ROOT .'/Model/Entity/Publishable.php');

class Category extends Publishable
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
}