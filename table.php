
<?php
  $conn = mysqli_connect("localhost", "root", null, "lesson_03");

  $result = mysqli_query($conn, "SELECT * FROM countries");

  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
  <head>
    <link rel="stylesheet" href="./css/styles.css">
    <title>Countries</title>
  </head>

  <body>
    <div>
      <a href="./index.php">Back to home...</a>
    </div>
    <table>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Product Price</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        <?php
          foreach ($rows as $row) {
            // HINT: Wrap the lines below with the foreach block
            echo "<tr>";
            echo "<td>{$row['name']}</td>";
            echo "<td>{$row['price']}</td>";
            echo "<td>";
            echo "<a href='./edit.php?id={$row['id']}'>edit</a>";
            echo "|";
            echo "<a href='./delete.php?id={$row['id']}'>delete</a>";
            echo "</td>";
            echo "</tr>";
          }
        ?>
      </tbody>
    </table>
  </body>
</html>