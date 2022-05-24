
<?php

include ("../controllers/db.php");
require_once __DIR__.'/../../config.php';

$query = "SELECT * FROM tasks_table";
$result_tasks = mysqli_query($conn, $query);   

$registros = array();

while($row = mysqli_fetch_assoc($result_tasks)){
    $registros[] = $row;
}

// echo $registros[3]['nombre'];

echo $twig->render('/homeView.twig', compact('registros'));

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