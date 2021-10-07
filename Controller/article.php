<?php

require_once('../Config/config.php');

require_once(ROOT .'/Model/Repository/ArticleRepository.php');
require_once(ROOT .'/Service/ArticleScoreCalculator.php');
require_once(ROOT .'/Service/ArticleLengthScoreCalculator.php');
require_once(ROOT .'/Service/PublicationDaysScoreCalculator.php');

$id = $_GET['id'];
$articleFactory = new ArticleRepository();
$article = $articleFactory->findOne($id);

$scoresCalculatorsClasses = [];

$ArticleLengthScoreCalculator = new ArticleLengthScoreCalculator();
$PublicationDaysScoreCalculator = new PublicationDaysScoreCalculator();

$scoresCalculatorsClasses[] = $ArticleLengthScoreCalculator->lengthScore($article);
$scoresCalculatorsClasses[] = $PublicationDaysScoreCalculator->daysScore($article);

$articleScoreCalculator = new ArticleScoreCalculator();
$articleScore = $articleScoreCalculator->calculateScore($article, $scoresCalculatorsClasses);

// ca marche mais la class ArticleScoreCalculator fait tous
/* 
$articleScoreCalculator = new ArticleScoreCalculator();
$calculateScore = $articleScoreCalculator->calculateScore($article);
var_dump($calculateScore);
*/
require_once(ROOT . '/View/articleView.php');