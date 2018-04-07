<?php

    $bdd = new PDO('mysql:host=localhost;dbname=NaN', 'root', 'root');

    $requete = $bdd->query('SELECT * FROM Groupes');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listes Des Groupes</title>
    <link rel="stylesheet" href="header.css" type="text/css" />
    <link rel="stylesheet" href="section.css" type="text/css" />
    <link rel="stylesheet" href="footer.css" type="text/css" />
    <script src="index.js"></script>
</head>
<body>
    <header>
        <div id="logo">
            <h1><img src="../Images/NaN.png" alt="" title="" class="table-logo"/><a href="../NaN/loginsuccess.php">NaN</a></h1>
        </div>
        <nav>
            <ul>
                <a href="../NaN/logout.php"><li>Se Déconnecter <img src="#" alt="" class="" /></li></a>
                <li><img src="../Images/admin.png" alt="" class="admin" /></li>
                <li><strong>#<?php $_COOKIE['name'] ?></strong> (Administrateur)</li>
                <li>Vous etes connecté en tant que <img src="#" alt="" class="" /></li>
            </ul>
        </nav>
    </header>

    <section>
    <div class="title1"><p>Les Groupes</p></div>
    <div class="container">
    <div class="container">
    <table>
            <tr>
                <th class="column">ID</th>
                <th>Groupe</th>
                <th class="column">Equipe</th>
                <th>Modifier</th>
                <th class="column">Supprimer</th>
            </tr>
    <?php
    
    while($donnees = $requete->fetch()){
?>

            <tr>
                <td class="column"><p><?php echo $donnees['ID'] ?></p></td>
                <td><p><?php echo $donnees['Nom'] ?></p></td>
                <td class="column"><p><?php echo $donnees['Equipe'] ?></p></td>
                <td><p><a href="../Groupes/edit.php"><img src="../Images/edit.png" alt="" title="Modifier" class="edit"/></a></p></td>
                <td class="column"><p class="suppress"><a href="../Groupes/delete.php">X</a></p></td>
            </tr>
<?php
}
?>
    </table>
    </section>
    <br /><br /><br /><br /><br />
    <footer>
        <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>