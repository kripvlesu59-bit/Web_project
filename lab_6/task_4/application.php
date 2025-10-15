<?php
require_once 'ApiClient.php';
$client = new ApiClient('https://jsonplaceholder.typicode.com', 'username', 'password');

echo "<br/>" . "Get-request:";
$res = $client->get('/posts/1');
print_r($res['res']);
echo "<br/>";


echo "<br/>" . "Post-request:";
$post_req = $client->post('/posts', ['title' => 'bad', 'body' => 'good','userId' => 44]);
print_r($post_req['res']);


echo "<br/>" . "Put-request:";
$put_req = $client->put('/posts/1', ['title' => 'Not_bad','body' => 'Not_good']);
print_r($put_req['res']);


echo "<br/>" . "Delete-request:";
$del_req = $client->delete('/posts/1');
print_r($del_req['res']);

?>