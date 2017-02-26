Test Novaway
========================

Réalisation d'un catalogue produit pour une entreprise proposant des biens culturels

Instructions
--------------

Mettre à jour les dépedances :

`composer install`

Créer la base de donnée : 

`php bin/console doctrine:database:create`

Mettre à jour la base de donnée : 

`php bin/console d:s:u --force`

Lancer le projet : 

`php bin/console server:run`


Administration
--------------

Accés à l'administration par la route

`/admin`

Identifiants : 
    
    Username : admin
    Password : novaway