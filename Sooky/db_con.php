<?php
include_once "db.php";

use portalove\db;

$db = new DB("localhost", "portal", "root", "", 3308);

global $db;

session_start();