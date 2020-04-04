<?php

  $dbServername = "localhost";
  $dbUsername = "";
  $dbPassword = "";
  $dbName = "goals";

  $link = mysqli_init();

  $success = mysqli_connect(
    $link,
    $dbServername,
    $dbUsername,
    $dbPassword,
    $dbName
  );

  // Check connection
  if (!$success) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

  
?>