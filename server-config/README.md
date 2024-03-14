# Configuration du serveur

- Adresse : `10.31.33.119`
- Config : `Ubuntu-Minimal 22.04`
- Espace Disque : `20 GB`

# Accès au serveur

L'accès au serveur se fait en suivant le [tutoriel sur la page de M. Cutrona](http://cutrona/installation-configuration/ubuntu-opennebula/).

- récupérer les clés `id_rsa` et `id_rsa.pub`.

> Nous sommes au courant que cela n'est pas optimal niveau sécurité, mais cela reste plus pratique et dans le cadre de ce projet nous ne risquons pas grand chose.

- déplacer les clés dans le dossier `.ssh`, disponnible depuis le répertoire courant.

```
mv id_rsa .ssh
mv id_rsa.pub .ssh
```

- Si votre clé est accessible par d'autres utilisateurs lancez la commande suivante :

```
setfacl -Rb ~/.ssh
```

- Nous pouvons désormais lancer la machine virtuelle avec cette commande :

```
ssh root@10.31.33.119
```

> La console demande la clé de cryptage du serveur. cette dernière est `saezoo`