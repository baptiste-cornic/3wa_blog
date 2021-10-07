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
$scoresCalculatorsClasses[] = new ArticleLengthScoreCalculator();
$scoresCalculatorsClasses[] = new PublicationDaysScoreCalculator();

$articleScoreCalculator = new ArticleScoreCalculator();
$articleScore = $articleScoreCalculator->calculateScore($article, $scoresCalculatorsClasses);

require_once(ROOT . '/View/articleView.php');