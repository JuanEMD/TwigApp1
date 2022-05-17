<?php

require_once __DIR__.'/../config.php';

$people = [
    'Juan',
    'Juan',
    'Juan',
    'Juan',
];

echo $twig->render('view3.twig', compact('people'));