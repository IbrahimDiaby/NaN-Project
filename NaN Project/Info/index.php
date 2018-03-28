<?php

    $ID1 = $ID2 = 1;
    $bdd = new PDO('mysql:host=localhost;dbname=NaN', 'root', 'root');

    $requete1 = $bdd->query('SELECT * FROM EquipeZ');    
    $requete2 = $bdd->query('SELECT * FROM EquipeA');
    
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listes Des Etudiants</title>
    <link rel="stylesheet" href="header.css" type="text/css" />
    <link rel="stylesheet" href="section.css" type="text/css" />
    <link rel="stylesheet" href="footer.css" type="text/css" />
    <script src="index.js"></script>
</head>
<body>
    <header>
        <div id="logo">
            <h1><img src="../Images/NaN.png" alt="" title="" class="table-logo"/>NaN - Matières</h1>
        </div>
        <nav>
            <ul>
                <a href="#"><li>Se Déconnecter <img src="#" alt="" class="" /></li></a>
                <a href="#"><li><img src="../Images/admin.png" alt="" class="admin" /></li></a>
                <a href="#"><li><strong>#Nom de l'admin</strong> (Administrateur)</li></a>
                <a href="#"><li>Vous etes connecté en tant que <img src="#" alt="" class="" /></li></a>
            </ul>
        </nav>
    </header>

    <section>
    <div class="title1"><p>Equipe Z</p></div>
    <div class="container">
    <table>
            <tr>
                <th class="column">ID</th>
                <th>Nom & Prénoms</th>
                <th class="column">Age</th>
                <th>Activité</th>
                <th class="column">Groupe</th>
                <th>Localisation</th>
                <th class="column">Modifier</th>
                <th>Supprimer</th>
            </tr>
    <?php

    while($donnees1 = $requete1->fetch()){
?>
            <tr>
                <td class="column"><p><?php echo $ID1 ?></p></td>
                <td><p><?php echo $donnees1['Membres'] ?></p></td>
                <td class="column"><p><?php echo $donnees1['Age'] ?></p></td>
                <td><p><?php echo $donnees1['Activite'] ?></p></td>
                <td class="column"><p><?php echo $donnees1['Groupe'] ?></p></td>
                <td><p><?php echo $donnees1['Localisation'] ?></p></td>
                <td class="column"><p><a href="#"><img src="../Images/edit.png" alt="" title="Modifier" class="edit"/></a></p></td>
                <td><p><a href="#"><img src="../Images/delete.png" alt="" title="supprimer" class="delete"/></a></td>
            </tr>
<?php
$ID1++;   
}
?>
    </div>
    </table>
    <div class="title1"><p>Equipe A<p></div>
    <div class="container">
    <table>
            <tr>
                <th class="column">ID</th>
                <th>Nom & Prénoms</th>
                <th class="column">Age</th>
                <th>Activité</th>
                <th class="column">Groupe</th>
                <th>Localisation</th>
                <th class="column">Modifier</th>
                <th>Supprimer</th>
            </tr>
<?php

    while($donnees2 = $requete2->fetch()){
?>
            <tr>
                <td class="column"><p><?php echo $ID2 ?></p></td>
                <td><p><?php echo $donnees2['Membres'] ?></p></td>
                <td class="column"><p><?php echo $donnees2['Age'] ?></p></td>
                <td><p><?php echo $donnees2['Activite'] ?></p></td>
                <td class="column"><p><?php echo $donnees2['Groupe'] ?></p></td>
                <td><p><?php echo $donnees2['Localisation'] ?></p></td>
                <td class="column"><p><a href="#"><img src="../Images/edit.png" alt="" title="Modifier" class="edit"/></a></p></td>
                <td><p><a href="#"><img src="../Images/delete.png" alt="" title="supprimer" class="delete"/></a></p></td>
            </tr>

<?php

$ID2++;    
}
?>
    </div>
    </table>
<br /><br /><br /><br />
   
    </section>
    
    <footer>
        <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>