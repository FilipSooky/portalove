<?php
include_once "db_con.php";

$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $login = $db->login($_POST['email'], $_POST['password']);
    if($login) {
        $_SESSION['is_admin'] = true;
    } else {
        $_SESSION['is_admin'] = false;
    }
    header('Location: admin.php');

} else {

    header('Location: admin.php');
}