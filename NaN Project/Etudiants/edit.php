<?php 
$bdd = new PDO("mysql:host=localhost;dbname=NaN", 'root', 'root');
// $reponse = $bdd->query('SELECT * FROM Visiteurs');
if(!($_POST['name'] == "") && !($_POST['surname'] == "")){
    $requete = $bdd->prepare("UPDATE Etudiants SET Nom = ?, Prenom = ?, Age = ?, Mail = ?, Localisation = ?, Activite = ?, Groupe = ?, Equipe = ? WHERE ID = ?");
    $requete->execute(array(htmlspecialchars($_POST['name']), htmlspecialchars($_POST['surname']), htmlspecialchars($_POST['old']), htmlspecialchars($_POST['mail']), htmlspecialchars($_POST['locate']), htmlspecialchars($_POST['activity']), htmlspecialchars($_POST['group']), htmlspecialchars($_POST['equipe'])));
}

$equipe= htmlspecialchars($_POST['equipe']);
    if(isset ($equipe) && $equipe === "EquipeZ"){
        $requete1 = $bdd->prepare("UPDATE EquipeZ SET Membres = ?, Mail = ?, Age = ?, Localisation = ?, Groupe = ?, Activite = ? WHERE ID = ?");
        $requete1->execute(array(htmlspecialchars($_POST['name'] . " " . $_POST['surname']), htmlspecialchars($_POST['mail']), htmlspecialchars($_POST['old']), htmlspecialchars($_POST['locate']), htmlspecialchars($_POST['group']), htmlspecialchars($_POST['activity'])));
    }
    
    else if(isset ($equipe) && $equipe === "EquipeA"){
        $requete2 = $bdd->prepare("UPDATE EquipeA SET Membres = ?, Mail = ?, Age = ?, Localisation = ?, Groupe = ?, Activite = ? WHERE ID = ?");
        $requete2->execute(array(htmlspecialchars($_POST['name'] . " " . $_POST['surname']), htmlspecialchars($_POST['mail']), htmlspecialchars($_POST['old']), htmlspecialchars($_POST['locate']), htmlspecialchars($_POST['group']), htmlspecialchars($_POST['activity'])));
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
    <link rel="stylesheet" href="editheader.css" type="text/css" />
    <link rel="stylesheet" href="editsection.css" type="text/css" />
    <link rel="stylesheet" href="editfooter.css" type="text/css" />
    <script src="edit.js"></script>
    <title>Modifier Etudiants</title>
</head>
<body>
    <header>
        <div id="logo">
            <h1><img src="../Images/NaN.png" alt="" title="" class="table-logo"/><a href="../NaN/loginsuccess.php">NaN</a></h1>
        </div>
        <nav>
            <ul>
                <a href="logout.php"><li>Se Déconnecter <img src="#" alt="" class="" /></li></a>
                <li><img src="../Images/admin.png" alt="" class="admin" /></li>
                <a href="#"><li><strong>#<?php echo $_SESSION['username'] ?></strong> (Administrateur)</li></a>
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
        <div class="contain">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
            
                <label for="id">
                    ID: <br /><input type="text" name="id" id="id" required /><br />
                </label>

                <label for="name">
                    Nom: <br /><input type="text" name="name" id="name" required /><br />
                </label>

                <label for="surname">
                    Prénom: <br /><input type="text" name="surname" id="surname" required /><br />
                </label>

                <label for="old">
                    Age: <br /><select name="old" id="old" required>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>21</option>
                        <option>22</option>
                        <option>23</option>
                        <option>24</option>
                        <option>25</option>
                    </select><br />
                </label>

                <label for="mail">
                    Addresse Mail: <br /><input type="text" name="mail" id="mail" required /><br />
                </label>

                <label for="locate">
                    Localisation: <br /><input type="text" name="locate" id="locate" required /><br />
                </label>

                <label for="activity">
                    Activité: <br /><select name="activity" id="activity" required>
                            <option value="Etudiants">Etudiants</option>
                            <option value="Travailleurs">Travailleurs</option>
                            <option value="other">Autres</option>
                            </select><br />
                </label>

                <label for="equipe">
                    Equipes: <br /><select name="equipe" id="equipe" required>
                            <option value="EquipeZ">Equipe Z</option>
                            <option value="EquipeA">Equipe A</option>
                            </select><br />
                </label>

                <label for="group">
                    Groupe: <br /><select name="group" id="group" required>
                    <option value="CodeRoom">CodeRoom</option>
                    <option value="Genesis">Genesis</option>
                    <option>Groupe C</option>
                    <option>Groupe D</option>
                    <option>Groupe E</option>
                    <option>Groupe F</option>
                    <option>Groupe G</option>
                    <option>Groupe H</option>
                    <option>Groupe I</option>
                    <option>Groupe J</option>
                    <option>Groupe K</option>
                </select><br />
                </label>

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