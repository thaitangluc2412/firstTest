<?php
include_once("../Model/M_Account.php");
class Ctrl_Account
{
    public function invoke()
    {
        if (isset($_POST['login'])) { // kiem tra dang nhap
            $modelAccount = new Model_Account();
            $account = new Entity_Account($_REQUEST['username'], $_REQUEST['password']);
            if ($modelAccount->login($account)) {
                header("location:../Controller/C_Student.php");
            } else {
                echo "<script> alert('wrong username or password'); </script>";
                include_once("../View/login.html");
            }
        } else { // hien form dang nhap
            include_once("../View/login.html");
        }
    }
}
$C_Account = new Ctrl_Account();
$C_Account->invoke();
