<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

define("ROOT", dirname(dirname(__FILE__).'/'));

require_once(ROOT .'/vendor/autoload.php');

$loader = new \Twig\Loader\FilesystemLoader(ROOT .'/View');
$twig = new \Twig\Environment($loader);
