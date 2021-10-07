<?php

 interface CalculateScoreInterface
{
    public function calculateScore(int $articleScore, Article $article);
}