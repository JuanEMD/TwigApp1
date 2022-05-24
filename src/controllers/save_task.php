<?php

include('../controllers/db.php');
// require_once __DIR__.'/../../config.php';

if (isset($_POST['save_task'])) {
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];

//   echo $nombre;

  $query = "INSERT INTO tasks_table(nombre, apellido) VALUES ('$nombre', '$apellido')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
      echo "fail";
    die("Query Failed.");
  }

  $_SESSION['username'] = $nombre;
  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';

  header('Location: ../pages/homePage.php');
}
?>

