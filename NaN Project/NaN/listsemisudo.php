<?php
    $bdd = new PDO('mysql:host=localhost;dbname=NaN', 'root', 'root');
    $requete = $bdd->query("SELECT * FROM SemiSudo");
    
    // $reponse = $bdd->query('SELECT * FROM Visiteurs');
    if(!($_POST['id'] == "")){
    $requete1 = $bdd->prepare("DELETE FROM SemiSudo WHERE ID = ?");
    $requete1->execute(array(htmlspecialchars($_POST['id'])));
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="list.css" type="text/css" />
    <title>Liste Semi-Admin</title>
</head>
<body>

    <div class="contain">

    <table>
        <tr>
            <th class="column">
                ID
            </th>

            <th>
                Nom
            </th>

            <th class="column">
                Mail
            </th>

            <th>
                Modifier
            </th>

            <th class="column">
                Supprimer
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