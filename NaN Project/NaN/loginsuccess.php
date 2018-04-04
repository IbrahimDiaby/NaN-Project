<?php
        $db = new PDO("mysql:host=localhost;dbname=NaN", 'root', 'root');
        session_start();
        $_SESSION['username'] = $_POST['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NaN Gestion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" media="screen" href="loginsuccessheader.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="loginsuccesssection.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="loginsuccessfooter.css" />
    <script src="loginsuccessindex.js"></script>
</head>

<body>
    <header>
        <nav>
            <nav class="logo"><img src="../Images/NaN.png" alt="logo" class="Logo" title="Not A Number CI" /></nav>
            <nav class="textoflogo"><p>NaN Gestion</p></nav>
            <nav class="Admin"><p>Plateforme Admin <img src="../Images/form.png" alt="" class="form" title="NaN Gestion" /></p></nav>
            <nav class="search-bar"><input type="text" alt="search-tool" class="search-tool" title="Recherche" placeholder="Rechercher"/></nav>
            <nav class="searchlogo"><img src="../Images/search.png" alt="search" class="search" title="Recherche" /></nav>
            <nav class="logo"><img src="../Images/NaN.png" alt="logo" class="Logo" title="Not A Number CI" /></nav>
        </nav>
    </header>
    
    <section>
        <nav>
            <ul>
                <li class="connect">
                    Vous etes connecté en tant que : 
                </li>
                
                <li><a href="#">#<?php echo $_SESSION['username'] ?><img src="../Images/form.png" alt="" class="imgSudo_Su" title="Administrateur" /></a>
                    <ul>
                        <li><a href="../semisudo/index.php">Créez un Semi Admin</a></li>
                        <li><a href="../semisudo/edit.php">Modifiez les informations</a></li>
                        <li><a href="../semisudo/delete.php">Supprimer</a></li>
                    </ul>
                </li>

                <li><a href="../Etudiants/index.php">Etudiants <img src="../Images/students.png" alt="" class="students" title="Etudiants" /></a>
                    <ul>
                        <li><a href="../Etudiants/index.php">Créez</a></li>
                        <li><a href="#">Modifiez les informations</a></li>
                        <li><a href="#">Supprimer</a></li>
                    </ul>
                </li>

                <li><a href="../Equipes/index.php">Equipes <img src="../Images/users.png" alt="" class="users" title="Equipes" /></a>
                    <ul>
                        <li><a href="../CreateEquipes/index.php">Créez <img src="../Images/info.png" alt="" class="info" title="Equipe Z Info" /></a></li>
                        <li><a href="#">Ajoutez un étudiant <img src="../Images/info.png" alt="" class="info" title="Equipe A Info" /></a></li>
                        <li><a href="#">Supprimer</a></li>
                    </ul>
                </li>

                <li><a href="#">Equipes Existantes <img src="../Images/users.png" alt="" class="users" title="Equipes" /></a>
                    <ul>
                        <li><a href="../Info/index.php">Equipe Z <img src="../Images/info.png" alt="" class="info" title="Equipe Z Info" /></a></li>
                        <li><a href="../Info/index.php">Equipes A <img src="../Images/info.png" alt="" class="info" title="Equipe A Info" /></a></li>
                    </ul>
                </li>

                <li><a href="../Groupes/index.php">Groupes <img src="../Images/group.png" alt="" class="group" title="Equipes" /></a>
                    <ul>
                        <li><a href="../Groupes/index.php">Créez</a></li>
                        <li><a href="#">Modifiez les informations</a></li>
                        <li><a href="#">Supprimer</a></li>
                    </ul>
                </li>

                <li><a href="../Matieres/index.php">Paramètres <img src="../Images/parameter.png" alt="" class="parameters" title="Paramètres" /></a>
                    <ul>
                        <li><a href="#">Quizz</a></li>
                        <li><a href="#">Projets</a></li>
                        <li><a href="#">Matières</a></li>
                        <li><a href="#">Localisation <img src="../Images/locate.png" alt="" class="located" title="Localisation" /></a></li>
                    </ul>
                </li>

                <li><a href="logout.php">Déconnexion <img src="../Images/logout.png" alt="" class="logout" title="Logout" /></a></li>

            </ul>
        </nav>

        <article>

        <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 12</div>
      <img src="../Images/NaN.png" class="img" />
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">2 / 12</div>
      <img src="../Images/hello.jpg" class="img" />
    </div>
  
    <div class="mySlides fade">
      <div class="numbertext">3 / 12</div>
      <img src="../Images/abidjan.png" class="img" />
    </div>

    <div class="mySlides fade">
            <div class="numbertext">4 / 12</div>
            <img src="../Images/desktop.jpg" class="img" />
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">5 / 12</div>
            <img src="../Images/people.jpg" class="img" />
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">6 / 12</div>
            <img src="../Images/person.jpg" class="img" />
          </div>

          <div class="mySlides fade">
                <div class="numbertext">7 / 12</div>
                <img src="../Images/desktop1.jpg" class="img" />
              </div>
            
              <div class="mySlides fade">
                <div class="numbertext">8 / 12</div>
                <img src="../Images/users.jpg" class="img" />
              </div>
            
              <div class="mySlides fade">
                <div class="numbertext">9 / 12</div>
                <img src="../Images/cadre.jpg" class="img" />
              </div>

              <div class="mySlides fade">
                    <div class="numbertext">10 / 12</div>
                    <img src="../Images/test.jpg" class="img" />
              </div>

              <div class="mySlides fade">
                <div class="numbertext">11 / 12</div>
                <img src="../Images/desk.jpg" class="img" />
              </div>

              <div class="mySlides fade">
            <div class="numbertext">12 / 12</div>
            <img src="../Images/team.jpg" class="img" />
              </div>
  
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  
  <!-- The dots/circles -->
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span> 
    <span class="dot" onclick="currentSlide(5)"></span> 
    <span class="dot" onclick="currentSlide(6)"></span> 
    <span class="dot" onclick="currentSlide(7)"></span> 
    <span class="dot" onclick="currentSlide(8)"></span> 
    <span class="dot" onclick="currentSlide(9)"></span> 
    <span class="dot" onclick="currentSlide(10)"></span> 
    <span class="dot" onclick="currentSlide(11)"></span> 
    <span class="dot" onclick="currentSlide(12)"></span> 
  </div>
        </article>

        <div class="social">
                <ul>
                    <li><a href="#"><img src="../Images/facebook.svg" alt="facebook" title="Facebook" class="facebook"/></li></a>
                    <li><a href="#"><img src="../Images/discord.svg" alt="discord" title="Discord" class="discord"/></li></a>
                    <li><a href="#"><img src="../Images/blog.svg" alt="blog" title="Blog" class="blog"/></li></a>
                    <li><a href="#"><img src="../Images/github.svg" alt="github" title="Github" class="github"/></li></a>
                </ul>
        </div>
    </section>

    <footer>
        <p>Copyright © NaN CI - Tous droits réservés</p>
    </footer>
</body>
</html>