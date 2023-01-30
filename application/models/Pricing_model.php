<?php

use GuzzleHttp\Client;

 class Pricing_model extends CI_Model {

    public function getAllPricing(){
        $client = new Client();

        $response = $client->request('GET', 'http://localhost/layanan/api/pricing');
        $result = json_decode($response->getBody()->getContents(), true);

        return $result['data'];
    }

 }