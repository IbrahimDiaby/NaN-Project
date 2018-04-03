<?php

    $db = new PDO("mysql:host=localhost;dbname=NaN", 'root', 'root');

    if(isset($_POST['username']) && isset($_POST['password'])){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $req=$db->prepare("SELECT * FROM Sudo WHERE Nom = ? AND Passwords = ?");
            $req->execute(array($_POST['username'], $_POST['password']));

            $usersHasBeenFound = $req->rowCount();
            if($usersHasBeenFound){
                $user = $req->fetch(PDO::FETCH_OBJ);

                $_SESSION['ID'] = $user->ID;
                $ID = $_SESSION['ID'];
                $_SESSION['username'] = $user->Nom;
                $_SESSION['name'] = $user->Nom;

                $db->exec("UPDATE Sudo SET Connected = '1' WHERE ID = $ID");
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
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet">
    <link rel="stylesheet" href="loginheader.css" type="text/css" />
    <link rel="stylesheet" href="loginsection.css" type="text/css" />
    <link rel="stylesheet" href="loginfooter.css" type="text/css" />
</head>
<body>
    <main>
        <form action="" method="POST">
            <label for="username">
                <input type="text" name="username" id="username" placeholder="Admin" required //>
                <br />
            </label>
                                            
            <label for="password">
                <input type="password" name="password" id="password" placeholder="Mot De Passe" required />
                    <br />
                </label>
                                    
            <label for="submit">
                <input type="submit" value="Connexion" />
            </label>
        </form>
    </main>
</body>
</html>