<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'tasks'
) or die(mysqli_erro($mysqli));

?>