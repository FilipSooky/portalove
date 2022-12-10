<?php
include_once "db_con.php";

$db = $GLOBALS['db'];

if(isset($_GET['id'])) {
    $delete = $db->deleteWeather($_GET['id']);

    if($delete) {
        header('Location: admin.php');
    } else {
        echo "FATAL ERROR!!";
    }
} else {
    header('Location: admin.php');
}