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
    <link rel="stylesheet" href="header.css" type="text/css" />
    <link rel="stylesheet" href="section.css" type="text/css" />
    <link rel="stylesheet" href="footer.css" type="text/css" />
    <script src="index.js"></script>
    <title>Informations Groupes</title>
</head>
<body>
    <header>
        <nav>
            <nav class="logo"><img src="../../Images/NaN.png" alt="logo" class="Logo" title="Not A Number CI" /></nav>
            <nav class="textoflogo"><p>NaN Gestion</p></nav>
            <nav class="Admin"><p>Plateforme Admin <img src="../../Images/form.png" alt="" class="form" title="NaN Gestion" /></p></nav>
            <nav class="search-bar"><input type="text" alt="search-tool" class="search-tool" title="Recherche" placeholder="Rechercher"/></nav>
            <nav class="searchlogo"><img src="../../Images/search.png" alt="search" class="search" title="Recherche" /></nav>
            <nav class="logo"><img src="../../Images/NaN.png" alt="logo" class="Logo" title="Not A Number CI" /></nav>
        </nav>
    </header>

    <section>
        <div class="left-aside">

            <div class="presentation">
                <h1>Groupe :</h1>
            </div>
            <div class="containimg">
                <img src="../../Images/NaN.png" alt="Image De Etudiant" class="img" />
            </div>
            <div class="name">
                <p>Nom Groupe</p>
            </div>

            <div class="pages">
                <nav>
                    <h2>Avis</h2>
                    <ul>
                        <li><img src="../../Images/like.png" alt="Like" title="Like" class="like"/></li>
                        <li><img src="../../Images/dislike.png" alt="Dislike" title="Dislike" class="dislike"/></li>
                    </ul>
                </nav>
            </div>
            
            <div class="pages">
                <nav>
                    <h2>Réseaux Sociaux de la NaN</h2>
                    <ul>
                        <li><a href="#"><img src="../../Images/facebook.svg" alt="facebook" title="Facebook" class="facebook"/></li></a>
                        <li><a href="#"><img src="../../Images/discord.svg" alt="discord" title="Discord" class="discord"/></li></a>
                        <li><a href="#"><img src="../../Images/blog.svg" alt="blog" title="Blog" class="blog"/></li></a>
                        <li><a href="#"><img src="../../Images/github.svg" alt="github" title="Github" class="github"/></li></a>
                    </ul>
                </nav>
            </div>
            
            <div class="pages">
                <nav>
                    <ul>
                        <li><a href="#"><img src="../../Images/LinkedIn.png" alt="linkedin" title="LinkedIn" class="linkedin"/></li></a>
                        <li><a href="#"><img src="../../Images/Twitter.png" alt="twitter" title="Twitter" class="twitter"/></li></a>
                        <li><a href="#"><img src="../../Images/YouTube.png" alt="youtube" title="YouTube" class="youtube"/></li></a>
                        <li><a href="#"><img src="../../Images/gmail.png" alt="gmail" title="Gmail" class="gmail"/></li></a>
                    </ul>
                </nav>
            </div>
        </div>
        
        <div class="right-aside">
            <div class="top">
                <h1>Présentation complète du groupe et son esprit</h1>
            </div>
            <div class="bottom">
                <h1>Statistiques du groupe</h1>
            </div>
        </div>
    </section>

    <footer>
        <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>