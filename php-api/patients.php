<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,POST,OPTIONS');


require_once 'db.php';


$payload = json_decode(file_get_contents('php://input'), true) ?? [];
$action = $payload['action'] ?? $_GET['action'] ?? 'list';


if($action === 'create'){
$p = $payload['patient'] ?? [];
if(empty($p['name']) || empty($p['phone'])){
echo json_encode(['success'=>false,'error'=>'missing_fields']); exit;
}
$stmt = $pdo->prepare('INSERT INTO patients (name, phone, department, created_at) VALUES (:name,:phone,:dep,NOW())');
$stmt->execute([':name'=>$p['name'], ':phone'=>$p['phone'], ':dep'=>$p['department']]);
echo json_encode(['success'=>true,'id'=>$pdo->lastInsertId()]);
exit;
}


// default: list
$stmt = $pdo->query('SELECT id,name,phone,department,created_at FROM patients ORDER BY id DESC LIMIT 50');
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode(['success'=>true,'data'=>$rows]);