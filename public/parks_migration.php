<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks_user');

require 'dbconnect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$query = "DROP TABLE IF EXISTS national_parks";

$dbc->exec($query);

$query2 = "CREATE TABLE national_parks (
		id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		name VARCHAR(100) NOT NULL,
		location VARCHAR(240) NOT NULL,
		date_established DATETIME NOT NULL,
		area_in_acres FLOAT NOT NULL,
		PRIMARY KEY(id))";

$dbc->exec($query2);

?>