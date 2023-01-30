<?php

use GuzzleHttp\Client;

 class About_model extends CI_Model {

    public function getAllAbout(){
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/layanan/api/about');
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

 }