<?php
	require_once('./kernel/config.php');
	require_once('./kernel/fonctions.php');
?>
<html>
	<head>
		<title></title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="cadre_top">
			<div class="statut"><?php echo $site_title; ?> est actuellement <?php statut(); ?>.</div>
			<div class="online">Il y a actuellement <font color="#217798"><?php echo $personnage[0]; ?></font> personnes connectés.</div>
			<div class="compte">Il y a actuellement <font color="#217798"><?php echo $compte[0]; ?></font> comptes créés.</div>
		</div>
		<div class="cadre_realmlist">
			<center>
				<input type="text" class="input_realmlist" value="set realmlist <?php echo $realmlist; ?>" />
			</center>
		</div>
		<?php
			if(isset($_POST['valide']))
			{
				$ndc = mysql_real_escape_string($_POST['pseudo']);
				$mdp = mysql_real_escape_string($_POST['mdp']);
				$mdp2 = mysql_real_escape_string($_POST['mdp2']);
				$mail = mysql_real_escape_string($_POST['email']);
				if($ndc  != NULL) 
				{ 
					if($mdp != NULL)
					{
						if($mdp2 != NULL)
						{
							if($mdp == $mdp2)
							{
								if($mail != NULL)
								{
									mysql_select_db($realmd, $connexion);
										$ip = $_SERVER["REMOTE_ADDR"];
										mysql_query("INSERT INTO account (username, sha_pass_hash,  email, expansion, last_ip) VALUES ('$ndc',SHA1(CONCAT(UPPER('$ndc'),':',UPPER('$mdp'))),'$mail', '$expension', '$ip')") or die ("Erreur SQL");
									echo '
										<div class="cadre_inscription">
											<center>
												Bienvenue sur '. $site_title .' !<br />
												Vous pouvez vous connecter.
											</center>
										</div>
									';
									
								}
								else { echo '<div class="cadre_inscription"><center>Il faut indiquer votre E-Mail !<br /><br /><a href="index.php"><button type="submit2" class="submit">Retour</button></a></center></div>'; }
							}
							else { echo '<div class="cadre_inscription"><center>Les mots de passe ne sont pas identiques !<br /><br /><a href="index.php"><button type="submit2" class="submit">Retour</button></a></center></div>'; }
						}
						else { echo '<div class="cadre_inscription"><center>Il faut retaper votre mot de passe !<br /><br /><a href="index.php"><button type="submit2" class="submit">Retour</button></a></center></div>'; }
					}
					else { echo '<div class="cadre_inscription"><center>Il faut indiquer un mot de passe !<br /><a href="index.php"><button type="submit" class="submit2">Retour</button></a></center></div>'; }
				}
				else { echo '<div class="cadre_inscription"><center>Il faut indiquer un nom de compte !<br /><br /><a href="index.php"><button type="submit" class="submit2">Retour</button></a></center></div>'; }
			}
			else
			{
		?>
		<div class="cadre_inscription">
			<form action="index.php" method="post">
				<center>
					<input type="text" class="input_text" name="pseudo" placeholder="Votre nom de compte" /><br />
					<input type="password" class="input_text" name="mdp" placeholder="Votre mot de passe" /><br />
					<input type="password" class="input_text" name="mdp2" placeholder="Répétez le mot de passe" /><br />
					<input type="text" class="input_text" name="email" placeholder="exemple@mon-email.com" /><br />
					<br />
					<input type="hidden" name="valide" value="1" />
					<button type="submit" class="submit" />Inscription sur <?php echo $site_title; ?> !</button>
				</center>
			</form>
		</div>
		<?php
			}
		?>
	</body>
</html>