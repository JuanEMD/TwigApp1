<?php

require_once __DIR__ . '/../../config.php';

//Load variables

// $loader = new \Twig\Loader\ArrayLoader([
//     'index' => 'Oh, {{ name }}, {{ saludo }}!',
// ]);

// $twig = new \Twig\Environment($loader);

// echo $twig->render('index', ['name' => 'Juan', 'saludo' => 'Hola']);

//OR

// $params = [
//     'name' => 'Fabien',
//     'saludo' => 'Bienvenido',
// ];

// echo $twig->render('index', $params);

///////////////////////////

// $name = 'Juan';
// $saludo = 'Hola';

// echo $twig->render('index', compact('saludo', 'name'));

/////////////////////////////


//Load files

// $loader = new \Twig\Loader\FilesystemLoader('./views');

// $twig = new \Twig\Environment($loader);

//Print view

// echo $twig->render('vista1.twig');


//Print variables in the views

// $name = 'Juan';
// $saludo = 'Hola';

// echo $twig->render('vista1.twig', compact('saludo', 'name'));

//print object in view
//Conditions

//Determina si el sitio esta online o en mantenimiento.

$online = true;

$user = [
    'name' => 'juan',
    'lastname' => 'marmolejos',
    'age' => 21,
    'company-name' => 'Bitbox',
    'email' => 'jmarmolejos@gmail.com',
];

echo $twig->render('/view1.twig', compact('user', 'online'));


