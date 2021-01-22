<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <form name="form1" action="../Controller/C_Student.php?ID=<?php echo $student->id ?>" method="post">
        <h2>CAP NHAT THONG TIN SINH VIEN</h2>
        <table style=" border: 1px solid">
            <tr>
                <td><p>ID</p></td>
                <td><p name="ID"><?php echo $student->id ?></p></td>
            </tr>
            <tr>
                <td><p>Ho va ten</p></td>
                <td><input type="text" name="Name" value="<?php echo $student->name ?>"></td>
            </tr>
            <tr>
                <td><p>Tuoi</p></td>
                <td><input type="text" name="Age" value="<?php echo $student->age ?>"></td>
            </tr>
            <tr>
                <td><p>Truong</p></td>
                <td><input type="text" name="University" value="<?php echo $student->university ?>"></td>
            </tr>
            <tr>
                <td><p>Khoa</p></td>
                <td><input type="text" name="Faculty" value="<?php echo $student->faculty ?>"></td>
            </tr>
        </table>
        <br>
        <td><input type="submit" name="update" value="Update">
            <input type="button" value="Exit" onclick="javascript:history.back()">
        </td>
    </form>
</body>

</html>