<?php

require_once 'cURL.php';
require_once 'api.php';

$idClient = $_GET['id'];
$token = getTokenAPI()['datas']['token'];
$url = "https://evaluation-technique.lundimatin.biz/api/clients/$idClient";
$response = appel_cURLPOST($url, $token);

echo json_encode($response, true);