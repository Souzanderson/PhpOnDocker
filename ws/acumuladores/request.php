<?php
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
require("../../autoload.php");
//
$json = utf8_encode(file_get_contents('php://input'));
$param = json_decode($json);
//

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $data = query("SELECT * FROM acumuladores");
    echo json_encode($data);
}
//
exit();
