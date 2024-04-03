FROM mariadb:10.2.25

# Copiez le script SQL dans le conteneur
COPY category.sql /docker-entrypoint-initdb.d/

# Point d'entrée pour exécuter le script SQL lors du démarrage du conteneur
CMD ["--init-file", "/docker-entrypoint-initdb.d/category.sql"]
