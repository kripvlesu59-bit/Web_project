<?php
//global vars

$data = [
    'title'=> 'bob',
    'body'=> 'karaganda',
    'userId'=> 999
];

// 1.1
$ch = curl_init('https://jsonplaceholder.typicode.com/posts/1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($ch);
curl_close($ch);

echo "GET-запрос: $res  \n  <br/>";





// 1.2
$ch = curl_init('https://jsonplaceholder.typicode.com/posts');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($data)
 ]);

$res = curl_exec($ch);
curl_close($ch);
echo "POST-запрос: $res  \n  <br/>";





// 1.3
$ch = curl_init('https://jsonplaceholder.typicode.com/posts/1');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_CUSTOMREQUEST => 'PUT',
    CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
    CURLOPT_POSTFIELDS => json_encode($data)
 ]);
$res = curl_exec($ch);
curl_close($ch);
echo "PUT-запрос: $res  \n  <br/>";





// 1.4
$ch = curl_init('https://jsonplaceholder.typicode.com/posts/1');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_CUSTOMREQUEST => 'DELETE',
 ]);
$res = curl_exec($ch);
curl_close($ch);
echo "DELETE-запрос: $res  \n  <br/>";


?>