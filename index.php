<?php require_once('../_config.php') ?>
<?php include_once('_partials/_header.php') ?>
<?php
  $conn = mysqli_connect("localhost", "root", null, "lesson_03");

  $result = mysqli_query($conn, "SELECT * FROM countries ORDER BY RAND() LIMIT 1");

  $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="./css/styles.css">
    <title>Countries</title>
  </head>

  <body>
    <h1>My favourite country is <?= $row['name'] ?>.</h1>

    <div>
      <a href="./table.php">View all countries...</a>
    </div>
  </body>
</html>
<?php include_once('_partials/_footer.php') ?>-=
