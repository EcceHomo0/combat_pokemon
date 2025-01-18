<?php

namespace App\Entity;

use App\Repository\PokemonRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PokemonRepository::class)]
class Pokemon
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $points_de_vie = null;

    #[ORM\Column]
    private ?int $points_attaque = null;

    #[ORM\Column]
    private ?int $points_defense = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPointsDeVie(): ?int
    {
        return $this->points_de_vie;
    }

    public function setPointsDeVie(int $points_de_vie): static
    {
        $this->points_de_vie = $points_de_vie;

        return $this;
    }

    public function getPointsAttaque(): ?int
    {
        return $this->points_attaque;
    }

    public function setPointsAttaque(int $points_attaque): static
    {
        $this->points_attaque = $points_attaque;

        return $this;
    }

    public function getPointsDefense(): ?int
    {
        return $this->points_defense;
    }

    public function setPointsDefense(int $points_defense): static
    {
        $this->points_defense = $points_defense;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
