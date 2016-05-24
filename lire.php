<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>BDD</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
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
<div class="container">
     <div class="row">
         <div class="col-lg-12">
       <table class="table table-hover" >
           
       <caption class="text-center"><h1>JEUX VIDEO A LA VENTE</h1></caption>           

       <tr class="success">
			    <th>Nom</th>
			    <th>Possesseur</th>
			    <th>Prix</th>
			    <th>console</th>
		            <th>Joueur Max</th>
		            <th>Commentaires</th>			   
		   </tr>

           
		   <tbody>
			   <tr>
				   <td><a href="update.php?id=<?php echo $donnee['ID'] ?>"> <?php echo $donnee['nom']; ?></td>
				   <td><?php echo $donnee['possesseur']; ?></td>
				   <td><?php echo $donnee['prix']; ?></td>
				   <td><?php echo $donnee['console']; ?></td>
                                   <td><?php echo $donnee['nbre_joueurs_max']; ?></td>
				   <td><?php echo $donnee['commentaires']; ?></td>
			   </tr>
		   </tbody>
	 </table>
         
     </div>
    </div>
</div>	
            
                    
<<!-- FIN HTML -->   
      
	
	<?php
	}

	$reponse->closeCursor(); //termine le traitement de la requete
	
	?>

	<h3><a href="ecrire.php">Enregistrez un jeux !</a></h3>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</body>
</html>
