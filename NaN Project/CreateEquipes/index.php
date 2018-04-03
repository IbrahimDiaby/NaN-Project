<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "NaN";

$equipe = htmlspecialchars(stripslashes(trim($_POST['team'])));

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE $equipe (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Membres VARCHAR(255) NOT NULL,
Mail VARCHAR(255) NOT NULL,
Age INT(11),
Localisation VARCHAR(255),
Groupe VARCHAR(255),
Activite VARCHAR(255)
)";

if ($conn->query($sql) === TRUE) {
    $phrase = "Table $equipe created successfully";
} else {
    $phrase = "Error creating table: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Creation Equipe</title>
    <script src="index.js"></script>
    <link rel="stylesheet" href="header.css" type="text/css" />
    <link rel="stylesheet" href="section.css" type="text/css" />
    <link rel="stylesheet" href="footer.css" type="text/css" />
</head>
<body>
    <header>
        <div id="logo">
            <h1><img src="../Images/NaN.png" alt="" title="" class="table-logo"/>NaN - Matières</h1>
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
        </div><br />
        <div class="contain">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <label for="title">
                    <h1 class="subject_title">Création de nouvelle Equipe<img src="../Images/creategroup.png" alt="" class="creategroup"></h1>
            </label>
                <label for="team">
                        Nom de l'équipe : <br /><input type="text" name="team" id="team" required /><br />
                </label>
                <p>NB: Aucune espace n'est toléré</p>
                
                <label for="submit">
                    <input type="submit" value="Confirmer">
                </label>
            </form>
        </div>
        
    </section>

    <footer>
            <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>