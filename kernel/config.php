<?php

###################################
#			Connexion			  #
###################################

		$host = 			'127.0.0.1'; 															#IP de la machine hébergent votre Base de données
		$utilisateur = 		'root';																	#Nom d'utilisateur de la base de données
		$mot_de_passe = 	'';																		#Mot de passe de la base de données
		$connexion = mysql_connect($host ,$utilisateur ,$mot_de_passe) or die(mysql_error());		#Ne pas y toucher !
		
###################################
#		  Base de Données		  #
###################################

	$realmd = 'auth';																				#Base de données contenant les comptes
	$characters = 'characters';																		#Base de données contenant les personnages
	
###################################
#		    Informations		  #
###################################

	$site_title = 'NovaGames';																		#Nom de votre Serveur
	$realmlist = '127.0.0.1';																		#Realmlist de votre Serveur
	$expension = '2';																				#Extension de votre Serveur (0 = Vanilla / 1 = BC / 2 = WOTLK / 3 = CATA / 4 = MOP)
	$server_ip = '127.0.0.1';																		#IP de la machine hébergent votre serveur
	
?>