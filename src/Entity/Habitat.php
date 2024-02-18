<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\Repository\HabitatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: HabitatRepository::class)]
#[ApiResource(operations: [
    new Get(openapiContext: [
        'summary' => 'Retourne les informations de l\'habitat associé à l\'id',
        'description' => 'Retourne les informations de l\'habitat associé à l\'id',
    ]),
])]
class Habitat
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['get', 'Famille_read'])]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    #[Groups(['get', 'Famille_read'])]
    private ?string $libHabitat = null;

    #[ORM\OneToMany(mappedBy: 'habitat', targetEntity: AssoHabitatFamilleAnimal::class)]
    private Collection $assoHabitatFamilleAnimals;

    public function __construct()
    {
        $this->assoHabitatFamilleAnimals = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibHabitat(): ?string
    {
        return $this->libHabitat;
    }

    public function setLibHabitat(string $libHabitat): static
    {
        $this->libHabitat = $libHabitat;

        return $this;
    }

    /**
     * @return Collection<int, AssoHabitatFamilleAnimal>
     */
    public function getAssoHabitatFamilleAnimals(): Collection
    {
        return $this->assoHabitatFamilleAnimals;
    }

    public function addAssoHabitatFamilleAnimal(AssoHabitatFamilleAnimal $assoHabitatFamilleAnimal): static
    {
        if (!$this->assoHabitatFamilleAnimals->contains($assoHabitatFamilleAnimal)) {
            $this->assoHabitatFamilleAnimals->add($assoHabitatFamilleAnimal);
            $assoHabitatFamilleAnimal->setHabitat($this);
        }

        return $this;
    }

    public function removeAssoHabitatFamilleAnimal(AssoHabitatFamilleAnimal $assoHabitatFamilleAnimal): static
    {
        if ($this->assoHabitatFamilleAnimals->removeElement($assoHabitatFamilleAnimal)) {
            // set the owning side to null (unless already changed)
            if ($assoHabitatFamilleAnimal->getHabitat() === $this) {
                $assoHabitatFamilleAnimal->setHabitat(null);
            }
        }

        return $this;
    }
}
