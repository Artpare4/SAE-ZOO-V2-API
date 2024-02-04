<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateReservation = null;

    #[ORM\Column]
    private ?int $nbPlacesAdulte = null;

    #[ORM\Column]
    private ?int $nbPlacesEnfant = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateReservation(): ?\DateTimeInterface
    {
        return $this->dateReservation;
    }

    public function setDateReservation(\DateTimeInterface $dateReservation): static
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    public function getNbPlacesAdulte(): ?int
    {
        return $this->nbPlacesAdulte;
    }

    public function setNbPlacesAdulte(int $nbPlacesAdulte): static
    {
        $this->nbPlacesAdulte = $nbPlacesAdulte;

        return $this;
    }

    public function getNbPlacesEnfant(): ?int
    {
        return $this->nbPlacesEnfant;
    }

    public function setNbPlacesEnfant(int $nbPlacesEnfant): static
    {
        $this->nbPlacesEnfant = $nbPlacesEnfant;

        return $this;
    }
}
