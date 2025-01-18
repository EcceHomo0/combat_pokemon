<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpClient\HttpClient;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Pokemon;

final class PokemonController extends AbstractController
{
    #[Route('/pokemon', name: 'app_pokemon')]
    public function index(): Response
    {
        $client = HttpClient::create();
        $response=$client->request('GET','https://pokebuildapi.fr/api/v1/pokemon');
        $pokemons = $response ->toArray();
        dd($pokemons);

        return $this->render('pokemon/index.html.twig', [
            'controller_name' => 'PokemonController',
        ]);
    }

}

