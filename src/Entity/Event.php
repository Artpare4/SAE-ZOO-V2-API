<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\Repository\EventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventRepository::class)]
#[ApiResource(operations: [
    new Get(openapiContext: [
        'summary' => 'Retourne les informations de l\'event associé à l\'id',
        'description' => 'Retourne les informations de l\'event associé à l\'id',
    ])])]
class Event
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    private ?string $nomEvent = null;

    #[ORM\Column]
    private ?int $nbPlaces = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: AssoEventDateEvent::class)]
    private Collection $datesEvent;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: AssoEventReservation::class)]
    private Collection $reservation;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: AssoEventZoneParc::class, orphanRemoval: true)]
    private Collection $zonesParc;

    #[ORM\OneToMany(mappedBy: 'event', targetEntity: AssoEventAnimal::class, orphanRemoval: true)]
    private Collection $animaux;

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
}
