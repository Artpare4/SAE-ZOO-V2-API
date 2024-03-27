<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AssoEventDateEventRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AssoEventDateEventRepository::class)]
#[ApiResource(openapi: false, security: false)]
class AssoEventDateEvent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'datesEvent')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Event $event = null;

    #[ORM\ManyToOne(inversedBy: 'events')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['Event_read'])]
    private ?DateEvent $dateEvent = null;

    #[ORM\Column(length: 10)]
    #[Assert\Regex("[0-9]{2}:[0-9]{2}")]
    private ?string $horaire = null;

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

    public function getDateEvent(): ?DateEvent
    {
        return $this->dateEvent;
    }

    public function setDateEvent(?DateEvent $dateEvent): static
    {
        $this->dateEvent = $dateEvent;

        return $this;
    }

    public function getHoraire(): ?string
    {
        return $this->horaire;
    }

    public function setHoraire(string $horaire): static
    {
        $this->horaire = $horaire;

        return $this;
    }

    public function __toString()
    {
        return $this->dateEvent->getDateEvent()->format('d-m-Y');
    }
}
