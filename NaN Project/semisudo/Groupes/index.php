<?php 
    $bdd = new PDO("mysql:host=localhost;dbname=NaN", 'root', 'root');
    // $reponse = $bdd->query('SELECT * FROM Visiteurs');

    if(isset($_POST['group'])){
        $requete = $bdd->prepare('INSERT INTO Groupes(Nom, Equipe) VALUES(?, ?)');
        $requete->execute(array(htmlspecialchars($_POST['group']), htmlspecialchars($_POST['equipe'])));
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
    <link rel="stylesheet" href="header.css" type="text/css" />
    <link rel="stylesheet" href="section.css" type="text/css" />
    <link rel="stylesheet" href="footer.css" type="text/css" />
    <title>Création De Groupes</title>
</head>
<body>
    <header>
        <div id="logo">
        <a href="../loginsuccess.php"><h1><img src="../../Images/NaN.png" alt="" title="" class="table-logo"/>NaN</h1></a>
        </div>
        <nav>
            <ul>
            
                <a href="../logout.php"><li>Se Déconnecter <img src="#" alt="" class="" /></li></a>
                <a href="#"><li><img src="../../Images/admin.png" alt="" class="admin" /></li></a>
                <a href="#"><li><strong>#<?php echo $_COOKIE['username'] ?></strong> (Administrateur)</li></a>
                <li>Vous etes connecté en tant que <img src="#" alt="" class="" /></li>
            </ul>
        </nav>
    </header>

    <section>
        <div class="title">
            <div class="divlogo">
                <img src="../../Images/NaN.png" alt="" class="logo">
            </div>
        </div><br />
        <div class="contain">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <label for="title">
                    <h1 class="subject_title">Création de nouveau groupe<img src="../../Images/creategroup.png" alt="" class="creategroup"></h1>
            </label>
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