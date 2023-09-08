<?php
// load database
$db = new SQLite3("database.sqlite");
$projects = $db->query("SELECT * FROM projects");
