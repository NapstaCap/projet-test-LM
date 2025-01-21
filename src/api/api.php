<?php

require_once "cURL.php";

$token = getTokenAPI()['datas']['token'];
function getTokenAPI() {
    $url = "https://evaluation-technique.lundimatin.biz/api/auth";
    $response = appel_cURLPOSTAUTH($url);

    return json_decode($response, true);
}

function getClients(string $token){
    $url = "https://evaluation-technique.lundimatin.biz/api/clients";
    $response = appel_cURLGET($url, $token);
    
    return json_decode($response, true);
}

function getTabClients(array $datas, string $token) {
    $tabClients = array();
    foreach ($datas as $data) {
        $id = $data['id'];
        $url = "https://evaluation-technique.lundimatin.biz/api/clients/$id";
        $response = appel_cURLGET($url, $token);
        $tabClients[] = json_decode($response, true);
    }
    return $tabClients;
}

function getOneClient(string $token)
{
    $idClient = $_GET['id'];
    $url = "https://evaluation-technique.lundimatin.biz/api/clients/$idClient";
    $response = appel_cURLGET($url, $token);

    return json_decode($response, true);
}

function modifClient(string $token, array $data)
{
    $data['nom'] = $_POST['nom'];
    $data['email'] = $_POST['email'];
    $data['tel'] = $_POST['tel'];
    $data['adresse'] = $_POST['adresse'];
    $data['code_postal'] = $_POST['code_postal'];
    $data['ville'] = $_POST['ville'];
    $url = "https://evaluation-technique.lundimatin.biz/api/clients/$idClient";
    $response = appel_cURLPOST($url, $token, $data);

    return json_decode($response, true);
}