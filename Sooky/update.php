<?php
include_once "db_con.php";



$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $update = $db->updateVisited(
        $_POST['id'],
        $_POST['city'],
        $_POST['about'],
        $_POST['image']
    );

    if($update) {
        header('Location: admin.php');
    } else {
        echo "FATAL ERROR!!";
    }
} else {
    header('Location: admin.php');
}