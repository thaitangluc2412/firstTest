<?php
include_once("../Model/M_Student.php");
class Ctrl_Student
{
    public function invoke()
    {
        if (isset($_GET['stid'])) { // lay thong tin sinh vien
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['stid']);
            include_once("../View/Student_Detail.php");
        } elseif (isset($_POST['getFaculty'])) { // lay danh sach khoa
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getStudentByFaculty($_REQUEST['faculty']);
            $facultyList = $modelStudent->getFacultyList();
            include_once("../View/Student_List.php");
        } elseif (isset($_GET['deleteID'])) { // xoa sinh vien
            $modelStudent = new Model_Student();
            $modelStudent->deleteStudent($_GET['deleteID']);
            header("location:../Controller/C_Student.php");
        } elseif (isset($_GET['updateID'])) { // lay thong tin sinh vien can update
            $modelStudent = new Model_Student();
            $student = $modelStudent->getStudentDetail($_GET['updateID']);
            include_once("../View/Update_Student.php");
        } elseif (isset($_POST['update'])) { // cap nhat sinh vien
            $modelStudent = new Model_Student();
            $student = new Entity_Student($_GET['ID'], $_REQUEST['Name'], $_REQUEST['Age'], $_REQUEST['University'], $_REQUEST['Faculty']);
            $modelStudent->updateStudent($student);
            header("location:../Controller/C_Student.php");
        } elseif (isset($_POST['insert'])) { // chen sinh vien
            $modelStudent = new Model_Student();
            $student = new Entity_Student($_REQUEST['ID'], $_REQUEST['Name'], $_REQUEST['Age'], $_REQUEST['University'], $_REQUEST['Faculty']);
            $modelStudent->insertStudent($student);
            header("location:../Controller/C_Student.php");
        } else { // lay danh sach tat ca sinh vien 
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            $facultyList = $modelStudent->getFacultyList();
            include_once("../View/Student_List.php");
        }
    }
}
$C_Student = new Ctrl_Student();
$C_Student->invoke();
