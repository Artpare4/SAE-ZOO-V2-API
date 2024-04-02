<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use App\Controller\GetImageFamilleController;
use App\Repository\FamilleAnimalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: FamilleAnimalRepository::class)]
#[ApiResource()]
#[ApiFilter(
    SearchFilter::class, properties: ['nomFamilleAnimal' => 'partial']
)]
#[GetCollection(
    openapiContext: [
        'summary' => 'Récupère une collection de familles d\'animaux',
        'description' => 'Récupère une collection de familles d\'animaux',
    ], normalizationContext: ['groups' => ['Famille_collection_read']]
)]
#[Get(
    openapiContext: [
        'summary' => 'Récupère une famille d\'animaux grâce à son identifiant',
        'description' => 'Récupère une famille d\'animaux grâce à son identifiant',
    ], normalizationContext: ['groups' => ['Famille_read']]
)]
#[Get(
    uriTemplate: '/famille_animals/{id}/image',
    controller: GetImageFamilleController::class,
    openapiContext: [
        'summary' => 'Récupère l\'image de la famille d\'animaux grâce à son identifiant',
        'description' => 'Récupère l\'image de la famille d\'animaux grâce à son identifiant',
        'responses' => [
            '200' => [
                'description' => 'image de la famille d\'animaux',
            ],
        ],
    ]
)]
class FamilleAnimal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['Famille_read', 'Famille_collection_read', 'ZoneParc_read_details'])]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    #[Groups(['Famille_read', 'Famille_collection_read', 'ZoneParc_read_details'])]
    #[Assert\Regex(pattern: '/[<>#\\$]+/', match: false)]
    private ?string $nomFamilleAnimal = null;

    #[ORM\Column(length: 128)]
    #[Groups(['Famille_read', 'Famille_collection_read', 'ZoneParc_read_details'])]
    #[Assert\Regex(pattern: '/[<>#\\$]+/', match: false)]
    private ?string $nomScientifique = null;

    #[ORM\Column]
    #[Groups(['Famille_read'])]
    #[Assert\Range(min: 0, max: 5)]
    private ?int $dangerExtinction = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['Famille_read'])]
    // #[Assert\Regex(pattern: '/[<>#\\$]+/', match: false)]
    private ?string $description = null;

    #[ORM\Column(length: 128)]
    #[Groups(['Famille_read'])]
    #[Assert\Regex(pattern: '/[<>#\\$]+/', match: false)]
    private ?string $typeAlimentation = null;

    #[ORM\ManyToOne(inversedBy: 'familleAnimals')]
    #[Groups(['Famille_read'])]
    #[ORM\JoinColumn(onDelete: 'SET NULL')]
    private ?ZoneParc $zoneParc = null;

    #[ORM\OneToMany(mappedBy: 'familleAnimal', targetEntity: Animal::class)]
    #[Groups(['Famille_read'])]
    private Collection $animals;

    #[ORM\ManyToOne(inversedBy: 'familleAnimals')]
    #[ORM\JoinColumn(onDelete: 'SET NULL')]
    #[Groups(['Famille_read'])]
    private ?Espece $espece = null;

    #[ORM\OneToMany(mappedBy: 'familleAnimal', targetEntity: AssoHabitatFamilleAnimal::class, cascade: ['remove'])]
    #[Groups(['Famille_read'])]
    #[ORM\JoinColumn(onDelete: 'SET NULL')]
    private Collection $assoHabitatFamilleAnimals;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imgFamille = null;

    public function __construct()
    {
        $this->animals = new ArrayCollection();
        $this->assoHabitatFamilleAnimals = new ArrayCollection();
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
            $assoHabitatFamilleAnimal->setFamilleAnimal($this);
        }

        return $this;
    }

    public function removeAssoHabitatFamilleAnimal(AssoHabitatFamilleAnimal $assoHabitatFamilleAnimal): static
    {
        if ($this->assoHabitatFamilleAnimals->removeElement($assoHabitatFamilleAnimal)) {
            // set the owning side to null (unless already changed)
            if ($assoHabitatFamilleAnimal->getFamilleAnimal() === $this) {
                $assoHabitatFamilleAnimal->setFamilleAnimal(null);
            }
        }

        return $this;
    }

    public function getImgFamille(): ?string
    {
        return $this->imgFamille;
    }

    public function setImgFamille(?string $imgFamille): static
    {
        $this->imgFamille = $imgFamille;

        return $this;
    }
}
