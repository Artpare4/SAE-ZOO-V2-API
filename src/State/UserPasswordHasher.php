<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * Processeur de User permettant le hachage du mot de passe après entré en API.
 *
 * Ecriture d'un processeur hachant automatiquement le mot de passe d'un utilisateur avant de le mettre en base de données.
 * Principe de processeurs trouvé directement dans la doc d'API Platform à l'adresse :
 * https://api-platform.com/docs/core/user/
 * @implements ProcessorInterface<User, User|void>
 */
final class UserPasswordHasher implements ProcessorInterface
{
    public function __construct(
        private ProcessorInterface $processor,
        private UserPasswordHasherInterface $passwordHasher
    ) {
    }

    /**
     * Méthode de process
     * Récupère le plain-password de l'utilisateur, le hache et le stocke dans le password.
     * Après attribution, le plain-password est supprimé afin, d'éviter une faille de sécurité.
     * Ajoute/Modifie ensuite l'utilisateur dans la base.
     * @param User $data
     */
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = []): User|null
    {
        if (!$data->getPlainPassword()) {
            return $this->processor->process($data, $operation, $uriVariables, $context);
        }

        $hashedPassword = $this->passwordHasher->hashPassword(
            $data,
            $data->getPlainPassword()
        );
        $data->setPassword($hashedPassword);
        $data->eraseCredentials();

        return $this->processor->process($data, $operation, $uriVariables, $context);
    }
}
