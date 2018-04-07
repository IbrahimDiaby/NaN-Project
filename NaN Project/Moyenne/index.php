<?php
        $bdd = new PDO('mysql:host=localhost;dbname=NaN', 'root', 'root');
        // $send = $bdd->prepare('INSERT INTO MoyenneGroupe(Groupe, Moyenne, Commentaires) VALUES(?, ?, ?)');
        // $send->execute(array(htmlspecialchars($_POST['group']), htmlspecialchars($_POST['moyenne']), htmlspecialchars($_POST['commentaire'])));
        
        $requetetudiantsprojets = $bdd->prepare("SELECT * FROM ProjetsNotesEtudiants");
        $requetgroupesprojets = $bdd->prepare("SELECT * FROM ProjetsNotesGroupes");
        $requetetudiantsquiz = $bdd->prepare("SELECT * FROM EtudiantsNotes");
    header("Location: ");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="list.css" type="text/css" />
    <title>Plateforme Moyenne</title>
</head>
<body>

    <div class="contain">
    <h1>Les Projets De Groupe</h1>
    <table>
        <tr>
            <th class="column">
                ID
            </th>

            <th>
                Groupe
            </th>

            <th class="column">
                Moyenne
            </th>

            <th>
                Appreéciation
            </th>

            <th class="column">
                
            </th>
        </tr>
    </table>
    <?php
        while($list = $requete->fetch()){
    ?>

    
    <table>
        <tr>
            <td class="column">
                <p><?php echo $list['ID'] ?></p>
            </td>

            <td>
                <p><?php echo $list['Nom'] ?></p>
            </td>

            <td class="column">
                <p><?php echo $list['Mail'] ?></p>
            </td>

            <td>
                <p><a href="edit.php">Modifier</a></p>
            </td>

            <td class="column">
                <p><a href="delete.php">Supprimer</a></p>
            </td>
        </tr>
    </table>
    <?php
    }
    ?>
    </div>
    
</body>
</html>