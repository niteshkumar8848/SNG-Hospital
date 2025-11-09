<?php
// simple endpoint to return doctors
header('Content-Type: application/json');
$doctors = [
['id'=>1,'name'=>'Dr. R. Sharma','spec'=>'Cardiology'],
['id'=>2,'name'=>'Dr. Meera Patel','spec'=>'Orthopedics']
];
echo json_encode(['success'=>true,'data'=>$doctors]);