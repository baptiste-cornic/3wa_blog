<?php

require_once(ROOT .'/Model/Entity/Publishable.php');

class Article extends Publishable
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
}