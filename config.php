<?php
/**
 * using mysqli_connect for database connection
 */

$databaseHost = 'gakken.ckq1o0csslqp.ap-southeast-1.rds.amazonaws.com';
$databaseName = 'welcome';
$databaseUsername = 'gakken';
$databasePassword = 'G4kk3n#AWS';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
?>