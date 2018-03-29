<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste Equipe</title>
    <link rel="stylesheet" href="header.css" type="text/css" />
    <link rel="stylesheet" href="section.css" type="text/css" />
    <link rel="stylesheet" href="footer.css" type="text/css" />
    <script src="index.js"></script>
</head>
<body>
    <header>
        <div id="logo">
            <h1><a href="../NaN/index.php"><img src="../Images/NaN.png" alt="" title="" class="table-logo"/>NaN - Matières</a></h1>
        </div>
        <nav>
            <ul>
                <a href="#"><li>Se Déconnecter <img src="#" alt="" class="" /></li></a>
                <a href="#"><li><img src="../Images/admin.png" alt="" class="admin" /></li></a>
                <li><strong>#<?php echo $_COOKIE['username'] ?></strong> (Administrateur)</li>
                <li>Vous etes connecté en tant que <img src="#" alt="" class="" /></li>
            </ul>
        </nav>
    </header>

    <section>

        <div class="bigcontainer">
                <h1>La Liste Des Groupes</h1>
                <article>
                    <a href="#"><div class="group"></div></a>
                    <a href="#"><div class="group"></div></a>
                    <a href="#"><div class="group"></div></a>
                </article>
        
                <div class="name">
                    <div><p>Groupe A</p></div>
                    <div><p>Groupe B</p></div>
                    <div><p>Groupe C</p></div>
                </div>
        
                <article>
                    <a href="#"><div class="group"></div></a>
                    <a href="#"><div class="group"></div></a>
                    <a href="#"><div class="group"></div></a>
                </article>
        
                <div class="name">
                        <div><p>Groupe D</p></div>
                        <div><p>Groupe E</p></div>
                        <div><p>Groupe F</p></div>
                </div>
        
                <article>
                    <a href="#"><div class="group"></div></a>
                    <a href="#"><div class="group"></div></a>
                    <a href="#"><div class="group"></div></a>
                </article>
        
                <div class="name">
                        <div><p>Groupe H</p></div>
                        <div><p>Groupe I</p></div>
                        <div><p>Groupe J</p></div>
                </div>
        
                <article>
                    <a href="#"><div class="group"></div></a>
                    <a href="#"><div class="group"></div></a>
                    <a href="#"><div class="group"></div></a>
                </article>
        
                <div class="name">
                        <div><p>Groupe K</p></div>
                        <div><p>Groupe L</p></div>
                        <div><p>Groupe M</p></div>
                </div>
        </div>
    </section>

    <footer>
        <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>