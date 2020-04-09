<?php

  if (file_exists(dirname(__FILE__) . '/.env.php')) {
    require_once('_utilities/.env.php');
  }
    
  function connect () {
    $conn = mysqli_connect(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASS'), getenv('DB'));
    if (mysqli_connect_error($conn)) {
      echo "Connecting: " . mysqli_connect_error();
      return false;
    } else {
      return $conn;
    }
  }
?>