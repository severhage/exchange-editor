<?php

$serverName = "localhost";
$dBUsername = "exchangeeditor";
$dBPassword = "helloworld";
$dBName = "eeditor";

$conn mysqli_connect($serverName, $dBUsername, $dBPassword,$dBName);

if (!$conn) {
  die("Verbinding met database mislukt: " . mysqli_connect_error());
}