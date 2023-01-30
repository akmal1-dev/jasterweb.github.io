<?php

use GuzzleHttp\Client;

 class Service_model extends CI_Model {

    public function getAllService(){
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/layanan/api/service');
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

 }