<?php

include_once "db_con.php";
$db = $GLOBALS['db'];

$weather = $db->getWeatherItem($_GET['id'])[0];
?>

<form method="post" action="updateWeather.php">
    <input name="id" type="hidden" value="<?php echo $weather['id']; ?>">
    Priemerná teplota: <br>
    <input name="temp_avg" type="text" value="<?php echo $weather['temp_avg']; ?>"><br>
    6AM: <br>
    <input name="temp_one" type="text" value="<?php echo $weather['temp_one']; ?>"><br>
    12PM: <br>
    <input name="temp_two" type="text" value="<?php echo $weather['temp_two']; ?>"><br>
    6PM: <br>
    <input name="temp_three" type="text" value="<?php echo $weather['temp_three']; ?>"><br>
    12AM: <br>
    <input name="temp_four" type="text" value="<?php echo $weather['temp_four']; ?>"><br>
    Dátum (vo formáte rrrr-mm-dd): <br>
    <input name="date" type="text" value="<?php echo $weather['date']; ?>"><br>
    Krajina: <br>
    <input name="country" type="text" value="<?php echo $weather['country']; ?>"><br>

    <select name="weather">
        <?php
        if ($weather['weather'] === "sunny"){
            echo '<option selected>sunny</option>';
        }
        else{
            echo'<option>sunny</option>';
        }
        if ($weather['weather'] === "rainy"){
            echo '<option selected>rainy</option>';
        }
        else{
            echo'<option>rainy</option>';
        }
        if ($weather['weather'] === "cloudy"){
            echo '<option selected>cloudy</option>';
        }
        else{
            echo'<option>cloudy</option>';
        }

        ?>
    </select>
    <br><br>
    <input type="submit" name="submit_weather" value="Upraviť">
</form>
