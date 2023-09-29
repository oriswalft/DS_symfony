<?php

namespace App\Entity;

use App\Repository\ProjectionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectionsRepository::class)]
class Projections
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $debut_film = null;

    #[ORM\ManyToOne(inversedBy: 'projections')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Films $nom_film = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDebutFilm(): ?\DateTimeInterface
    {
        return $this->debut_film;
    }

    public function setDebutFilm(\DateTimeInterface $debut_film): static
    {
        $this->debut_film = $debut_film;

        return $this;
    }

    public function getNomFilm(): ?Films
    {
        return $this->nom_film;
    }

    public function setNomFilm(?Films $nom_film): static
    {
        $this->nom_film = $nom_film;

        return $this;
    }

}
