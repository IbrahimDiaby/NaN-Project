<?php 
    if(!($_POST['etudgroup'] == "")){
        $bdd = new PDO('mysql:host=localhost;dbname=NaN;', 'root', 'root');
        $requete = $bdd->prepare('INSERT INTO BonusMalus(EtudiantsGroupes, BonusMalus, MotifsBonusMalus) VALUES(?, ?, ?)');
        $requete->execute(array(htmlspecialchars($_POST['etudgroup']), htmlspecialchars($_POST['bonusmalus']), htmlspecialchars($_POST['motifs'])));
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
    <title>Bonus/Malus</title>
    <script src="index.js"></script>
    <link rel="stylesheet" href="header.css" type="text/css" />
    <link rel="stylesheet" href="section.css" type="text/css" />
    <link rel="stylesheet" href="footer.css" type="text/css" />
</head>
<body>
    <header>
        <div id="logo">
            <h1><img src="../Images/NaN.png" alt="" title="" class="table-logo"/>NaN</h1>
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
            <br />
            <div class="contain">
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <label for="etudgroup">
                        Etudiants/Groupes: <br /><input type="text" name="etudgroup" id="etudgroup" required /><br />
                    </label>
                    
                    <label for="bonusmalus">
                        Bonus/Malus: <br />
                        <select name="bonusmalus" id="bonusmalus" required>
                            <option value="+1">+1</option>
                            <option value="-1">-1</option>
                        </select>
                        <br />
                    </label>
    
                    <label for="motifs">
                        Motifs: <br />
                        <textarea name="motifs" id="motifs" placeholder="Commentaire" required></textarea>
                        <br />
                    </label>
    
                    <label for="submit">
                        <input type="submit" name="submit" id="submit" value="Commenter" />
                    </label>
                </form>
            </div>
            
        </section>
        
    <footer>
            <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>