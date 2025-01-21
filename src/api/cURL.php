<?php

function appel_cURLGET($url, $token)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Accept: application/api.rest-v1+json',
    ]);
    curl_setopt($curl, CURLOPT_USERPWD, "'':$token");
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

function appel_cURLPOSTAUTH($url)
{
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Accept: application/api.rest-v1+json',
        'Content-Type: application/json'
    ]);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode([
        'username' => 'test_api',
        'password' => 'api123456',
        'password_type' => 0,
        'code_application' => 'webservice_externe',
        'code_version' => 1
    ]));

    $result = curl_exec($curl);
    curl_close($curl);

    return $result;
}

function appel_cURLPOST($url, $token)
{
    $curl = curl_init();
    $donneesJS = file_get_contents("php://input");
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_HTTPHEADER, [
        'Accept: application/api.rest-v1+json',
        'Content-Type: application/json'
    ]);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($donneesJS));
    curl_setopt($curl, CURLOPT_USERPWD, "'':$token");

    $result = curl_exec($curl);
    curl_close($curl);

    return $result;
}



// CURL PUT : curl_setopt($ch, CURLOPT_HTTPHEADER, [
//        'Accept: application/api.rest-v1+json',
//        'Content-Type: application/json'
//    ]);