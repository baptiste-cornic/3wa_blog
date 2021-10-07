<?php

require_once(ROOT . "/Model/Entity/Article.php");
require_once(ROOT . "/Service/ArticleLengthScoreCalculator.php");

class ArticleScoreCalculator
{
    public function calculateScore(Article $article, array $articleScoresCalculators): float
    {
        $articleScore = 0;

        foreach($articleScoresCalculators as $articleScoreCalculator) {
            
            $articleScore += $articleScoreCalculator->calculateScore($articleScore, $article);
            var_dump($articleScore);
        }

        return $articleScore / count($articleScoresCalculators);
    }
     
}
