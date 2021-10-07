<?php

require_once(ROOT . "/Model/Entity/Article.php");

class ArticleScoreCalculator
{

    public function calculateScore(Article $article, array $articleScoresCalculators): float
    {
        $articleScore = 0;

        foreach($articleScoresCalculators as $articleScoreCalculator) {
            $articleScore += $articleScoreCalculator;
        }

        return $articleScore / count($articleScoresCalculators);
    }

    /*
    public function calculateScore(Article $article): float
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

        $articleDate = $article->getCreatedAt();
        $dateNow = new \DateTime('NOW');

        $daysSincePublication = $dateNow->diff($articleDate)->format("%a");

        if ($daysSincePublication < 2) {
            $articleScore += 3;
        } elseif ($daysSincePublication < 5 &&
            $daysSincePublication > 2
        ) {
            $articleScore += 2;
        } elseif ($daysSincePublication < 7 &&
            $lengthContent > 5
        ) {
            $articleScore += 1;
        }

        return $articleScore / 2;

    }
    */
    
    
    
}
