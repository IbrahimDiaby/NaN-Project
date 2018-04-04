<?php

    $db = new PDO("mysql:host=localhost;dbname=NaN", 'root', 'root');

    if(isset($_POST['mail']) && isset($_POST['password'])){
        if(!empty($_POST['mail']) && !empty($_POST['password'])){
            $req=$db->prepare("SELECT * FROM Visiteurs WHERE Mail = ? AND Password = ?");
            $req->execute(array($_POST['mail'], $_POST['password']));

            $usersHasBeenFound = $req->rowCount();
            if($usersHasBeenFound){
                $user = $req->fetch(PDO::FETCH_OBJ);

                $_SESSION['ID'] = $user->ID;
                $ID = $_SESSION['ID'];
                $_SESSION['username'] = $user->Nom;
                $_SESSION['name'] = $user->Nom;

                $db->exec("UPDATE Visiteurs SET Connected = '1' WHERE ID = $ID");
            }

            if($usersHasBeenFound){
                header('Location: loginsuccess.php');
            }

            else{
                echo "Login Or Password Incorrecte";
            }
        }
    }
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
                    <form action="" method="POST">
                        <label for="mail">
                            <input type="email" name="mail" id="mail" placeholder="Email"/>
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