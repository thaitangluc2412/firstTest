<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thong tin chi tiet sinh vien</title>
</head>

<body>
  <h2>Chi tiet sinh vien</h2>
  <?php
  echo "<p>Name: <b>" . $student->name . "</b></p>";
  echo "<p>Age: " . $student->age . "</p>";
  echo "<p>University: " . $student->university . "</p>";
  echo "<p>Faculty: " . $student->faculty . "</p>";
  ?>
  <p><a href="javascript:history.back()">Back</a></p>
</body>

</html>