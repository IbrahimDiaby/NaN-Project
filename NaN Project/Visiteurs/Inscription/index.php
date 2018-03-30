<?php 

if(!($_POST['name'] == "")){
    $bdd = new PDO("mysql:host=localhost;dbname=NaN", 'root', 'root');
    // $reponse = $bdd->query('SELECT * FROM Visiteurs');
    $requete = $bdd->prepare('INSERT INTO Visiteurs(Nom, Prenoms, Mail, Password, Activite, Localisation)
    VALUES(?, ?, ?, ?, ?, ?)');
    $requete->execute(array(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['surname']),htmlspecialchars($_POST['mail']),htmlspecialchars($_POST['password']),htmlspecialchars($_POST['activity']),htmlspecialchars($_POST['locate'])));

    setcookie("username", $_POST['username'], time() + 3600*24*30);
    $_COOKIE['username'] = $_POST['username'];
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscriptions Visiteurs</title>
    <link rel="stylesheet" href="header.css" type="text/css">
    <link rel="stylesheet" href="section.css" type="text/css">
    <link rel="stylesheet" href="footer.css" type="text/css">
    <script src="index.js"></script>
</head>
<body>
    <header>
        <div id="logo">
            <h1><img src="../../Images/NaN.png" alt="" title="" class="table-logo"/>NaN - Matières</h1>
        </div>
        <nav>
            <ul>
                <a href="../Connexion/index.php"><li><strong>Connexion</strong></li></a>
                <li>Vous etes deja inscrit en tant que visiteurs ? <img src="#" alt="" class="" /></li>
            </ul>
        </nav>
    </header>
    <section>
        <main>
            <div class="divlogo">
                    <img src="../../Images/NaN.png" alt="" class="logo">
            </div><br />
            
            <div class="contain">
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <label for="name">
                        Nom: <br /><input type="text" name="name" id="name" required/><br />
                        </label>
                        
                        <label for="surname">
                            Prénom: <br /><input type="text" name="surname" id="surname" required/><br />
                        </label>
                        
                        <label for="mail">
                            Mail: <br /><input type="text" name="mail" id="mail" required/><br />
                        </label>
                        
                        <label for="password">
                            Mot De Passe: <br /><input type="password" name="password" id="password" required/><br />
                        </label>

                        <label for="locate">
                            Localisation: <br /><input type="text" name="locate" id="locate" required/><br />
                        </label>
                        
                        <label for="activity">
                            Activité: <br /><select name="activity" id="activity">
                                <option value="Etudiants">Etudiants</option>
                                <option value="Travailleurs">Travailleurs</option>
                                <option value="other">Autres</option>
                            </select><br />
                        </label>
                        
                        <label for="submit">
                            <input type="submit" value="Inscription">
                        </label>
                        
                </form>
            </div>
        </main>
    </section>

    <footer>
        <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>