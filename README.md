# SAE4-01 : API Zoo Parc de Laval

![Static Badge](https://img.shields.io/badge/BUT-S4-teal)
![Static Badge](https://img.shields.io/badge/SAE-401api-green)
![Static Badge](https://img.shields.io/badge/Symfony-6.3-blue)
![Static Badge](https://img.shields.io/badge/Status-In_progress-gold)

Ce projet est le côté back-end/API d'un site de gestion pour un zoo. Il permet de gérer les animaux, les enclos et les évènements. Les visiteurs peuvent réserver leurs places à des évènements.

Ce projet est en liens avec le projet [SAE4-01-front] s'occupant de la partie front-end, le visuel du site.
## Auteurs

- DAUNAT Romain: daun0005
- LECOMTE Erwan: leco0107
- MERIEUX Nathan: meri0031
- MONNEY Romain: monn0042
- PARENT Arthur: pare0028

## Installation / Configuration

### Installation

1. Cloner le projet
2. Installer les dépendances Composer avec `composer install`
3. Installer les dépendances JavaScript avec `npm install`
4. Installation du build de tailwindCSS avec `npm run build`

### Configuration

#### Base de données

1. Copiez le fichier `.env` en `.env.local`
2. Modifiez la variable `DATABASE_URL` avec vos informations de connexion


## Scripts Composer
Script de lancement du serveur :

```bash
composer start
```

Script de lancement de tous les tests:

```bash
composer test
```

Script de lancement des tests unitaires codeception:

```bash
composer test:codecept
```

Script de lancement de test phpcsfixer :

- Test sans impact :
```bash
composer test:cs
```
- Test avec impact :
```bash
composer fix:cs
```

### Utilisation

#### Lancement du serveur

```bash
composer start
```
la base de donnée ne peut pas être accédé hors des serveurs de L'IUT.
pour utilisé l'api, s'assuré d'être connécté au VPN de l'IUT.

L'API est accessible à l'adresse `http://localhost:8000/api`

#### Tests

les tests sont utilisable depuis la commande `composer test`
ou `composer test:codecept` pour les tests unitaires codeception

### Docker

#### Dev

Afin de lancer en docker de développement, il suffit d'utiliser la commande suivante dans le dossier racine :

```bash
docker-compose up
```