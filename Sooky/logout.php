<?php
include_once "db_con.php";

session_destroy();

header('Location: admin.php');