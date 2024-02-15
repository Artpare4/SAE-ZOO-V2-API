<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Get;
use ApiPlatform\Metadata\Patch;
use ApiPlatform\Metadata\Post;
use ApiPlatform\Metadata\Delete;
use App\Repository\UserRepository;
use App\State\UserPasswordHasher;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
#[ApiResource(operations: [
    new Get(normalizationContext: ['groups' => ['User_read']]),
    new Post(
        normalizationContext: ['groups' => ['User_read']],
        denormalizationContext: ['groups' => ['User_write']],
        processor: UserPasswordHasher::class
    ),
    new Delete(
        security: "is_granted('ROLE_ADMIN') or object == user",
    ),
    new Patch(
        normalizationContext: ['groups' => ['User_read']],
        denormalizationContext: ['groups' => ['User_write']],
        security: "is_granted('ROLE_ADMIN') or object == user",
        processor: UserPasswordHasher::class,
    ),
])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['User_read'])]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    #[Groups(['User_read', 'User_write'])]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Reservation::class, cascade: ['remove'], orphanRemoval: true)]
    #[Groups(['User_read'])]
    private Collection $reservations;

    #[ORM\Column(length: 128)]
    #[Groups(['User_read', 'User_write'])]
    private ?string $nomUser = null;

    #[ORM\Column(length: 128)]
    #[Groups(['User_read', 'User_write'])]
    private ?string $pnomUser = null;

    #[ORM\Column(length: 30)]
    #[Groups(['User_read', 'User_write'])]
    private ?string $phoneUser = null;

    #[Groups(['User_write'])]
    private ?string $plainPassword = null;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        $this->plainPassword = null;
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
            $reservation->setUser($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): static
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getUser() === $this) {
                $reservation->setUser(null);
            }
        }

        return $this;
    }

    public function getNomUser(): ?string
    {
        return $this->nomUser;
    }

    public function setNomUser(string $nomUser): static
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    public function getPnomUser(): ?string
    {
        return $this->pnomUser;
    }

    public function setPnomUser(string $pnomUser): static
    {
        $this->pnomUser = $pnomUser;

        return $this;
    }

    public function getPhoneUser(): ?string
    {
        return $this->phoneUser;
    }

    public function setPhoneUser(string $phoneUser): static
    {
        $this->phoneUser = $phoneUser;

        return $this;
    }

    public function setPlainPassword(string $plainPassword): static
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }
}
