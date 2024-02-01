<?php

namespace App\Entity;

use App\Repository\FamilleAnimalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FamilleAnimalRepository::class)]
class FamilleAnimal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    private ?string $nomFamilleAnimal = null;

    #[ORM\Column(length: 128)]
    private ?string $nomScientifique = null;

    #[ORM\Column]
    private ?int $dangerExtinction = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 128)]
    private ?string $typeAlimentation = null;

    #[ORM\ManyToOne(inversedBy: 'familleAnimals')]
    private ?ZoneParc $zoneParc = null;

    #[ORM\OneToMany(mappedBy: 'familleAnimal', targetEntity: Animal::class)]
    private Collection $animals;

    #[ORM\ManyToOne(inversedBy: 'familleAnimals')]
    private ?Espece $espece = null;

    public function __construct()
    {
        $this->animals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomFamilleAnimal(): ?string
    {
        return $this->nomFamilleAnimal;
    }

    public function setNomFamilleAnimal(string $nomFamilleAnimal): static
    {
        $this->nomFamilleAnimal = $nomFamilleAnimal;

        return $this;
    }

    public function getNomScientifique(): ?string
    {
        return $this->nomScientifique;
    }

    public function setNomScientifique(string $nomScientifique): static
    {
        $this->nomScientifique = $nomScientifique;

        return $this;
    }

    public function getDangerExtinction(): ?int
    {
        return $this->dangerExtinction;
    }

    public function setDangerExtinction(int $dangerExtinction): static
    {
        $this->dangerExtinction = $dangerExtinction;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getTypeAlimentation(): ?string
    {
        return $this->typeAlimentation;
    }

    public function setTypeAlimentation(string $typeAlimentation): static
    {
        $this->typeAlimentation = $typeAlimentation;

        return $this;
    }

    public function getZoneParc(): ?ZoneParc
    {
        return $this->zoneParc;
    }

    public function setZoneParc(?ZoneParc $zoneParc): static
    {
        $this->zoneParc = $zoneParc;

        return $this;
    }

    /**
     * @return Collection<int, Animal>
     */
    public function getAnimals(): Collection
    {
        return $this->animals;
    }

    public function addAnimal(Animal $animal): static
    {
        if (!$this->animals->contains($animal)) {
            $this->animals->add($animal);
            $animal->setFamilleAnimal($this);
        }

        return $this;
    }

    public function removeAnimal(Animal $animal): static
    {
        if ($this->animals->removeElement($animal)) {
            // set the owning side to null (unless already changed)
            if ($animal->getFamilleAnimal() === $this) {
                $animal->setFamilleAnimal(null);
            }
        }

        return $this;
    }

    public function getEspece(): ?Espece
    {
        return $this->espece;
    }

    public function setEspece(?Espece $espece): static
    {
        $this->espece = $espece;

        return $this;
    }
}
