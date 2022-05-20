<?php

require_once __DIR__.'/../config.php';

$online = true;

$user = [
    'name' => 'juan',
    'lastname' => 'marmolejos',
    'age' => 21,
    'company-name' => 'Bitbox',
    'email' => 'jmarmolejos@gmail.com',
];

echo $twig->render('view2.twig', compact('online', 'user'));