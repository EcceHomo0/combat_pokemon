<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\HttpClient\HttpClient;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Pokemon;

class AppFixtures extends Fixture
{

    #[Route('/pokemon2', name: 'app_pokemon2')]
    public function load(ObjectManager $manager): void
    {
        $client = HttpClient::create();
        $response=$client->request('GET','https://pokebuildapi.fr/api/v1');
        $pokemons = $response ->toArray();

        foreach ($pokemons as $data)
        {
            $pokemon = new Pokemon();
            $pokemon->setNom('$data[name]');
            // $pokemon->setPointsDeVie('$data[stats][hp]');
            // $pokemon->setPointsAttaque('$data[stats][attack]');
            // $pokemon->setPointsDefense('$data[name][defense]');
            $pokemon->setImage('$data[image]');
            $manager->persist($pokemon);
            $pokemons[] = $pokemon;
        }

        $manager->flush();
    }
}
