<?php
include_once "db_con.php";

$db = $GLOBALS['db'];
if(isset($_POST['submit'])) {
    $type = "";
    if ($_POST['trip'] === true){$type="round";}
    else {$type="oneway";}
    $insert = $db->insertTicket(
        $_POST['from'],
        $_POST['to'],
        $_POST['departure'],
        $_POST['return'],
        $type
    );

    if($insert) {
        header('Location: index.php');
    } else {
        echo "FATAL ERROR!!";
    }
}