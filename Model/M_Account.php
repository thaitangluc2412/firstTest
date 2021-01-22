<?php
include_once("E_Account.php");
class Model_Account
{
    public function __construct()
    {
    }
    public function login($account)
    {
        $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi den CSDL MySQL");
        $db_selected = mysqli_select_db($link, "dulieu");
        $sql = "SELECT * FROM account Where Username='$account->username'and Password='$account->password'";
        $result = mysqli_query($link, $sql);
        return mysqli_num_rows($result);
    }
}
