<?php 

    $bdd = new PDO('mysql:host=localhost;dbname=NaN', 'root', 'root');
    $requete1 = $bdd->query('SELECT Mail FROM EquipeZ');
    $requete2 = $bdd->query('SELECT Mail FROM EquipeA');
    // setcookie("username", $_POST['username'], time() + 3600*24*30);
    // $_COOKIE['username'] = $_POST['username'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matières</title>
    <link rel="stylesheet" href="header.css" type="text/css">
    <link rel="stylesheet" href="section.css" type="text/css" />
    <link rel="stylesheet" href="footer.css" type="text/css" />
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
        <aside class="aside-left">
            <ul>
                <a href="index.php"><li class="table"><img src="../Images/NaN.png" alt="" title="" class="table-logo"/>Tableau De Bord</li></a>
                <a href="#"><li class="module"><img src="../Images/NaN.png" alt="" title="" class="firstmodule-logo"/>Modules</li></a>
                <a href="#"><li class="view"><img src="../Images/NaN.png" alt="" title="" class="view-logo"/>Aperçu</li></a>
                <a href="#"><li class="set"><img src="../Images/NaN.png" alt="" title="" class="set-logo"/>Paramètres</li></a>
            </ul>
        </aside>
        <aside class="aside-right">
            <div id="subject">
                <p><img src="../Images/NaN.png" alt="" title="" class="subject-logo"/>Tableau De Bord</p>
            </div>

            <div class="main1">
                <article class="container">
                    <div class="title">
                        <h1>Quiz <img src="../Images/quiz.png" alt="" title="Quiz" class="quiz-logo"/></h1>
                    </div>
                    <div class="contain">
                        <p>* Semaine 13 - En Cours</p>
                        <p>* Semaine 12 - En Cours</p>
                        <p>* Semaine 11 - En Cours</p>
                        <p>* Semaine 10 - En Cours</p>
                        <p>* Semaine 09 - En Cours</p>
                        <p>* Semaine 08 - En Cours</p>
                        <p>* Semaine 04, 06 & 07- HTML CSS JS PHP</p>
                        <p>* Semaine 03 - Linux - Ubuntu - Debian</p>
                        <p>* Semaine 02 - Certification CCNA</p>
                        <p>* Semaine 01 - Mac OS X</p>
                    </div>
                </article>

                <article class="container">
                    <div class="title">
                        <h1>Projets <img src="../Images/project.png" alt="" title="Projets" class="project-logo"/></h1>
                    </div>
                    <div class="contain">
                        <p>* Projet 09 - En Cours</p>
                        <p>* Projet 08 - En Cours</p>
                        <p>* Projet 07 - En Cours</p>
                        <p>* Projet 06 - En Cours</p>
                        <p>* Projet 05 - En Cours</p>
                        <p>* Projet 04 - En Cours</p>
                        <p>* Projet 03 - En Cours</p>
                        <p>* Projet 02 - En Cours</p>
                        <p>* Projet 01 - Création de la plateforme de gestion des étudiants de NaN</p>
                    </div>
        
                </article>

                <article class="container">
                    <div class="title">
                        <h1>Modules <img src="../Images/module.png" alt="" title="Modules" class="module-logo"/></h1>
                    </div>
                    <div class="contain">
                        <p>* Semaine 13 - En Cours</p>
                        <p>* Semaine 12 - En Cours</p>
                        <p>* Semaine 11 - En Cours</p>
                        <p>* Semaine 10 - En Cours</p>
                        <p>* Semaine 09 - En Cours</p>
                        <p>* Semaine 08 - En Cours</p>
                        <p>* Semaine 04, 06 & 07- HTML CSS JS PHP</p>
                        <p>* Semaine 03 - Linux - Ubuntu - Debian</p>
                        <p>* Semaine 02 - Certification CCNA</p>
                        <p>* Semaine 01 - Mac OS X</p>
                    </div>
                </article>

                <article class="container">
                    <div class="title">
                        <h1>Localisation <img src="../Images/map.png" alt="" title="" class="map-logo"/></h1>
                    </div>
                    <div class="contain">
                        <h1>Aucune localisation pour le moment...</h1>
                    </div>
                </article>
                
                <article class="container">
                    <div class="title">
                        <h1>Messages<img src="../Images/send.png" alt="" title="Messages" class="send-logo"/></h1>
                    </div>
                    <div class="contain">
                        <!-- Mettre le code PhP a la place des mails pour prendre en place les mails de tous les etudiants -->
                        <h1>Envoyez-un mail à :</h1>
                        <p class="team"><a href="mailto:<?php while($equipeZ = $requete1->fetch()){
                            echo $equipeZ['Mail'] . ','; }?>">Equipes Z</a></p>
                        <p class="team"><a href="mailto:<?php while($equipeA = $requete2->fetch()){
                            echo $equipeA['Mail'] . ','; }?>">Equipes A</a></p>
                    </div>
                </article>
                 
                <article class="container">
                    <div class="title">
                        <h1>Commentaires<img src="../Images/comment.png" alt="" title="Commentaires" class="comment-logo"/></h1>
                    </div>
                    <div class="contain">
                        <h1>Mettre un commentaire sur un :</h1>
                        <p class="team"><a href="../CommentGroup/index.php">Groupe</a></p>
                        <p class="team"><a href="../CommentStudent/index.php">Etudiant</a></p>
                    </div>
                </article>
            </div>

        </aside>
    </section>

    <footer>
        <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>