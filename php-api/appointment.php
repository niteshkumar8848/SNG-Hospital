<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $department = $_POST["department"];

  $sql = "INSERT INTO patients (name, phone, department) VALUES ('$name', '$phone', '$department')";
  
  if (mysqli_query($conn, $sql)) {
    echo json_encode(["success" => true]);
  } else {
    echo json_encode(["success" => false, "message" => mysqli_error($conn)]);
  }
}
?>
