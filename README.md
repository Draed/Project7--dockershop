dockershop
==========
A Symfony project created on June 30, 2016, 12:25 pm.

##Description :
Plug and play d'application : Avec docker virtualiser n'importe quel service à moindre coût (cpu/mémoire).

Convertir tous services en applications gràce à docker. A la manière du dockerhub, avec un aspect plus "user-friendly" que "développeur" :

1) Télécharger docker
2) Créer un compte sur la plateforme
3) Télécharger une (ou plusieurs) application sur la web-app
4) Si besoin, paramétrer le service.
5) Fin ! Profiter de votre service (dhcp, dns, cloud, mail, jenkins, redmine, minecraft, ...)

## Développeurs initiaux :

- Arnaud Panapadeatchy as PanArnaud
- Draed as Draed

## langage développement :

PHP : framework Symfony
HTML, CSS : Bulma.io, Font-Awesome
javascript : Angular.js

## environnement de développement :

MAMP : 3.5
PHP :  7.0.0
APache : 2.2.29
Mysql : 5.5.42
curl : 7.43.0

## environnement de production : 

Environnement docker

Tutoriel  : 
- https://blog.webnet.fr/docker-pas-a-pas-sur-une-application-symfony2-part3/
- https://vincent.composieux.fr/article/faire-tourner-une-application-symfony-avec-docker-et-docker-compose

Image docker complète : https://github.com/eko/docker-symfony

## Fonctionnalités :

- Affichage d'un shop d'application (docker) = application disponible en ligne
- Affichage des applications installées en local
- Téléchargement d'une application = Installation d'une image docker (#docker pull)
- Paramètrage du lancement application = lancement des containers docker (#docker run)

## Maquette :

Affichage du shop :
https://dreadperblog.files.wordpress.com/2016/06/index1_thumb.png?w=720&quality=80&strip=info


## Screenshot :

empty for now

## images / explications :

![alt tag](https://raw.githubusercontent.com/Draed/dockershop/master/explain_images/explainshop.png)

