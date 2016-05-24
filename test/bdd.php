<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>BDD</title>
</head>
<body>
<?php
try {
	$bdd = new PDO('mysql:host=localhost:3306;dbname=jeux_video;charset=utf8', 'root', '');



} catch (Exception $e) {
	die('Erreur : '.$e->getMessage());
}

	$reponse = $bdd->query('SELECT * FROM jeux_video');

	while ($donnee = $reponse->fetch())
  {
/*je ferme la balise php*/
 ?>

<!-- Debut HTML -->
	<p><strong>jeu</strong> : <?php echo $donnee['nom']; ?><br />
	Le possesseur de ce jeu est :<?php echo $donnee['possesseur']; ?>, et il
	le vend à <?php echo $donnee['prix']; ?> euros !<br />
	Ce jeu fonctionne sur <?php echo $donnee['console'];  ?> et on peut y jouer à <?php echo $donnee['nbre_joueurs_max']; ?> a laissé ces commentaire sur <?php echo $donnee['nom']; ?> : <em><?php echo $donnee['commentaires']; ?></em>
	</p>
	<?php
	}

	$reponse->closeCursor(); //termine le traitement de la requete

	?>

</body>
</html>
