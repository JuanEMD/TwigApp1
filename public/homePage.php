<?php

require_once __DIR__.'/../config.php';

$username = $_POST['nombre'];
// $lname = $_POST['apellido'];

echo $twig->render('homeView.twig', compact('username'));

// if(isset($_POST['submitButton'])){
//     submitForm();
// }

// function submitForm() {
    // echo 'helloooo';
    // echo $_POST['nombre'];
    // echo '<br>';
    // echo $_POST['apellido'];

    // global $name, $lname;
    // echo $name, $lname;

    // {{ _SERVER['PHP_SELF'] }}
// };
