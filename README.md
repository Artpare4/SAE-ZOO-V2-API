# SAE4-01 : API Zoo Parc de Laval

![Static Badge](https://img.shields.io/badge/BUT-S4-teal)
![Static Badge](https://img.shields.io/badge/SAE-401api-green)
![Static Badge](https://img.shields.io/badge/Symfony-6.3-blue)
![Static Badge](https://img.shields.io/badge/Status-In_progress-gold)

Ce projet est le côté back-end/API d'un site de gestion pour un zoo. Il permet de gérer les animaux, les enclos et les événements. Les visiteurs peuvent réserver leurs places pour des événements.

Ce projet est en lien avec le projet [SAE4-01-front] qui s'occupe de la partie front-end, le visuel du site.
## Auteurs

- DAUNAT Romain: daun0005
- LECOMTE Erwan: leco0107
- MERIEUX Nathan: meri0031
- MONNEY Romain: monn0042
- PARENT Arthur: pare0028

## Installation / Configuration

### Installation

1. Clonez le projet
2. Installez les dépendances Composer avec `composer install`
3. Installez les dépendances JavaScript avec `npm install`
4. Installez le build de tailwindCSS avec `npm run build`

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

La base de données ne peut pas être accédée hors des serveurs de l'IUT. 
Pour utiliser l'API, assurez-vous d'être connecté au VPN de l'IUT.

L'API est accessible à l'adresse : [http://localhost:8000/api](http://localhost:8000/api)

#### Tests

les tests sont utilisables depuis la commande `composer test`
ou `composer test:codecept` pour les tests unitaires codeception