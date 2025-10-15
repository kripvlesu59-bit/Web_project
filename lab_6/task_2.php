<?php

//  2.1
function GetCustomHttp($url, $header) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => $header,
    ]);
    $res = curl_exec($ch);
    curl_close($ch);
    echo 'GET-request with custom headers: <br/>';

    return $res;
}

echo GetCustomHttp('https://jsonplaceholder.typicode.com/posts/1',['X-Custom-Header: DameDamee']) . '<br/>'; 




//  2.2
function PostJSON($url, $data) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        CURLOPT_POSTFIELDS => json_encode($data)
    ]);
    $res = curl_exec($ch);
    curl_close($ch);
    echo 'JSON data POST-request: <br/>' . $res . "<br/>";

    return json_decode($res, true);
}

PostJSON('https://jsonplaceholder.typicode.com/posts/',
        ['title'=> 'U', 'body'=> 'A', 'userId'=> 777]);
            




//  2.3
function GetWithUrlParams($url, $parameters) {
    $ch = curl_init($url . '?' . http_build_query($parameters));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    curl_close($ch);
    echo 'GET-request with URL-parameters: <br/>' . $res;

    return json_decode($res, true);
}

GetWithUrlParams('https://jsonplaceholder.typicode.com/posts/', ['userId' => 2]);

?>