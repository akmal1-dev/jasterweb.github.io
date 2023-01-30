<?php

use GuzzleHttp\Client;

 class Contact_model extends CI_Model {

    public function getAllContact(){
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/layanan/api/contact');
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

 }