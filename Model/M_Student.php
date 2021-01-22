<?php
include_once("E_Student.php");
class Model_Student
{
    public function __construct()
    {
    }
    public function getAllStudent()
    {
        $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi den CSDL MySQL");
        $db_selected = mysqli_select_db($link, "dulieu");
        $sql = "SELECT * FROM sinhvien";
        $result = mysqli_query($link, $sql);
        $studentArray = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($studentArray, new Entity_Student($row['ID'], $row['Name'], $row['Age'], $row['University'], $row['Faculty']));
        }
        mysqli_free_result($result);
        mysqli_close($link);
        return $studentArray;
    }
    public function getStudentDetail($stid)
    {
        $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi den CSDL MySQL");
        $db_selected = mysqli_select_db($link, "dulieu");
        $sql = "SELECT * FROM sinhvien WHERE ID='$stid'";
        $result = mysqli_query($link, $sql);
        $rs = mysqli_fetch_array($result);
        mysqli_free_result($result);
        mysqli_close($link);
        return new Entity_Student($rs['ID'], $rs['Name'], $rs['Age'], $rs['University'], $rs['Faculty']);
    }
    public function getFacultyList()
    {
        $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi den CSDL MySQL");
        $db_selected = mysqli_select_db($link, "dulieu");
        $sql = "SELECT Faculty FROM sinhvien GROUP BY Faculty";
        $result = mysqli_query($link, $sql);
        $facultyArray = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($facultyArray, $row['Faculty']);
        }
        mysqli_free_result($result);
        mysqli_close($link);
        return $facultyArray;
    }
    public function getStudentByFaculty($faculty)
    {
        $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi den CSDL MySQL");
        $db_selected = mysqli_select_db($link, "dulieu");
        $sql = "SELECT * FROM sinhvien WHERE Faculty='$faculty'";
        $result = mysqli_query($link, $sql);
        $studentArray = array();
        while ($row = mysqli_fetch_array($result)) {
            array_push($studentArray, new Entity_Student($row['ID'], $row['Name'], $row['Age'], $row['University'], $row['Faculty']));
        }
        mysqli_free_result($result);
        mysqli_close($link);
        return $studentArray;
    }
    public function updateStudent($student)
    {
        $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi den CSDL MySQL");
        $db_selected = mysqli_select_db($link, "dulieu");
        $sql = "UPDATE sinhvien SET Name='$student->name',Age='$student->age',University='$student->university', Faculty='$student->faculty' WHERE ID='$student->id'";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }
    public function deleteStudent($id)
    {
        $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi den CSDL MySQL");
        $db_selected = mysqli_select_db($link, "dulieu");
        $sql = "DELETE FROM sinhvien WHERE ID='$id'";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }
    public function insertStudent($student)
    {
        $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi den CSDL MySQL");
        $db_selected = mysqli_select_db($link, "dulieu");
        $sql = "INSERT INTO sinhvien (ID,Name,Age,University,Faculty) VALUES ('$student->id','$student->name','$student->age','$student->university', '$student->faculty')";
        $result = mysqli_query($link, $sql);
        mysqli_close($link);
    }
}
