<?php
include_once "db_con.php";

$db = $GLOBALS['db'];

if(
    isset($_SESSION['is_admin']) && $_SESSION['is_admin'] === true) {
    $places = $db->getMost_visited();
    $weatherItems = $db->getWeatherItems();
    echo '
    <a href="insert_weather.php">Pridaj predpoveď počasia</a><br><br>
    <br><br><br>
    
    <ul>
    ';

    foreach ($weatherItems as $item){
        echo '
        <li>
            '.$item['country'].'  '.$item['date'].'
            <br><a href="delete_weather.php?id='.$item['id'].'">Delete</a> 
            <br><a href="update_weather.php?id='.$item['id'].'">Update</a>
        </li>
        ';
    }

    echo '
    </ul>
    ---------------------------------------------------------------
    <ul>
    ';

    foreach ($places as $place){
        echo '
            <li>
            '.$place['city'].': '.$place['about'].'
            <br><a href="delete.php?id='.$place['id'].'">Delete</a> 
            <br><a href="update_visited.php?id='.$place['id'].'">Update</a> 
            </li>
        ';
    }

    echo'
        </ul>
        <br><br><br>
        <a href="logout.php">ODHLÁSIŤ SA</a>';
} else {
    ?>
    <form method="post" action="login.php">
        E-mail: <br>
        <input name="email" type="text" placeholder="email"><br>
        Password: <br>
        <input name="password" type="password"><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <?php
}
?>