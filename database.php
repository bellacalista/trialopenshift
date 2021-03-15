<?php
$dbusername = 'root';
$dbpassword = 'mysql';
$dbname = 'sampledb';

$c = new mysqli($dbusername, $dbpassword, $dbname);
if ($c->connect_error) {
  echo "Unable to connect, please try again";
  die();
}
?>
