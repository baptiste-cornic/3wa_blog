<?php

 interface CalculateScoreInterface
{
    public function calculateScore($articleScore, $articleScoresCalculators);
}