
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
  <form action="" method="get">
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
	
	echo "Acce base de donnée KO !!";
	
}

	
	try
	{
		$id = $_GET['id'];
		$reponse = $bdd->query('UPDATE jeux_video SET nom = :nvnom, possesseur = :nvpossesseur, console = :nvconsole, prix = :nvprix, nbre_joueurs_max = nvmax, commentaires =nvcommentaire WHERE id =?');
		
		
		
		$state = $reponse->execute(array(
			
		':nvnom' => $_GET['nom'],
		'nvpossesseur' => $_GET['possesseur'],
		'nvconsole' => $_GET['console'],
		'nvprix' => $_GET['prix'],
		'nvmax' => $_GET['nbre_joueurs_maxnvmax'],
		'nvcommentaires' => $_GET['commentaires'],*/ 
		
		
		));
		
		if($state ){
			echo 'Le jeu a bien été <strong>modifié</strong> !';
			echo $state->rowCount()."Update fait !!";

		}
		else
		{
			echo 'erreur';
		}
		
		
		
		$reponse->closeCursor();
		//termine le traitement de la requete
	}
	
	catch (PDOexception $e )	
	{	
		echo "Erreur dans la requete";		
	}
	
	

//fin de Isset }
/*	
if(isset($_POST['nom'])){
	
	
	$nom = $_GET['nom'];
	
	$possesseur = $_GET['possesseur'];
	
	$console = $_GET['console'];
	
	$prix = $_GET['prix'];
	
	$nbre_joueurs_max= $_GET['nbre_joueurs_max'];
	
	$commentaires= $_GET['commentaires'];

*/

?>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</body>
</html>
