<?php

require_once(ROOT . "/Model/Entity/Article.php");
require_once(ROOT . "/Service/CalculateScoreInterface.php");

class PublicationDaysScoreCalculator implements CalculateScoreInterface
{
    public function calculateScore(int $articleScore,Article $article)
    {
        $articleScore = 0;

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
        //var_dump($articleScore);
        return $articleScore;
    }
    
}