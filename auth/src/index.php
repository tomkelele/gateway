<?php

header('Content-type:application/json;charset=utf-8');
http_response_code(500);
$data = [];
if (array_key_exists('Authorization', getallheaders())) {
    $data = ["Authorization" => getallheaders()['Authorization']];
}
echo json_encode([
    'code' => 200,
    'data' => $data,
]);
