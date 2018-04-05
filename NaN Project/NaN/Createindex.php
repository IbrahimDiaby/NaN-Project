<?php 
$bdd = new PDO("mysql:host=localhost;dbname=NaN", 'root', 'root');
// $reponse = $bdd->query('SELECT * FROM Visiteurs');
if(!($_POST['name'] == "") && !($_POST['surname'] == "")){
    $requete = $bdd->prepare('INSERT INTO SemiSudo(Nom, Mail, Passwords) VALUES(?, ?, ?)');
    $requete->execute(array(htmlspecialchars($_POST['name'] . " " . $_POST['surname']), htmlspecialchars($_POST['mail']), htmlspecialchars($_POST['password'])));
}

    // setcookie("username", $_POST['username'], time() + 3600*24*30);
    // $_COOKIE['username'] = $_POST['username'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Createheader.css" type="text/css" />
    <link rel="stylesheet" href="Createsection.css" type="text/css" />
    <link rel="stylesheet" href="Createfooter.css" type="text/css" />
    <title>Créer Semi Administrateur</title>
</head>
<body>
    <header>
        <div id="logo">
            <h1><img src="../Images/NaN.png" alt="" title="" class="table-logo"/><a href="../NaN/loginsuccess.php">NaN</a></h1>
        </div>
        <nav>
            <ul>
                <a href="#"><li>Se Déconnecter <img src="#" alt="" class="" /></li></a>
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
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <label for="name">
                    Nom: <br /><input type="text" name="name" id="name" required /><br />
                </label>

                <label for="surname">
                    Prénom: <br /><input type="text" name="surname" id="surname" required /><br />
                </label>

                <label for="mail">
                    Addresse Mail: <br /><input type="text" name="mail" id="mail" required /><br />
                </label>

                <label for="password">
                    Mot De Passe: <br /><input type="password" name="password" id="password" required /><br />
                </label>

                <label for="submit">
                    <input type="submit" value="Confirmer">
                </label>
            </form>

            <div class="link">
                <div class="lister"><a href="listsemisudo.php">Liste Des Semi Sudo</a></div>
                <div class="edit"><a href="edit.php">Modifier</a></div>
                <div class="suppress"><a href="delete.php">Suppression</a></div>
            </div>
        </div>
        
    </section>

    <footer>
            <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>