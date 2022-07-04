<?php
$test = 12;
//Receive the RAW post data.
$content = trim(file_get_contents("php://input"));

//Attempt to decode the incoming RAW post data from JSON.
$decoded = json_decode($content, true);
$data = [
  "Name" => "Іван",
  "LastName" => "Копитов"
];
header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);
?>