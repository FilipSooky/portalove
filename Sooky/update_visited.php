<?php

include_once "db_con.php";
$db = $GLOBALS['db'];

$place = $db->getMostVisited($_GET['id'])[0];
?>

<form method="post" action="update.php">
    Mesto: <br>
    <input type="text" name="city" value="<?php echo $place['city']; ?>"><br>
    Niečo o meste: <br>
    <input type="text" name="about" value="<?php echo $place['about']; ?>"><br>
    Fotka: <br>
    <textarea name="image"><?php echo $place['image']; ?></textarea><br>
    <input type="hidden" name="id" value="<?php echo $place['id']; ?>">
    <br><br>
    <br><br>
    <input type="submit" name="submit" value="Update">
</form>