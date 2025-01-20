<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService
{
    
    // private $client;

    public function __construct(private readonly HttpClientInterface $client)
    {
        // $this->client = $client;
    }

    public function getPokemonData():array
    {
        $response=$this->client->request('GET','https://pokebuildapi.fr/api/v1/pokemon');
        return $response ->toArray();
    }
}