<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Delete;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\GetCollection;
use ApiPlatform\Metadata\Link;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
#[ApiResource(operations: [
    new Get(openapiContext: [
        'summary' => 'Retourne une réservation associé à l\'id',
        'description' => 'Retourne une réservati on associé à l\'id',
    ], normalizationContext: ['groups' => 'Reservation-billet_read'],
        security: "is_granted('ROLE_USER') and object.getuser()==user"),
    new GetCollection(
        uriTemplate: '/users/{id}/reservations',
        uriVariables: ['id' => new Link(fromProperty: 'reservations', fromClass: User::class)],
        openapiContext: [
            'summary' => 'Retourne les réservation de l\'utilisateur passé en paramètre',
            'description' => 'Retourne les réservation de l\'utilisateur passé en paramètre',
        ],
        normalizationContext: ['groups' => 'Reservation-billet_read'],
        security: "is_granted('ROLE_USER') and object.getuser()==user"
    ),
    new Post(openapiContext: [
        'summary' => 'Créé une réservation',
        'description' => 'Créé une réservation apaprtenant à un utilisateur',
    ], security: "is_granted('ROLE_USER') and object.getuser()==user"),
    new Delete(
        openapiContext: [
            'summary' => 'Supprime une réservation',
            'description' => 'Supprime une réservation appartenant à un utilisateur',
        ],
        security: "is_granted('ROLE_USER') and object.getuser()==user"
    ),
    new Patch(openapiContext: [
        'summary' => 'Modifie une réservation',
        'description' => 'Modifie une réservation à partenant à un utilisateur',
    ],
        security: "is_granted('ROLE_USER') and object.getuser()==user"),
]
)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['Reservation-billet_read'])]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups(['Reservation-billet_read'])]
    private ?\DateTimeInterface $dateReservation = null;

    #[ORM\Column]
    #[Groups(['Reservation-billet_read'])]
    #[Assert\PositiveOrZero]
    private ?int $nbPlacesAdult = null;

    #[ORM\Column]
    #[Groups(['Reservation-billet_read'])]
    #[Assert\PositiveOrZero]
    private ?int $nbPlacesChild = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['Reservation-billet_read'])]
    private ?Billet $billet = null;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    #[ORM\JoinColumn(nullable: false)]
    #[Groups(['Reservation-billet_read'])]
    private ?User $user = null;

    #[ORM\OneToMany(mappedBy: 'reservation', targetEntity: AssoEventReservation::class, orphanRemoval: true, cascade: ['remove'])]
    #[Groups(['Reservation-billet_read'])]
    private Collection $events;

    public function __construct()
    {
        $this->events = new ArrayCollection();
    }

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

    public function getNbPlacesAdult(): ?int
    {
        return $this->nbPlacesAdult;
    }

    public function setNbPlacesAdult(int $nbPlacesAdult): static
    {
        $this->nbPlacesAdult = $nbPlacesAdult;

        return $this;
    }

    public function getNbPlacesChild(): ?int
    {
        return $this->nbPlacesChild;
    }

    public function setNbPlacesChild(int $nbPlacesChild): static
    {
        $this->nbPlacesChild = $nbPlacesChild;

        return $this;
    }

    public function getBillet(): ?Billet
    {
        return $this->billet;
    }

    public function setBillet(?Billet $billet): static
    {
        $this->billet = $billet;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, AssoEventReservation>
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(AssoEventReservation $event): static
    {
        if (!$this->events->contains($event)) {
            $this->events->add($event);
            $event->setReservation($this);
        }

        return $this;
    }

    public function removeEvent(AssoEventReservation $event): static
    {
        if ($this->events->removeElement($event)) {
            // set the owning side to null (unless already changed)
            if ($event->getReservation() === $this) {
                $event->setReservation(null);
            }
        }

        return $this;
    }
}
