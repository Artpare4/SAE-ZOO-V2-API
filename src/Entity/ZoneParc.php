<?php

namespace App\Entity;

use App\Repository\ZoneParcRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ZoneParcRepository::class)]
class ZoneParc
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 128)]
    private ?string $libZone = null;

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
}
