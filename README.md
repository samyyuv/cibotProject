## About ArtProject

Site vitrine avec un back office, un design et une organisation hiérarchique des informations.


## Installer ArtProject

Après installer Docker dans ubuntu environment, ecrir dans la ligne de commande:

docker-compose build

docker-compose up -d

docker ps 

docker exec -it <*LARAVELAPP CONTAINER'S ID*> bash

exit


Pour avoir la bas de données ramplis:
cat backup.sql | docker exec -i <*MYSQL CONTAINER’S ID*> /usr/bin/mysql -u root --password= cibot


Le projet est prêt pour le voir ü
