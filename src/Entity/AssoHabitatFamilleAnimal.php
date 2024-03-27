<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\Repository\AssoHabitatFamilleAnimalRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AssoHabitatFamilleAnimalRepository::class)]
#[ApiResource(operations: [
    new Get(normalizationContext: ['groups' => ['get']], openapi: false),
],openapi: false, security: false)]
class AssoHabitatFamilleAnimal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'assoHabitatFamilleAnimals')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['get','Famille_read'])]
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
