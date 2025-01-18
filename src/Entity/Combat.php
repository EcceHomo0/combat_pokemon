<?php

namespace App\Entity;

use App\Repository\CombatRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CombatRepository::class)]
class Combat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pokemon $pokemon1 = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pokemon $pokemon2 = null;

    #[ORM\Column(nullable: true)]
    private ?int $nombre_tours = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPokemon1(): ?Pokemon
    {
        return $this->pokemon1;
    }

    public function setPokemon1(?Pokemon $pokemon1): static
    {
        $this->pokemon1 = $pokemon1;

        return $this;
    }

    public function getPokemon2(): ?Pokemon
    {
        return $this->pokemon2;
    }

    public function setPokemon2(?Pokemon $pokemon2): static
    {
        $this->pokemon2 = $pokemon2;

        return $this;
    }

    public function getNombreTours(): ?int
    {
        return $this->nombre_tours;
    }

    public function setNombreTours(?int $nombre_tours): static
    {
        $this->nombre_tours = $nombre_tours;

        return $this;
    }
}
