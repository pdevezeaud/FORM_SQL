    <?php

    $id = $_GET['id'];

    try {
    //connexion à la base
    $bdd = new PDO('mysql:host=localhost:3306;dbname=jeux_video;charset=utf8', 'root', '');

    } catch (Exception $ex) {

    die('Erreur dans la connexion : ' . $e->getMessage());
    }

    //faire une requête pour récupérer mon jeu vidéo en base de données
    $jeuxvideoResultat = $bdd->query('SELECT * FROM jeux_video WHERE ID ='.$id);

    //parcour de la base
    $jeuxvideo = $jeuxvideoResultat->fetch();


     try {

        if(isset($_POST['nom'])){


            $nom = $_POST['nom'];

            $possesseur = $_POST['possesseur'];

            $console = $_POST['console'];

            $prix = $_POST['prix'];

            $nbre_joueurs_max = $_POST['nbre_joueurs_max'];

            $commentaires = $_POST['commentaires'];

            $id = $_POST['id'];


    $reponse = $bdd->prepare('UPDATE jeux_video SET nom = :nvnom, possesseur = :nvpossesseur, console = :nvconsole, prix = :nvprix, nbre_joueurs_max = nvmax, commentaires =nvcommentaire WHERE id = ?');



        $state = $reponse->execute(array(
            'nvnom' => $_GET['nom'],
            'nvpossesseur' => $_GET['possesseur'],
            'nvconsole' => $_GET['console'],
            'nvprix' => $_GET['prix'],
            'nvmax' => $_GET['nbre_joueurs_maxnvmax'],
            'nvcommentaires' => $_GET['commentaires'],
        ));

        if ($state == true)
         {
            echo 'Le jeu a bien été <strong>modifié</strong> !';
            echo $state->rowCount() . "Update fait !!";
        } 
        else
        {
            echo 'Echec de la mise à jour !!';
        }



        /*$reponse->closeCursor();*/
        //termine le traitement de la requete
        }
        }
        catch (PDOexception $e) 

        {
        die('Erreur dans la connexion : ' . $e->getMessage());    
        }




    ?>

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
                <form action="update.php <?php echo $jeuxvideo['ID'] ?>"  method="get">
                    <p>
                        <label for="">Nom</label>
                        <input type="text" name="nom" value="<?php echo $jeuxvideo['nom']?>">
                    </p>

                    <p>
                        <label for="possesseur">Possesseur</label>
                        <input type="text" name="possesseur" value="<?php echo $jeuxvideo['possesseur']?>">
                    </p>

                    <p>
                        <label for="console">Prix</label>
                        <input type="text" name="console" value="<?php echo $jeuxvideo['prix']?>">
                    </p>

                    <p>
                        <label for="prix">Console</label>
                        <input type="text" name="prix" value="<?php echo $jeuxvideo['console']?>">
                    </p>

                    <p>
                        <label for="nbre_joueurs_max">Joueur Max</label>
                        <input type="text" name="nbre_joueurs_max" value="<?php echo $jeuxvideo['nbre_joueurs_max']?>">
                    </p>

                    <p>
                        <label for="commentaires">Commentaires</label>
                        <input type="text" name="commentaires" value="<?php echo $jeuxvideo['commentaires']?>">
                    </p>

                    <p>
                        <button  type="submit" class="btn btn-primary">Validez</button>
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





 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
</body>
</html>
