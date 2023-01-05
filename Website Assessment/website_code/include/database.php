<?php
//My online site
// define("DB_SERVER", "localhost");
// define("DB_USERNAME", "sammodig_sammo");
// define("DB_PASSWORD", "j}mM19Eg.)Js");
// define("DB_NAME", "sammodig_database");

//Local host
define("DB_SERVER", "127.0.0.1");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "course");

$mySQLI = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mySQLI === false) {
    die("ERROR: COULD NOT CONNECT" . $mySQLI->connect_error);
}
?>