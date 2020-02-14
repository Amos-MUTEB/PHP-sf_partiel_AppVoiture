# PHP-sf_partiel_AppVoiture
Examen théorique ( Réponses)

1. Qu'est-ce qu'un container de services ? Quel est son rôle ?
## Un container de services est Une entité Symfony qui contient tous les services de l'application. ces services peuvent être des tâche dans l'objet controller, repository, ... app/config/services.yml ou dans l'un des les bundles installés.

## Le conteneur de service sait instancier ces services et garde une référence afin qu'ils n'aient pas à être instanciés deux fois. Si un service a des dépendances, il les instanciera aussi.

2. Quelle est la différence entre les commandes make:entity et make:user lorsqu'on utilise la console Symfony ?
## make:entity  nous crée une entité qui peut être un repository pour la relation entre le template et la base, un controller pour la redirection 
## make:user cette commande nous crée toutes les dépendance nous permettant de pouvoir crée un utilisateur dans la base

3. Quelle commande utiliser pour charger les fixtures dans la base de données ?
## php bin/console doctrine:fixtures:load
4. Résumez de manière simple le fonctionnement du système de versions "Semver"
## SEMVER est un système qui nous permet de faire le versionning des package. lien : https://jubianchi.github.io/semver-check/#/
## Il nous donne le numéro de Version majeur, version mineur, patch ( correction de bugs, sécurité )

5. Qu'est-ce qu'un Repository ? A quoi sert-il ?
## Un repository est une Entité qui nous permet de définir des méthodes qui vont nous permettre de communiquer avec la base de donnée

6. Quelle commande utiliser pour voir la liste des routes ?
## php bin/console debug:router

7. Dans un template Twig, quelle variable globale permet d'accéder à la requête courante, l'utilisateur courant, etc...?
##  {{ dump(app.user) }}

8. Pour mettre à jour la structure de la base de données, quelles sont les 2 possibilités que nous avons abordées en cours ?
## php bin/console doctrine:schema:update --dump-sql 
## php bin/console doctrine:schema:update --force

9. Quelle commande permet de créer une classe de contrôleur ?
## php bin/console make:controller

10. Décrivez succintement l'outil Flex de Symfony
## l'outil flex nous permet de gérer les applications Symfony. Il est basé sur les recettes Symfony, qui sont un ensemble d'instructions automatisées pour intégrer des packages dans les applications Symfony. 
## lien vers les dépôts : https://flex.symfony.com/