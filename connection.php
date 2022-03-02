<?php
// conection with mysql database
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DEFAULT_DB_NAME", "facebookapi");

$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD , DEFAULT_DB_NAME);

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>