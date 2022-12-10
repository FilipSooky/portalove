<form method="post" action="insert.php">
    Priemerná teplota: <br>
    <input name="temp_avg" type="text"><br>
    6AM: <br>
    <input name="temp_one" type="text"><br>
    12PM: <br>
    <input name="temp_two" type="text"><br>
    6PM: <br>
    <input name="temp_three" type="text"><br>
    12AM: <br>
    <input name="temp_four" type="text"><br>
    Dátum (vo formáte rrrr-mm-dd): <br>
    <input name="date" type="text"><br>
    Krajina: <br>
    <input name="country" type="text"><br>

    <select name="weather">
        <option>sunny</option>
        <option>rainy</option>
        <option>cloudy</option>
    </select>
    <br><br>
    <input type="submit" name="submit_weather" value="Vložiť">
</form>
