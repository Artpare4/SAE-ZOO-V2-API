<?php

namespace App\Entity;

use App\Repository\AssoEventZoneParcRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AssoEventZoneParcRepository::class)]
class AssoEventZoneParc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'zonesParc')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Event $event = null;

    #[ORM\ManyToOne(inversedBy: 'events')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ZoneParc $zoneParc = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): static
    {
        $this->event = $event;

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
}
