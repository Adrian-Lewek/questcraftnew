<!DOCTYPE html>
<html>
<head></head>
<body>
<?php 
    $conn = new mysqli('sql11.freesqldatabase.com', 'sql11415253', 'w8V7l128UD', 'sql11415253');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo $row['username'];
  }
}

  ?>
</body>
</html>