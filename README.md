Test Technique Pour la societe " Fondative " .
====
Creation d'un blog en utilisant le Framework Symfony 2 pour le backend et AngularJs et Bootstrap 3 le frontend .
Communication entre le frontend el backend se fait par la consommation des webservices REST.

A Symfony project created on September 23, 2016, 4:05 pm By LotfiDev

Tache ajouté.
====
* integration reconfiguration de la template sous twig
* creation et configuration du bundle BlogBundle
* Installtion et configuration du bundle FosJsRouting
* Lister tous les articles en utilisant angularJs
* recherche instannnée des articles par "titre article"
* creation et configuration du bundle ClientBundle
* installation et configuration du Bundle FOSUserBundle
* Systeme de commentaire avec angularJs
* installation et configuration du bundle AdminBundle
* surchage des view du bundle FOSUserBundle
* surchage du controller et form "registrationType" pour ne pas avoir des probleme lors du lancement du composer update or install
* Lister tous les articles, clients, commentaire et ajoutant la fonctionalité "supprimer"
* partage des droits d'accée entre l'admin et le simple client dans le fichier "security.yml"

Installation.
====

1) Telecharger le depot
* git clone https://github.com/lotfidev/fondativeTestTechnique.git

2) Installation des composants symfony 2
* php composer.phar install
* php composer.phar update

3) Generation des assets ( permet d'utiliser les routes de fosjsrouting)
* php app/console assets:install

4) Creation de la base de donnée
* php app/console doctrine:database:create

5) Generation du schema de la base de donnée
* php app/console doctrine:schema:update --force

6) creation d'un client et le promoter un drois d'admin
* php app/console fos:user:promote "username of client" ROLE_ADMIN

Bundle utilisés.
====
* FOSUserBundle : https://github.com/FriendsOfSymfony/FOSUserBundle/blob/1.2.0/Resources/doc/index.md
* FOSJsRouting : https://github.com/FriendsOfSymfony/FOSJsRoutingBundle


