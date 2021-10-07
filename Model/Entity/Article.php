<?php

require_once(ROOT .'/Model/Entity/Publishable.php');
require_once(ROOT .'/Model/Entity/EntityInterface.php');

class Article extends Publishable implements EntityInterface
{
    private string $content;
    

    public function getContent() : string
    {
        return $this->content;
    }

    public function setContent(string $content) : void
    {
        $this->content = $content;
    }

    public function getTableName() :string
    {
        return 'article';
    }
}