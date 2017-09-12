# Projet IMIE 2017 Océane-Yëlan
 +## Cahier des charges
 +
 +### Présentation du site
 +
 +Objectif du site :
 +C'est une site responsive à l'intention des voyageurs qui désire trouver un hôte en urgence.
 +Important, il s'agit d'un site pour les cas d'urgence, où des personnes en besoin de logement provisoire peuvent trouver potentiellement un hôteau plus près de leurs position géographique. (chez l'habitant, auberge, hôtel,...)
 +Il se doit d'être facile, et rapide d'utilisation.
 +
 +
 +Public visé :
 +- Les voyageurs
 +- les touristes
 +- toutes personnes ayant besoin d'une logement provisoire suite a un imprévu.
 +
 +Le site visera dans un premier temps toute la france métropolitaine.
 +
 +C'est un site qui sera créer sur la base d'un réseaux social.
 +
 +Besoin : Trouver un hébergement en cas d'imprévu. Méme si on la personne n'a pas les moyens de payer une auberge.
 +	(imprévu : si victime d'une arnaque sur B&B, que subitement la personne qui vous hébergeant ne peut plus vous accueillir, qu'une tempéte de neige se déclare !)
 +
 +
 +Réponse au besoin : Du côté de l'utilisateur
 +		    	- une liste d'hôte dans un rayon de 30 km est disponible selon votre géolocalisation.
 +		    	- entrer en contact avec un hôte via une notification de validation, puis échange via mesagerie type email
 +		    	- si hôte toujours ok, il donne un code qui sera modifié à chaque fois qu'il le fournit
 +		    	- l'utilisateur en tre ce code, ce qui lui donne accès à l'adresse de la personne
 +	                 Du côté de l'hôte
 +			- saisir son adresse de domicile pour la base de donnée
 +			- indiquer ses temps de disponibilité (méme si la personne est chez elle, elle est en droit de ne vouloir recevoir personne)
 +Limites :
 +- Sécurité
 +	- risque de cambriolage
 +		- crypter les adresses et un code permet de la décrypter
 +		- le code est modifié aprés chaque entrée (=supprimer puis regénérer un code)
 +	add	- vérifier l'adresse
 +		- riske de doublons
 +			-stocker les codes supprimé dans une liste, et vérifier aprés chaque création de code qu'il ne soit pas déjé présent dans toute les autres listes
 +        - risque de malveillance de la part des hôtes
 +		- pouvoir "véifier" le profil public des utilisateurs
 +		- demander une notification <24h aprés l'aide, sinon alert! personne à prévenir
 +		- commentaires sur l'hôte
 +    	- risque de la part des utilisateurs
 +		- avertissement : cette appli est un "kit de secours", elle ne se substitue pas à une préparation minutieuse, ni à du Couchsurfing proprement dit.
 +		- commentaire à propos de l'utilisateur
 +	- Limiter les simple visiteurs du site
 +	 	- Inscription obligatoire ou lingin AVANT l'accés au site/appli
 +	- Spam
 +		-restriction sur le nombre "d'appel à l'aide" & un par semaine (ce qui encourage à bien se préparer)
 +	- Autres
 +		-rédiger conditions d'utilisation
 +
 +
 +Fonctionnalités du site :
 +- Inscription (questionnaire)
 +	-identité (nom, prenom, nationalité, âge)
 +	-situation (professionnelle, familiale, habitudes de vie(fumeur...), rythme de vie, animaux de Cie)
 +	-résumé (motivation de l'inscription, valeurs, goùts)
 +	-coordonnées masquées (téléphone, adresse domicile, email) "svp vérifiez avant que votre adresse soit recommue par Google maps"
 +- espace privé
 +  -seul l'utilisateur à accès à certaines fonctionnalités
 +	-paramértres du profil
 +	-ses Amis
 +	-sa Blacklist
 +	-historique des personnes accueillies
 +- notification par email
 +	- premier mail, l'hôte peut accepter ou refuser une demande de conversation
 +	- mail de notification à chaque message privé
 +	- fonction "Ami" pour continuer la conversation après l'hébergement, sinon blacklist.
 +    - messagerie
 +    - Implémentation Google maps
 +    - "onglet Aide" + FAQ
 +    -  forum de discussion
 +
 +
 +
 +
 +----------------------------------------------------------------------------------------------------------------
 +Technologies nécessaires :
 +
 +Partie Web :
 +- HTML5 + CSS3 Media Queries -> Base du site (Statique, gestion du design et du responsive
 + - Java Script -> Implémentation API Google Geolocalisation
 + - PHP -> gestion utilisateurs + gestion de base de données
 +- base de donné : MariaDB -> stocker/gérer les comptes d'utilisateurs, les codes pour les adresse de domiciles, (messagerie)
 +
 +
 +----------------------------------------------------------------------------------------------------------------
 +[Modif] Boulot à faire répertorier tous les éléments de la BDD
 +
 +
 +----------------------------------------------------------------------------------------------------------------
 +Pour aller plus loin
 +- multilangue
 +- étendre périmettre all over the world