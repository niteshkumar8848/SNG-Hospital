<?php
$conn = mysqli_connect("localhost", "root", "", "sng_hospital");

if (!$conn) {
  die(json_encode(["success" => false, "message" => "Database connection failed."]));
}
?>
