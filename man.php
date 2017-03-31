<?php
echo json_encode(['ok' => 'ok']);

die();
$postStr = file_get_contents("php://input");
var_dump($postStr);
$json = json_decode($postStr, true);
var_dump($json);
$postVars = parse_str($postStr);
var_dump($postVars);