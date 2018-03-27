<?php 
    setcookie("username", $_POST['username'], time() + 3600*24*30);
    // $_COOKIE['username'] = $_POST['username'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion Visiteurs</title>
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
                <a href="../Inscription/index.php"><li><strong>Inscription</strong></li></a>
                <li>Vous n'etes pas inscrit en tant que visiteurs ? <img src="#" alt="" class="" /></li>
            </ul>
        </nav>
    </header>
    <section>
            <main>
                    <div class="divlogo">
                        <img src="../../Images/NaN.png" alt="NaN Logo" class="logo">
                    </div>
                    <form action="../../NaN/index.php" method="POST">
                        <label for="username">
                            <input type="text" name="username" id="username" placeholder="Nom d'utilisateur"/>
                            <br />
                        </label>
                                                        
                        <label for="password">
                            <input type="password" name="password" id="password" placeholder="Mot De Passe">
                                <br />
                            </label>
                                                
                        <label for="submit">
                            <input type="submit" value="Connexion" />
                        </label>
                        
                    </form>
                </main>
    </section>
    <footer>
        <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>