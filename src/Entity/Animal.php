<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\Controller\GetImageAnimalController;
use App\Repository\AnimalRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
#[ApiResource(normalizationContext: ['groups' => ['Animal_read']])]
#[Get(
    openapiContext: [
        'summary' => 'Récupère un animal grâce à son identifiant',
        'description' => 'Récupère un animal grâce à son identifiant',
    ]
)]
#[Get(
    uriTemplate: '/animals/{id}/image',
    controller: GetImageAnimalController::class, openapiContext: [
    'summary' => 'Récupère l\'image de l\'animal grâce à son identifiant',
    'description' => 'Récupère l\'image de l\'animal grâce à son identifiant',
        'responses' => [
            '200' => [
                'description' => 'image de l\'animal',
            ],
        ],
]
)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['Famille_read', 'Animal_read'])]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    #[Groups(['Famille_read', 'Animal_read'])]
    #[Assert\Regex(pattern: '/[<>#\\$0-9]+/', match: false)]
    private ?string $nomAnimal = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups(['Animal_read'])]
    private ?\DateTimeInterface $dateNaissance = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    #[Groups(['Animal_read'])]
    private ?\DateTimeInterface $dateMort = null;

    #[ORM\Column]
    #[Assert\PositiveOrZero]
    #[Groups(['Animal_read'])]
    private ?float $taille = null;

    #[ORM\Column]
    #[Assert\PositiveOrZero]
    #[Groups(['Animal_read'])]
    private ?float $poids = null;

    #[ORM\ManyToOne(inversedBy: 'animals')]
    #[Groups(['Animal_read'])]
    private ?FamilleAnimal $familleAnimal = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    #[Groups(['Animal_read'])]
    private ?string $caracteristique = null;

    #[ORM\OneToMany(mappedBy: 'animal', targetEntity: AssoEventAnimal::class, orphanRemoval: true)]
    #[Groups(['Animal_read'])]
    private Collection $events;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imgAnimal = null;

    public function __construct()
    {
        $this->events = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAnimal(): ?string
    {
        return $this->nomAnimal;
    }

    public function setNomAnimal(string $nomAnimal): static
    {
        $this->nomAnimal = $nomAnimal;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $dateNaissance): static
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getDateMort(): ?\DateTimeInterface
    {
        return $this->dateMort;
    }

    public function setDateMort(?\DateTimeInterface $dateMort): static
    {
        $this->dateMort = $dateMort;

        return $this;
    }

    public function getTaille(): ?float
    {
        return $this->taille;
    }

    public function setTaille(float $taille): static
    {
        $this->taille = $taille;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(float $poids): static
    {
        $this->poids = $poids;

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

    public function getCaracteristique(): ?string
    {
        return $this->caracteristique;
    }

    public function setCaracteristique(?string $caracteristique): static
    {
        $this->caracteristique = $caracteristique;

        return $this;
    }

    /**
     * @return Collection<int, AssoEventAnimal>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(AssoEventAnimal $event): static
    {
        if (!$this->events->contains($event)) {
            $this->events->add($event);
            $event->setAnimal($this);
        }

        return $this;
    }

    public function removeEvent(AssoEventAnimal $event): static
    {
        if ($this->events->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getAnimal() === $this) {
                $event->setAnimal(null);
            }
        }

        return $this;
    }

    public function getImgAnimal(): ?string
    {
        return $this->imgAnimal;
    }

    public function setImgAnimal(?string $imgAnimal): static
    {
        $this->imgAnimal = $imgAnimal;

        return $this;
    }
}
