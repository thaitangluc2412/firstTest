<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <form name="form1" action="../Controller/C_Student.php" method="post">
        <h2>CHEN THONG TIN SINH VIEN</h2>
        <table style=" border: 1px solid">
            <tr>
                <td><p>ID</p></td>
                <td><input type="text" name="ID" value=""></td>
            </tr>
            <tr>
                <td><p>Ho va ten</p></td>
                <td><input type="text" name="Name" value=""></td>
            </tr>
            <tr>
                <td><p>Tuoi</p></td>
                <td><input type="text" name="Age" value=""></td>
            </tr>
            <tr>
                <td><p>Truong</p></td>
                <td><input type="text" name="University" value=""></td>
            </tr>
            <tr>
                <td><p>Khoa</p></td>
                <td><input type="text" name="Faculty" value=""></td>
            </tr>
        </table>
        <br>
        <td><input class="btn" type="submit" name="insert" value="save">
            <input class="btn" type="button" value="Exit" onclick="javascript:history.back()">
        </td>
    </form>
</body>

</html>