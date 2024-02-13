<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use App\Repository\BilletRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BilletRepository::class)]
#[ApiResource(operations: [
    new Get(openapiContext: [
        'summary' => 'Retourne les information du billet associé à l\'id',
        'description' => 'Retourne les information du billet associé à l\'id',
    ]),
])]
class Billet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['Reservation-billet_read'])]
    private ?int $id = null;

    #[ORM\Column]
    #[Groups(['Reservation-billet_read'])]
    private ?int $nbJours = null;

    #[ORM\Column]
    #[Groups(['Reservation-billet_read'])]
    private ?float $tarifAdult = null;

    #[ORM\Column]
    #[Groups(['Reservation-billet_read'])]
    private ?float $tarifChild = null;

    #[ORM\OneToMany(mappedBy: 'billet', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbJours(): ?int
    {
        return $this->nbJours;
    }

    public function setNbJours(int $nbJours): static
    {
        $this->nbJours = $nbJours;

        return $this;
    }

    public function getTarifAdult(): ?float
    {
        return $this->tarifAdult;
    }

    public function setTarifAdult(float $tarifAdult): static
    {
        $this->tarifAdult = $tarifAdult;

        return $this;
    }

    public function getTarifChild(): ?float
    {
        return $this->tarifChild;
    }

    public function setTarifChild(float $tarifChild): static
    {
        $this->tarifChild = $tarifChild;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): static
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations->add($reservation);
            $reservation->setBillet($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getBillet() === $this) {
                $reservation->setBillet(null);
            }
        }

        return $this;
    }
}
