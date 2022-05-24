<?php

include('../controllers/db.php');
require_once __DIR__.'/../../config.php';

$nombre = '';
$apellido = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM tasks_table WHERE id=$id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) >= 1) {
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        
      echo $twig->render('/editUserView.twig', compact('nombre', 'apellido', 'id'));
      }

      if (isset($_POST['update_task'])) {
        $id = $_GET['id'];
        $nombre = $_POST['nombre'];
        $apellido= $_POST['apellido'];
      
        $query = "UPDATE tasks_table set nombre = '$nombre', apellido = '$apellido' WHERE id=$id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Task Updated Successfully';
        $_SESSION['message_type'] = 'warning';

        header('Location: ../pages/homePage.php');
      }

}

?>

