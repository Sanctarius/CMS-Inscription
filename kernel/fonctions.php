 <?php
	/* AFFICHAGE DU STATUT */
	function statut(){
		include ('./kernel/config.php');
		$checkCHAR = @fsockopen($server_ip, '8085', $ERRNO, $ERRSTR, 1);
		if($checkCHAR) 
		{  
			echo '<font color=green>En ligne</font>';
        }
        else 
		{
			echo '<font color=red>Hors Ligne</font>';
        }
    }
	
	/* AFFICHAGE NOMBRE DE COMPTE */
		include ('./kernel/config.php');
		mysql_select_db($realmd, $connexion) or die (mysql_error());
			$req = mysql_query('SELECT COUNT(username) FROM account');
			$compte= mysql_fetch_row($req) or die(mysql_error());
		$compte[0];
	
	/* AFFICHAGE JOUEURS CONNECTES */
		include ('./kernel/config.php');
		mysql_select_db($characters, $connexion) or die (mysql_error());
			$request = mysql_query("SELECT COUNT(guid) FROM characters WHERE online='1'");
			$personnage = mysql_fetch_row($request) or die (mysql_error());
?>