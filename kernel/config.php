<?php

###################################
#			Connexion			  #
###################################

		$host = 			'127.0.0.1'; 															#IP de la machine h�bergent votre Base de donn�es
		$utilisateur = 		'root';																	#Nom d'utilisateur de la base de donn�es
		$mot_de_passe = 	'';																		#Mot de passe de la base de donn�es
		$connexion = mysql_connect($host ,$utilisateur ,$mot_de_passe) or die(mysql_error());		#Ne pas y toucher !
		
###################################
#		  Base de Donn�es		  #
###################################

	$realmd = 'auth';																				#Base de donn�es contenant les comptes
	$characters = 'characters';																		#Base de donn�es contenant les personnages
	
###################################
#		    Informations		  #
###################################

	$site_title = 'NovaGames';																		#Nom de votre Serveur
	$realmlist = '127.0.0.1';																		#Realmlist de votre Serveur
	$expension = '2';																				#Extension de votre Serveur (0 = Vanilla / 1 = BC / 2 = WOTLK / 3 = CATA / 4 = MOP)
	$server_ip = '127.0.0.1';																		#IP de la machine h�bergent votre serveur
	
?>