<?php

namespace App\Entity;

use App\Repository\AssoHabitatFamilleAnimalRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssoHabitatFamilleAnimalRepository::class)]
class AssoHabitatFamilleAnimal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'assoHabitatFamilleAnimals')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Habitat $habitat = null;

    #[ORM\ManyToOne(inversedBy: 'assoHabitatFamilleAnimals')]
    #[ORM\JoinColumn(nullable: false)]
    private ?FamilleAnimal $familleAnimal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHabitat(): ?Habitat
    {
        return $this->habitat;
    }

    public function setHabitat(?Habitat $habitat): static
    {
        $this->habitat = $habitat;

        return $this;
    }

    public function getFamilleAnimal(): ?FamilleAnimal
    {
        return $this->familleAnimal;
    }

    public function setFamilleAnimal(?FamilleAnimal $familleAnimal): static
    {
        $this->familleAnimal = $familleAnimal;

        return $this;
    }
}
