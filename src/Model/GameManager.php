<?php


namespace App\Model;

use GuzzleHttp;

class GameManager extends AbstractManager
{
    public function touslesoeufs()
    {
        $client = new GuzzleHttp\Client([
            'base_uri' => 'https://tours.wilders.dev',]);

        $response = $client->request('GET', '/api/eggs');


        $body = $response->getBody();


        $truc = $body->getContents();
        $truc = GuzzleHttp\json_decode($truc, true);
        return $truc;
    }


    public function oeufhasard()
    {
        $client = new GuzzleHttp\Client(['base_uri' => 'https://tours.wilders.dev',]);

        $response = $client->request('GET', '/api/eggs/random');


        $body = $response->getBody();


        $truc = $body->getContents();
        $truc = GuzzleHttp\json_decode($truc, true);
        return $truc;
    }

    public function mechanthasard()
    {
        $client = new GuzzleHttp\Client(['base_uri' => 'https://tours.wilders.dev',]);

        $response = $client->request('GET', '/api/characters/random');


        $body = $response->getBody();


        $truc = $body->getContents();
        $truc = GuzzleHttp\json_decode($truc, true);
        return $truc;
    }
}
