<?php

namespace App\Entity;

use App\Repository\BilletRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BilletRepository::class)]
class Billet
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $nbJours = null;

    #[ORM\Column]
    private ?float $tarifAdulte = null;

    #[ORM\Column]
    private ?float $tarifEnfant = null;

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

    public function getTarifAdulte(): ?float
    {
        return $this->tarifAdulte;
    }

    public function setTarifAdulte(float $tarifAdulte): static
    {
        $this->tarifAdulte = $tarifAdulte;

        return $this;
    }

    public function getTarifEnfant(): ?float
    {
        return $this->tarifEnfant;
    }

    public function setTarifEnfant(float $tarifEnfant): static
    {
        $this->tarifEnfant = $tarifEnfant;

        return $this;
    }
}
