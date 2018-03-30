<?php

    $bdd = new PDO('mysql:host=localhost;dbname=NaN', 'root', 'root');

    $requete1 = $bdd->query('SELECT * FROM EquipeZ');    
    $requete2 = $bdd->query('SELECT * FROM EquipeA');
    $delete1 = $bdd->query("DELETE FROM EquipeZ WHERE ID=$_POST[index1]");
    $delete2 = $bdd->query("DELETE FROM EquipeA WHERE ID=$_POST[index2]");
    
    if(isset($_GET['ID1'])){
        $ID1 = $_GET['ID1'];
        $supp1 = $bdd->query("DELETE FROM EquipeZ WHERE ID=$ID1");
    }
    
    if(isset($_GET['ID2'])){
        $ID2 = $_GET['ID2'];
        $supp2 = $bdd->query("DELETE FROM EquipeA WHERE ID=$ID2");
    }
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
                <li><img src="../Images/admin.png" alt="" class="admin" /></li>
                <li><strong>#<?php $_COOKIE['name'] ?></strong> (Administrateur)</li>
                <li>Vous etes connecté en tant que <img src="#" alt="" class="" /></li>
            </ul>
        </nav>
    </header>

    <section>
    <div class="title1"><p>Equipe Z</p></div>
    <div class="container">
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
    $ID1 = $_GET['ID1'];
?>

            <tr>
                <td class="column"><p><?php echo $donnees1['ID'] ?></p></td>
                <td><p><?php echo $donnees1['Membres'] ?></p></td>
                <td class="column"><p><?php echo $donnees1['Age'] ?></p></td>
                <td><p><?php echo $donnees1['Activite'] ?></p></td>
                <td class="column"><p><?php echo $donnees1['Groupe'] ?></p></td>
                <td><p><?php echo $donnees1['Localisation'] ?></p></td>
                <td class="column"><p><a href="#"><img src="../Images/edit.png" alt="" title="Modifier" class="edit"/></a></p></td>
                <td><p class="suppress"><a href="../Info/index.php?ID1=$ID1">X</a></p></td>
            </tr>
<?php
}
?>
    </div>
    </div>
    </table>
    
    <div class="title1"><p>Equipe A<p></div>
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
        $ID2 = $_GET['ID2'];
?>

            <tr>
                <td class="column"><p><?php echo $donnees2['ID'] ?></p></td>
                <td><p><?php echo $donnees2['Membres'] ?></p></td>
                <td class="column"><p><?php echo $donnees2['Age'] ?></p></td>
                <td><p><?php echo $donnees2['Activite'] ?></p></td>
                <td class="column"><p><?php echo $donnees2['Groupe'] ?></p></td>
                <td><p><?php echo $donnees2['Localisation'] ?></p></td>
                <td class="column"><p><a href="#"><img src="../Images/edit.png" alt="" title="Modifier" class="edit"/></a></p></td>
                <td><p class="suppress"><a href="../Info/index.php?ID2=$ID2">X</a></p></td>
            </tr>

<?php
  
}
?>
    </table>
<br /><br /><br /><br />
   
    <div class="sup">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            <label for="index1">
                Entrer l'index de l'étudiant à supprimer dans l'équipe Z:<br /><input type="text" name="index1" id="index1" class="index"/><br />
            </label>

            <label for="index2">
                Entrer l'index de l'étudiant à supprimer dans l'équipe A:<br /><input type="text" name="index2" id="index2" class="index"/><br />
            </label>
            <label for="supp">
                <input type="submit" value="Supprimer" />
            </label>
            
        </form>
    </div>

    </section>
    
    <footer>
        <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>