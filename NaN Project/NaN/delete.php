<?php 
$bdd = new PDO("mysql:host=localhost;dbname=NaN", 'root', 'root');
// $reponse = $bdd->query('SELECT * FROM Visiteurs');
if(!($_POST['id'] == "")){
    $requete = $bdd->prepare("DELETE FROM SemiSudo WHERE ID = ?");
    $requete->execute(array(htmlspecialchars($_POST['id'])));
}

    // header("Location: listsemisudo.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="editheader.css" type="text/css" />
    <link rel="stylesheet" href="editsection.css" type="text/css" />
    <link rel="stylesheet" href="editfooter.css" type="text/css" />
    <title>Supprimer Semi Administrateur</title>
</head>
<body>
    <header>
        <div id="logo">
            <h1><img src="../Images/NaN.png" alt="" title="" class="table-logo"/><a href="../NaN/loginsuccess.php">NaN</a></h1>
        </div>
        <nav>
            <ul>
                <a href="logout.php"><li>Se Déconnecter <img src="#" alt="" class="" /></li></a>
                <a href="#"><li><img src="../Images/admin.png" alt="" class="admin" /></li></a>
                <a href="#"><li><strong>#<?php echo $_COOKIE['username'] ?></strong> (Administrateur)</li></a>
                <a href="#"><li>Vous etes connecté en tant que <img src="#" alt="" class="" /></li></a>
            </ul>
        </nav>
    </header>

    <section>
        <div class="title">
            <div class="divlogo">
                <img src="../Images/NaN.png" alt="" class="logo">
            </div>
        </div>
        <div class="contain">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                <label for="id">
                    ID: <br /><input type="text" name="id" id="id" required /><br />
                </label>

                <label for="submit">
                    <input type="submit" value="Confirmer">
                </label>

            </form>
        </div>
        
    </section>

    <footer>
            <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>