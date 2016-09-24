Test Technique Pour la societe " Fondative " .
====
Creation d'un blog en utilisant le Framework Symfony 2 pour le backend et AngularJs et Bootstrap 3 le frontend .
Communication entre le frontend el backend se fait par la consommation des webservices REST.

A Symfony project created on September 23, 2016, 4:05 pm By LotfiDev

Tache ajouté.
====
1) integration reconfiguration de la template sous twig
2) creation et configuration du bundle BlogBundle
3) Installtion et configuration du bundle FosJsRouting
4) Lister tous les articles en utilisant angularJs
5) recherche instannnée des articles par "titre article"
6) creation et configuration du bundle ClientBundle
7) installation et configuration du Bundle FOSUserBundle
8) Systeme de commentaire avec angularJs
9) installation et configuration du bundle AdminBundle
10) surchage des view du bundle FOSUserBundle
11) surchage du controller et form "registrationType" pour ne pas avoir des probleme lors du lancement du composer update or install
12) Lister tous les articles, clients, commentaire et ajoutant la fonctionalité "supprimer"
13) partage des droits d'accée entre l'admin et le simple client dans le fichier "security.yml"

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


