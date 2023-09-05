<?php
// load database
$db = new SQLite3("data.sqlite");


$projects = $db->prepare("SELECT * FROM projects");
$projects->execute();
