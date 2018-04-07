<?php 
$bdd = new PDO("mysql:host=localhost;dbname=NaN", 'root', 'root');
// $reponse = $bdd->query('SELECT * FROM Visiteurs');
if(!($_POST['group'] == "") && !($_POST['equipe'] == "")){
    $equipe= htmlspecialchars($_POST['equipe']);

    if(isset($equipe) && $equipe == "EquipeZ"){
        $requetedelete1 = $bdd->prepare("DELETE FROM EquipeA WHERE Nom = ?");
        $requetedelete1->execute(array(htmlspecialchars($_POST['group'])));
        $requete1 = $bdd->prepare('INSERT INTO Groupes(Nom, Equipe) VALUES(?, ?)');
        $requete1->execute(array(htmlspecialchars($_POST['group']), htmlspecialchars($_POST['equipe'])));
    }
    
    else if(isset($equipe) && $equipe == "EquipeA"){
        $requetedelete2 = $bdd->prepare("DELETE FROM EquipeZ WHERE Nom = ?");
        $requetedelete2->execute(array(htmlspecialchars($_POST['group'])));
        $requete2 = $bdd->prepare('INSERT INTO Groupes(Nom, Equipe) VALUES(?, ?)');
        $requete2->execute(array(htmlspecialchars($_POST['group']), htmlspecialchars($_POST['equipe'])));
        
    }
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
    <link rel="stylesheet" href="editheader.css" type="text/css" />
    <link rel="stylesheet" href="editsection.css" type="text/css" />
    <link rel="stylesheet" href="editfooter.css" type="text/css" />
    <script src="edit.js"></script>
    <title>Basculer Un Groupe Dans Une Autre Equipe</title>
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
                <a href="#"><li><strong>#<?php echo $_SESSION['username'] ?></strong> (Administrateur)</li></a>
                <li>Vous etes connecté en tant que <img src="#" alt="" class="" /></li>
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

                <label for="group"> 
                        Nom du groupe : <br /><input type="text" name="group" id="group" required /><br />
                </label>

                <label for="equipe">
                        Equipes: <br /><select name="equipe" id="equipe" required>
                            <option>Equipe Z</option>
                            <option>Equipe A</option>
                        </select><br />
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