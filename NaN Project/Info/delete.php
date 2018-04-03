<?php
    // $bdd = new PDO('mysql:host=localhost;dbname=NaN', 'root', 'root');

    // $donnees = $bdd->query('SELECT * FROM EquipeZ');
    // $requete = $donnees->fetch();
    // $id = $_GET['ID'];
    // $donnees1 = $bdd->prepare("DELETE FROM EquipeZ WHERE ID= ?");
    // $donnees1->execute(array($id));

    // header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supprimer</title>
</head>
<body>
    <header>

    </header>
    <section>
        <form action="" method="POST">
            <p>Voulez-vous supprimer <?php //echo $_GET['ID'] ?> de la liste des étudiants de la NaN? </p>
                <input type="submit" value="Supprimer">
                <a href="index.php">Annuler</a>
        </form>
        
    </section>
    <footer>

    </footer>
</body>
</html>