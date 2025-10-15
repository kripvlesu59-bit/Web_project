<?php


function Request($url, $req = 'GET', $data = null) {
    $ch = curl_init($url);

    if ( ($req === 'GET') || ($req === 'POST') || ($req === 'DELETE') ){
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_CUSTOMREQUEST => $req,
			CURLOPT_HTTPHEADER => ['Content-Type: application/json']
        ]);
    }
    else (throw new Exception("invalid request"));


    if ($data) {
        curl_setopt_array($ch, [
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => ['Content-Type: application/json'],
        ]);
    }

    $res = curl_exec($ch);

    $HTTPerror = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error = curl_error($ch);

    curl_close($ch);

    if ($error){
        echo "<br/>";
        throw new Exception($error);
    } 

    if ($HTTPerror >= 400) {
        echo "<br/>";
        throw new Exception('HTTP error code:' . $HTTPerror);
        
    }

    print_r (json_decode($res, true));
}

Request('https://jsonplaceholder.typicode.com/posts/1') . "<br\>";  // Success


//Request('https://sheeeeeeesh.kz') . "<br\>";    // Fatal Error
Request('https://jsonplaceholder.typicode.com/posts/viuviu'). "<br\>";  // HTTP Error


?>