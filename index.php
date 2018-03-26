<?php
$dbhost = getenv("DB_HOST");
$dbport = getenv("DB_PORT");
$dbuser = getenv("DB_USER");
$dbpwd = getenv("DB_PASSWORD");
$dbname = getenv("DB_NAME");
$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("<br><h2>Mysql backing service secrets missing...</h2><br>");
    printf("<br><h2>Connect failed.<br><h2> %s\n", $mysqli->connect_error);
    exit();
}
echo "<br><h2>Mysql backing services provisioned via service broker is available...</h2><br>";
$connection->close();
?>
