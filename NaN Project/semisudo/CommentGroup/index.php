<?php
    
    setcookie('username', '', time() + 3600*24*30);
    $bdd = new PDO('mysql:host=localhost;dbname=NaN', 'root', 'root');
    $requete = $bdd->query('SELECT * FROM CommentairesGroupes');
    if(!($_POST['group'] == "") && !($_POST['comment'] == "")){
        $send = $bdd->prepare('INSERT INTO CommentairesGroupes(Groupe,Commentaires) VALUES(?,?)');
        $send->execute(array(htmlspecialchars($_POST['group']),htmlspecialchars($_POST['comment'])));
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commentaires Groupes</title>
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
        <article>

        <div class="commentaire">
            <?php
                while($liste = $requete->fetch()){
            ?>
            <p><strong>#<?php echo $_COOKIE['username'] ?></strong> Au Sujet Du Groupe : <strong><?php echo $liste['Groupe'] ?></strong> : <strong><?php echo $liste['Commentaires'] ?></strong></p>
            <?php
    }
            ?>
        </div>
        
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <label for="group">
                    <br /><input type="text" name="group" id="group" placeholder="Nom Du Groupe" required/><br />
                </label>
        
                <label for="comment">
                    <!-- textarea name="comment" id="comment" cols="100" rows="10"   placeholder="Commentez ici"></textarea><br />-->
                    <textarea name="comment" id="comment"  placeholder="Commentez ici" required></textarea><br />
                </label>

                <label for="submit">
                    <input type="submit" name="submit" id="submit" value="Envoyer" />
                </label>
            </form>
        </article>
    </section>
    
    <footer>
        <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>