<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use App\Repository\ZoneParcRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ZoneParcRepository::class)]
#[ApiResource(operations: [
    new Get(openapiContext: [
        'summary' => 'Retourne les informations de la zone parc associée à l\'id',
        'description' => 'Retourne les informations de la zone parc associée à l\'id',
    ])])]
class ZoneParc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    private ?string $libZone = null;

    #[ORM\OneToMany(mappedBy: 'zoneParc', targetEntity: FamilleAnimal::class)]
    private Collection $familleAnimals;

    #[ORM\OneToMany(mappedBy: 'zoneParc', targetEntity: AssoEventZoneParc::class, orphanRemoval: true)]
    private Collection $events;

    public function __construct()
    {
        $this->familleAnimals = new ArrayCollection();
        $this->events = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibZone(): ?string
    {
        return $this->libZone;
    }

    public function setLibZone(string $libZone): static
    {
        $this->libZone = $libZone;

        return $this;
    }

    /**
     * @return Collection<int, FamilleAnimal>
     */
    public function getFamilleAnimals(): Collection
    {
        return $this->familleAnimals;
    }

    public function addFamilleAnimal(FamilleAnimal $familleAnimal): static
    {
        if (!$this->familleAnimals->contains($familleAnimal)) {
            $this->familleAnimals->add($familleAnimal);
            $familleAnimal->setZoneParc($this);
        }

        return $this;
    }

    public function removeFamilleAnimal(FamilleAnimal $familleAnimal): static
    {
        if ($this->familleAnimals->removeElement($familleAnimal)) {
            // set the owning side to null (unless already changed)
            if ($familleAnimal->getZoneParc() === $this) {
                $familleAnimal->setZoneParc(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AssoEventZoneParc>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(AssoEventZoneParc $event): static
    {
        if (!$this->events->contains($event)) {
            $this->events->add($event);
            $event->setZoneParc($this);
        }

        return $this;
    }

    public function removeEvent(AssoEventZoneParc $event): static
    {
        if ($this->events->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getZoneParc() === $this) {
                $event->setZoneParc(null);
            }
        }

        return $this;
    }
}
