<!-- <?php
    $messageConfirmation = "";
    require_once ("assets/php/lang/local.php");
?> -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>

    <!-- Link to Css -->
    <link rel="stylesheet" href="/assets/style/style.css">

    <!-- Responsive Css -->
    <link rel="stylesheet" href="/assets/style/responsive.css">

    <!-- Box Icons -->
    <link rel="stylesheet" href="/assets/boxicons-2.1.4/css/boxicons.min.css">

    <!-- Swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <!-- Header -->
     <?php include "assets/php/header.php"?>
    
     <!-- La page principale -->
     <main>
        <!-- [ ------------ Home Begin ------------] -->
         <section class="home" id="home">
            <div class="home-content">
                <h3><?php echo $STRAD["salut"]?></h3>
                <h1><span>Ny Haja</span> Andrianiaina</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing<br>elit. Placeat consequatur .
                </p>
                <div class="social-media">
                    <a href="https://www.instagram.com/andr_nirina/"><i class="bx bxl-instagram-alt"></i></a>
                    <a href="https://www.facebook.com/Nyhaja03"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.linkedin.com/in/ny-haja-andrianiaina-38b490280/"><i class="bx bxl-linkedin"></i></a>
                    <a href="https://github.com/NyHaja"><i class="bx bxl-github"></i></a>
                </div>

            <a href="#" class="btn"><?php echo $STRAD["cv"]?></a>
            </div>

            <div class="hobby-container">
                <div class="hobby-box">
                    <div class="hobby" style="--i:0;">
                        <i class='bx bx-code-alt'></i>
                        <h3>HardWare</h3>
                    </div>
                    <div class="hobby" style="--i:1;">
                        <i class='bx bx-tennis-ball' ></i>
                        <h3>SoftWare</h3>
                    </div>
                    <div class="hobby" style="--i:2;">
                        <i class='bx bx-network-chart' ></i>
                        <h3>Réseau IP</h3>
                    </div>
                    <div class="hobby" style="--i:3;">
                        <i class='bx bx-book' ></i>
                        <h3>Lire des Mangas</h3>
                    </div>
                    <div class="circle"></div>
                </div>
                <div class="overlay"></div>
            </div>

            <div class="home-img">
                <img src="/assets/images/portfolio.png" alt="">
            </div>
        </section>
        <!-- [ ------------ Home End ------------] -->

        <!-- [ ------------ About Begin ------------] -->
        <section class="about" id="about">
            <div class="about-img">
                <img src="/assets/images/IMG-20230529-WA0029.jpg" alt="">  
            </div>

            <div class="about-content">
                <h2 class="heading"><?php echo $STRAD["qui"]?><span> <?php echo $STRAD["suis_je"]?></span></h2>
                <p>
                    <?php echo $STRAD["presentation"]?>
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam voluptatem voluptatibus quo ad, aperiam minima minus, tempore soluta sequi unde, earum cum quod atque placeat itaque. Laboriosam, qui excepturi! Ducimus.
                </p>

                <a href="#" class="btn">Voir plus</a>
            </div>
        </section>

        <section class="experience" id="experience">
            <h2 class="heading">Mes Formations</h2>

            <div class="experience-container">
                <div class="experience-box">
                    <i class='bx bx-shape-circle'></i>                <h3>1ère année Informatique</h3>
                    <p>
                        Durant la première année, nous avons suivi un tronc commun incluant les mathématiques lors du premier semestre.
                        Au second semestre, nous avons commencé à nous spécialiser en informatique. On a étudié les bases de la programmation en langage C, les bases de données, la gestion de projet et la programmation web.
                        <br><a href="https://mathinfo.unistra.fr/formations/licence/informatique/odf-parcours-informatique-PR9-18123/?tab=cours" class="btn">En savoir plus</a>
                    </p>
                </div>
                <div class="experience-box">
                    <i class='bx bx-shape-polygon'></i>                <h3>2ème année Informatique</h3>
                    <p>
                        Durant le second semestre, nous avons approfondi nos connaissances en informatique à travers plusieurs matières essentielles. 
                        Nous avons étudié l'Architecture des Ordinateurs pour mieux comprendre le fonctionnement interne des machines, Structures de Données en langage C et la programmation Orienté Objet en JAVA.
                        <br><a href="#" class="btn">En savoir plus</a>
                    </p>
                </div>
            </div>

        </section>
        <!-- [ ------------ About End ------------] -->
        

        <!-- [ ------------ Portfolio Begin ------------] -->
        <section class="portfolio" id="portfolio">
            <h2 class="heading">Portfolio : <span>Projets Universitaires</span></h2>
            <div class="portlfolio-container">
                <article class="portfolio-box mySwiper">
                    <div class="portfolio-content swiper-wrapper">

                        <section class="portfolio-slide swiper-slide">
                            <h2><i class='bx bx-game' style='color:rgb(17, 121, 17)' ></i>Sokoban - Dev</h2>
                            <div class="portfolio-images">
                                <img src="assets/images/sokoban.png" alt="sokoban sur console" class="img1">
                                <img src="assets/images/sokoban_sdl2.png" alt="sokoban avec interface graphique" class="img2">
                            </div>
                            <p>
                                Sokoban est un jeu de réflexion dans lequel le joueur doit pousser des caisses pour les placer sur des cases cibles. La modélisation de ce jeu a été réalisée <span class="bold">(en C)</span> avec une interface graphique développée à l'aide de la <span class="bold">bibliothèque SDL2</span>, et une option pour jouer directement via le terminal.
                            </p>
                            <p class="demo">
                                <span>Git : </span><a href="https://git.unistra.fr/razafindrambola/sokoban">https://git.unistra.fr/razafindrambola/sokoban</a>
                            </p>
                        </section>
                        
                        <section class="portfolio-slide swiper-slide">
                            <h2><i class='bx bx-planet' style="color: rgb(245, 159, 61);"></i>Réseau IP - Traduction d'adresse IP</h2>
                            <div class="portfolio-images">
                                <img src="assets/images/imgNat.png" alt="">
                            </div>
                            <p>
                                Ce projet consiste à réaliser une traduction d'adresses réseaux en utilisant le <span class="bold">Protocol IP</span>. Il s'agit de mettre en place un réseau local avec des machines virtuelles et de <span class="bold">configurer un routeur</span> pour permettre la communication entre les machines.
                            </p>
                            <p class="demo">
                                Demo : Cliquer ici
                            </p>
                        </section>

                        <section class="portfolio-slide swiper-slide">
                            <h2><i class='bx bx-planet' style="color: rgb(245, 159, 61);"></i>Réseau IP - Traduction d'adresse IP</h2>
                            <div class="portfolio-images">
                                <img src="assets/images/imgNat.png" alt="">
                            </div>
                            <p>
                                Ce projet consiste à réaliser une traduction d'adresses réseaux en utilisant le <span class="bold">Protocol IP</span>. Il s'agit de mettre en place un réseau local avec des machines virtuelles et de <span class="bold">configurer un routeur</span> pour permettre la communication entre les machines.
                            </p>
                        </section>
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </arcticle>
            </div>
        </section>
        <!-- [ ------------ Portfolio End ------------] -->
    </main>
    <!-- Fin de la page principale -->
        
        <!-- Contact -->
        <?php include "assets/php/contact.php";?>    
    
        <!-- Footer -->
        <?php include "assets/php/footer.php";?>
    
    <!-- scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <!-- Swiper Js -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <!-- Custon Js File -->
     <script src="script.js"></script>
</body>
</html>