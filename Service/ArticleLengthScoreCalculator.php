<?php

require_once(ROOT . "/Model/Entity/Article.php");

class ArticleLengthScoreCalculator
{
    public function lengthScore($article)
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