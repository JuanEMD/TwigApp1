<?php

require_once __DIR__.'/../../config.php';

$nombre = '';
$apellido = '';

// echo $registros[3]['nombre'];

echo $twig->render('/addUserView.twig', compact('nombre', 'apellido'));

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

?>