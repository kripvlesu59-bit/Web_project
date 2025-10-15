<?php
class ApiClient {
    private $auth;
    private $url;

    public function __construct($base_url, $username, $password) {
        $this->url = trim($base_url, '/');
        $this->auth = 'Authorization: Basic '.base64_encode("$username:$password");
    }

    private function call($method, $path, $data = null) {

        $ch = curl_init();
          curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $this->url.'/'.ltrim($path, '/'),
            CURLOPT_CUSTOMREQUEST => $method,
			CURLOPT_HTTPHEADER => [$this->auth, 'Content-Type: application/json']
        ]);

        if ($data) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        }

        $res = curl_exec($ch);
        $HTTP_info = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if (curl_error($ch)){
            $error = curl_error($ch);
        }
        else {
            $error = 0;
        }
        curl_close($ch);


        return [
            'code' => $HTTP_info,
            'error' => $error,
            'res' => json_decode($res, true)
        ];
    }

    public function GET($path) {
        return $this->call('GET', $path);
    }

    public function POST($path, $data) {
        return $this->call('POST', $path, $data);
    }

    public function PUT($path, $data) {
        return $this->call('PUT', $path, $data);
    }

    public function DELETE($path) {
        return $this->call('DELETE', $path);
    }
}

?>