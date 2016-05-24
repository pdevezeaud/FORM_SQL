
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>BDD</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-6">
<h1>Ajouter un jeu video</h1>
  <form action="" method="post">
		<p>
			<label for="">Nom</label>
			<input type="text" name="nom" value="">
		</p>

		<p>
			<label for="possesseur">Possesseur</label>
			<input type="text" name="possesseur" value="">
		</p>

		<p>
				<label for="console">Prix</label>
			<input type="text" name="console" value="">
		</p>

		<p>
				<label for="prix">Console</label>
			<input type="text" name="prix" value="">
		</p>

		<p>
				<label for="nbre_joueurs_max">Joueur Max</label>
			<input type="text" name="nbre_joueurs_max" value="">
		</p>

		<p>
				<label for="commentaires">Commentaires</label>
			<input type="text" name="commentaires" value="">
		</p>

		<p>
			<button type="submit" class="btn btn-primary">Validez</button>
		</p>

  </form>
	<div class="row">
	<div class="col-md-8">

	<h3><a href="lire.php">retour vers la liste des vidéos</a></h3>
</div>
</div>

</div>

</div>
</div>

<?php
try
{
	
	$bdd = new PDO('mysql:host=localhost:3306;dbname=jeux_video;charset=utf8', 'root', '');
	
	$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
}
catch (PDOexception $e)
{
	
	die( "Acce base de donnée KO !!");
	
}

if(isset($_POST['nom'])){
	
	
	$nom = $_POST['nom'];
	
	$possesseur = $_POST['possesseur'];
	
	$console = $_POST['console'];
	
	$prix = $_POST['prix'];
	
	$nbre_joueurs_max= $_POST['nbre_joueurs_max'];
	
	$commentaires= $_POST['commentaires'];
	
	
	try
	{
	
		$reponse = $bdd->prepare('INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUE(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)');
		
		
		$state = $reponse->execute(array(
		'nom' => $nom,
		'possesseur' => $possesseur,
		'console' => $console,
		'prix' => $prix,
		'nbre_joueurs_max' => $nbre_joueurs_max,
		'commentaires' => $commentaires
		
		));
		
		if($state ){
			echo 'Le jeu a bien été ajouté !';
		}else{
			echo 'erreur';
		}
		
		
		
		$reponse->closeCursor();
		//termine le traitement de la requete
	}catch (PDOexception $e ){
		
		echo "Erreur dans la requete";
		
	}
	
	
}
//fin de Isset

?>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</body>
</html>
