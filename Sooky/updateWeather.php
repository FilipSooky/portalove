<?php
include_once "db_con.php";



$db = $GLOBALS['db'];

if(isset($_POST['submit_weather'])) {
    $update = $db->updateWeather(
        $_POST['id'],
        $_POST['temp_avg'],
        $_POST['temp_one'],
        $_POST['temp_two'],
        $_POST['temp_three'],
        $_POST['temp_four'],
        $_POST['date'],
        $_POST['country'],
        $_POST['weather']
    );

    if($update) {
        header('Location: admin.php');
    } else {
        echo "FATAL ERROR!!";
    }
} else {
    header('Location: admin.php');
}