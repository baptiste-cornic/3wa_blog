<?php

abstract class Publishable
{
    public const STATUS_DRAFT = 'draft';
    public const STATUS_ARCHIVED = 'archived';
    public const STATUS_PUBLISHED = 'published';

    private int $id;
    private string $title; 
    private \DateTime $createdAt;
    private string $status;

    public function __construct()
    {
        $this->createdAt = new \DateTime('Now');
        $this->status = self::STATUS_DRAFT;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id) : void
    {
        $this->id = $id;
    }


    public function getTitle() : string
    {
        return $this->title;
    }

    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }


    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $getCreatedAt) : void
    {
        $this->createdAt = $getCreatedAt;
    }


    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $getStatus) : void
    {
        $this->status = $getStatus;
    }
}