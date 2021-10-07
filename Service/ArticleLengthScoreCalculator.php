<?php

require_once(ROOT . "/Model/Entity/Article.php");
require_once(ROOT . "/Service/CalculateScoreInterface.php");

class ArticleLengthScoreCalculator implements CalculateScoreInterface
{
    public function calculateScore(int $articleScore, Article $article)
    {
        $articleScore = 0;
        
        $lengthContent = strlen($article->getContent());

        if ($lengthContent > 50) {
            $articleScore += 3;
        } elseif ($lengthContent < 50 &&
            $lengthContent > 30
        ) {
            $articleScore += 2;
        } elseif ($lengthContent < 30 &&
            $lengthContent > 10
        ) {
            $articleScore += 1;
        }
        return $articleScore;
    }
    
}