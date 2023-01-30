<?php

use GuzzleHttp\Client;

 class Mahasiswa_model extends CI_Model {

    public function getAllMahasiswa(){
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/layanan/api/team');
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

 }