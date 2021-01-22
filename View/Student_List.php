<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Danh sach sinh vien</title>
</head>

<body>
  <form action="../Controller/C_Student.php" method="post">
    <select name="faculty">
      <option> Chon Khoa </option>
      <?php
      echo sizeof($facultyList);
      for ($i = 0; $i < sizeof($facultyList); $i++) {
        echo "<option>" . $facultyList[$i] . "</option>";
      }
      ?>
    </select>
    <button type="submit" name='getFaculty'>xem</button>
  </form>
  <button onclick="location.replace('../View/insert_Student.php')">them moi</button>
  <table border="1" width="100%">
    <caption>DANH SACH SINH VIEN</caption>
    <tr>
      <th> So Thu Tu </th>
      <th> Ho Va Ten </th>
      <th> thao tac </th>
    </tr>
    <?php
    for ($i = 0; $i < sizeof($studentList); $i++) {
      echo "<tr>";
      echo "<td>" . ($i + 1) . "</td>";
      echo "<td><a href='?stid=" . $studentList[$i]->id . "'>" . $studentList[$i]->name . "</a></td>";
      echo "<td><a href='?updateID=" . $studentList[$i]->id . "'>sua</a> / <a href='?deleteID=" . $studentList[$i]->id . "'>xoa</a></td>";
      echo " </tr>";
    }
    echo "</table>";
    ?>
</body>

</html>