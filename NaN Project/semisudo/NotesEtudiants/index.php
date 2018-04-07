<?php

    if(!($_POST['name']) == ""){
        $bdd = new PDO('mysql:host=localhost;dbname=NaN', 'root', 'root');
        $send = $bdd->prepare('INSERT INTO EtudiantsNotes(Nom, Prenom, Matieres, Notes) VALUES(?,?,?,?)');
        $send->execute(array(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['surname']), htmlspecialchars($_POST['matieres']), htmlspecialchars($_POST['mark'])));
    }
    
    
    // trim();
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
    <script src="index.js"></script>
    <title>Notes Etudiants</title>
</head>
<body>
    <header>
        <div id="logo">
            <h1><img src="../Images/NaN.png" alt="" title="" class="table-logo"/>NaN - Matières</h1>
        </div>
        <nav>
            <ul>
                <a href="#"><li>Se Déconnecter <img src="#" alt="" class="" /></li></a>
                <a href="#"><li><strong>#<?php echo $_COOKIE['username'] ?></strong> (Administrateur)</li></a>
                <a href="#"><li><img src="../Images/admin.png" alt="" class="admin" /></li></a>
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
        <br />
        <div class="contain">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                <label for="name">
                    Nom: <br /><input type="text" name="name" id="name" required /><br />
                </label>
                <label for="surname">
                    Prenom: <br /><input type="text" name="surname" id="surname" required /><br />
                </label>
                <label for="matieres">
                    Matières: <br /><input type="text" name="matieres" id="matieres" required /><br />
                </label>
                <label for="mark">
                    Notes:  <br />
                        <select id="mark" name="mark" required>
                            <option value="0">0</option>
                            <option value="100">100</option>
                        </select>
                    <br />
                </label>
                <label for="submit">
                    <input type="submit" name="submit" id="submit" value="Confirmer" />
                </label>
            </form>
        </div>
    </section>  


    <footer>
        <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>