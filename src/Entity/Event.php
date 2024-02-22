<?php

namespace App\Entity;

use ApiPlatform\Doctrine\Orm\Filter\SearchFilter;
use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use App\Controller\GetImageEventController;
use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ApiResource(operations: [
    new Get(openapiContext: [
        'summary' => 'Retourne les informations de l\'event associé à l\'id',
        'description' => 'Retourne les informations de l\'event associé à l\'id',
    ], normalizationContext: ['groups' => ['Event_read']]),
    new GetCollection(openapiContext: [
        'summary' => 'Retourne une liste d\'évènements',
        'description' => 'Retourne une liste d\'évènements',
    ], paginationClientEnabled: true),
    new Get(
        uriTemplate: '/events/{id}/image',
        controller: GetImageEventController::class,
        openapiContext: [
            'summary' => 'Récupère l\'image de l\'événement grâce à son identifiant',
            'description' => 'Récupère l\'image de l\'événement grâce à son identifiant',
            'responses' => [
                '200' => [
                    'description' => 'image de l\'événement',
                ],
            ],
        ]
    ),
], normalizationContext: ['groups' => ['Event_read']])]
#[ApiFilter(SearchFilter::class, properties: ['nomEvent' => 'partial'])]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['Event_read'])]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    #[Groups(['Event_read'])]
    #[Assert\Regex('/[a-zA-ZÀ-ù0-9-\s]/')]
    private ?string $nomEvent = null;

    #[ORM\Column]
    #[Groups(['Event_read'])]
    #[Assert\PositiveOrZero]
    private ?int $nbPlaces = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Groups(['Event_read'])]
    #[Assert\Regex(pattern: '/[<>#\\$]/', match: false)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: AssoEventDateEvent::class)]
    #[Groups(['Event_read'])]
    private Collection $datesEvent;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: AssoEventReservation::class)]
    #[Groups(['Event_read'])]
    private Collection $reservation;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: AssoEventZoneParc::class, orphanRemoval: true)]
    #[Groups(['Event_read'])]
    private Collection $zonesParc;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: AssoEventAnimal::class, orphanRemoval: true)]
    #[Groups(['Event_read'])]
    private Collection $animaux;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imgEvent = null;

    public function __construct()
    {
        $this->datesEvent = new ArrayCollection();
        $this->reservation = new ArrayCollection();
        $this->zonesParc = new ArrayCollection();
        $this->animaux = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEvent(): ?string
    {
        return $this->nomEvent;
    }

    public function setNomEvent(string $nomEvent): static
    {
        $this->nomEvent = $nomEvent;

        return $this;
    }

    public function getNbPlaces(): ?int
    {
        return $this->nbPlaces;
    }

    public function setNbPlaces(int $nbPlaces): static
    {
        $this->nbPlaces = $nbPlaces;

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

    /**
     * @return Collection<int, AssoEventDateEvent>
     */
    public function getDatesEvent(): Collection
    {
        return $this->datesEvent;
    }

    public function addDatesEvent(AssoEventDateEvent $datesEvent): static
    {
        if (!$this->datesEvent->contains($datesEvent)) {
            $this->datesEvent->add($datesEvent);
            $datesEvent->setEvent($this);
        }

        return $this;
    }

    public function removeDatesEvent(AssoEventDateEvent $datesEvent): static
    {
        if ($this->datesEvent->removeElement($datesEvent)) {
            // set the owning side to null (unless already changed)
            if ($datesEvent->getEvent() === $this) {
                $datesEvent->setEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AssoEventReservation>
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(AssoEventReservation $reservation): static
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation->add($reservation);
            $reservation->setEvent($this);
        }

        return $this;
    }

    public function removeReservation(AssoEventReservation $reservation): static
    {
        if ($this->reservation->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getEvent() === $this) {
                $reservation->setEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AssoEventZoneParc>
     */
    public function getZonesParc(): Collection
    {
        return $this->zonesParc;
    }

    public function addZonesParc(AssoEventZoneParc $zonesParc): static
    {
        if (!$this->zonesParc->contains($zonesParc)) {
            $this->zonesParc->add($zonesParc);
            $zonesParc->setEvent($this);
        }

        return $this;
    }

    public function removeZonesParc(AssoEventZoneParc $zonesParc): static
    {
        if ($this->zonesParc->removeElement($zonesParc)) {
            // set the owning side to null (unless already changed)
            if ($zonesParc->getEvent() === $this) {
                $zonesParc->setEvent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AssoEventAnimal>
     */
    public function getAnimaux(): Collection
    {
        return $this->animaux;
    }

    public function addAnimaux(AssoEventAnimal $animaux): static
    {
        if (!$this->animaux->contains($animaux)) {
            $this->animaux->add($animaux);
            $animaux->setEvent($this);
        }

        return $this;
    }

    public function removeAnimaux(AssoEventAnimal $animaux): static
    {
        if ($this->animaux->removeElement($animaux)) {
            // set the owning side to null (unless already changed)
            if ($animaux->getEvent() === $this) {
                $animaux->setEvent(null);
            }
        }

        return $this;
    }

    public function getImgEvent(): ?string
    {
        return $this->imgEvent;
    }

    public function setImgEvent(?string $imgEvent): static
    {
        $this->imgEvent = $imgEvent;

        return $this;
    }
}
