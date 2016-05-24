<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire</title>
</head>
<body>
<form action="ajoutervideo.php" method="POST">

<p>
	<label for="nom">Nom du jeux</label>
	<input type="text" name="nom" id="nom">
</p>
<p>
	<label for="possesseur">Possesseur</label>
	<input type="text" name="possesseur" id="possesseur">
</p>
<p>
	<label for="prix">Prix</label>
	<input type="text" name="prix" id="prix">
</p>

<p>
	<label for="console">Console</label>
	<input type="text" name="console" id="console">
</p>

<p>
	<label for="prix">nbre_joueurs_max</label>
	<input type="text" name="nbre_joueurs_max" id="nbre_joueurs_max">
</p>
<br>
<p>
	<label for="prix">Commentaire</label>
	<input type="text" name="commentaire" id="commentaire">
</p>



<p>
	<input type="submit" value="Valider">
</p>
	


</form>
	
</body>
</html>