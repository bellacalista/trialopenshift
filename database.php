<?php
$dbusername = 'root';
$dbpassword = 'mysql';
$dbname = 'toko_roti';

$c = new mysqli($dbusername, $dbpassword, $dbname);
if ($c->connect_error) {
  echo "Unable to connect, please try again";
  die();
}
?>
