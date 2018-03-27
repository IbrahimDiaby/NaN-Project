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
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet">
    <link rel="stylesheet" href="header.css" type="text/css" />
    <link rel="stylesheet" href="section.css" type="text/css" />
    <link rel="stylesheet" href="footer.css" type="text/css" />
</head>
<body>
    <main>
        <form action="../NaN/index.php" method="POST">
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