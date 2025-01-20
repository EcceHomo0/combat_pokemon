<?php

namespace App\Controller;

use App\Service\CallApiService;
use App\Repository\PokemonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpClient\HttpClient;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Pokemon;

final class PokemonController extends AbstractController
{

    // #[Route('/liste','pokemon_list')]
    // public function listePokemons(PokemonRepository $pokemonRepository): Response
    // {
    //     $pokemons = $pokemonRepository->findAll();
    //     return $this->render('pokemon/index.html.twig',['pokemons' => $pokemons]);
    // }

    // private $client;
    // private $client = HttpClient::create();

    #[Route('/pokemon', name: 'app_pokemon')]
    public function index(CallApiService $callApiService): Response
    {
        
        // dd($callApiService->getPokemonData());

        // $client = HttpClient::create();
        // $response=$client->request('GET','https://pokebuildapi.fr/api/v1/pokemon');
        // $pokemons = $response ->toArray();
        // dd($pokemons);

        return $this->render('pokemon/index.html.twig', [
            'data' => $callApiService->getPokemonData(),
        ]);
    }

}

