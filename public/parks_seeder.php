<?PHP

require_once 'parks_login.php';

REQUIRE 'dbconnect.php';

$query = "TRUNCATE national_parks";

$dbc->exec($query);

$query = "INSERT INTO national_parks (name,location,date_established,area_in_acres) VALUES ('Acadia', 'Maine', '1919-02-26', 47389.67)";
$numRows = $dbc->exec($query);
echo "Inserted $numRows row." . PHP_EOL;

$national_parks = [
	['name' => 'American Samoa', 'location' => 'American Somoa', 'date_established' => '1988-10-31', 'area_in_acres' => 9000 ],
	['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1929-04-12', 'area_in_acres' => 76518.98 ],
	['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => 242755.94],
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => 801163.21 ],
	['name' => 'Biscayne', 'location' => 'Florida', 'date_established' => '1980-06-28', 'area_in_acres' => 172924.07 ],
	['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' => '1999-10-21', 'area_in_acres' => 32950.03 ],
	['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' => '1928-02-25', 'area_in_acres' => 35835.08 ],
	['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' => '1964-09-12', 'area_in_acres' => 337597.83 ],
	['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' => '1971-12-18', 'area_in_acres' => 241904.26 ]
];

foreach ($national_parks as $national_park) {
	$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$national_park['name']}', '{$national_park['location']}', '{$national_park['date_established']}', '{$national_park['area_in_acres']}')";

	$dbc->exec($query);

	echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}	
?>