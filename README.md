## ArtProject 🎨
<img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"> <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"> <img src="https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E"> <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"> <img src="https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white"> <img src="https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white"> <img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white">  

**Website with admin panel, design and a hierarchical organization of the content.**

## Installer ArtProject 👩‍💻

Après installer Docker dans ubuntu environment, ecrir dans la ligne de commande:
```
git clone https://github.com/samyyuv/artProject.git
cd quizzical
docker-compose build
docker-compose up -d
docker ps 
docker exec -it <*LARAVELAPP CONTAINER'S ID*> bash
exit
```

Pour avoir la bas de données ramplis:
```
cat backup.sql | docker exec -i <*MYSQL CONTAINER’S ID*> /usr/bin/mysql -u root --password= cibot
```

Le projet est prêt pour le voir ü


## Screenshots 📸
#### Site web
<img width="700" alt="image" src="https://user-images.githubusercontent.com/79147788/185413450-39691339-8ff1-4e3c-a34e-099033aa8c80.png">
<img width="700" alt="image" src="https://user-images.githubusercontent.com/79147788/185413707-309a60a1-9414-4a49-801a-120493916ff2.png">
<img width="700" alt="image" src="https://user-images.githubusercontent.com/79147788/185415141-b510650e-b54f-44ce-8343-729a8a1ad11e.png">
<img width="700" alt="image" src="https://user-images.githubusercontent.com/79147788/185414211-61b85855-7456-4796-9853-29606343eebd.png">
<img width="700" alt="image" src="https://user-images.githubusercontent.com/79147788/185414586-8e63e1a5-3431-4fca-a61b-73b4105efeed.png">

#### Admin panel
<img width="700" alt="image" src="https://user-images.githubusercontent.com/79147788/185415769-27f82974-7693-4480-8743-b0320a1fb969.png">
<img width="700" alt="image" src="https://user-images.githubusercontent.com/79147788/185416488-acd6386b-3aa6-4a89-90c7-66174d5f872f.png">
<img width="700" alt="image" src="https://user-images.githubusercontent.com/79147788/185416313-b90e2c13-c3d9-4c21-a35d-cdd6ba4bc6bf.png">


