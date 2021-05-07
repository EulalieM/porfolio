<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Eulalie Moreau | Design & Développement web - Compétences</title>
    <meta name="title" content="Eulalie Moreau | Design & Développement web - Compétences">
    <meta name="description" content="Mes compétences en terme d'analyse de projet, de conception et design de sites, développement et qualité web.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://eulalie.sitesweb-angouleme.fr/competences.php">
    <meta property="og:title" content="Eulalie Moreau | Design & Développement web - Compétences">
    <meta property="og:description" content="Mes compétences en terme d'analyse de projet, de conception et design de sites, développement et qualité web.">
    <meta property="og:image" content="https://eulalie.sitesweb-angouleme.fr/competences.php/img/eulalie_photo_meta.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://eulalie.sitesweb-angouleme.fr/competences.php">
    <meta property="twitter:title" content="Eulalie Moreau | Design & Développement web - Compétences">
    <meta property="twitter:description" content="Mes compétences en terme d'analyse de projet, de conception et design de sites, développement et qualité web.">
    <meta property="twitter:image" content="https://eulalie.sitesweb-angouleme.fr/competences.php/img/eulalie_photo_meta.png">

    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/styles-header.css">
    <link rel="stylesheet" href="styles/styles-footer.css">
    <link rel="stylesheet" href="styles/styles-competences.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>

    <header>
        <?php include('includes/header.php'); ?>
    </header>

    <?php include('includes/burger-menu.php'); ?>

    <main>
        <div>
            <h1>Mes compétences</h1>
            <section class="competences">
                <h2>Étude de marché</h2>
                    <div class="com-cards">
                        <div class="com-card">
                            <img src="img/besoins.svg" alt="">
                            <p>Définir les besoins</p>                           
                        </div>
                        <div class="com-card">
                            <img src="img/cible.svg" alt="">
                            <p>Déterminer la cible du projet</p>                           
                        </div>
                    </div>
                    <div class="com-cards">
                        <div class="com-card">
                            <img src="img/conccurence.svg" alt="">
                            <p>Étudier la conccurence</p>                            
                        </div>
                        <div class="com-card">
                            <img src="img/benchmarking.svg" alt="">
                            <p>Réaliser un benchmarking</p>                           
                        </div>
                    </div>
            </section>
            <section class="competences">
                <h2>Conception et design graphique</h2>
                <div class="com-cards">                   
                    <div class="com-card">
                        <img src="img/arborescence.svg" alt="">
                        <p>Construire une arborescence</p>                        
                    </div>
                    <div class="com-card">
                        <img src="img/charte.svg" alt="">
                        <p>Élaborer une charte graphique</p>                       
                    </div>
                </div>
                <div class="com-cards">
                    <div class="com-card">
                        <img src="img/maquette.svg" alt="">
                        <p>Designer une maquette graphique</p>                        
                    </div>
                    <div class="com-card">
                        <img src="img/logiciels.svg" alt="">
                        <p>Logiciels : Adobe Xd, Figma, Gimp, Illustrator...</p>                        
                    </div>                   
                </div>
            </section>
            <section class="competences">
                <h2>Intégration et développement web</h2>
                <div class="com-cards">
                    <div class="com-card">
                        <img src="img/front.svg" alt="">
                        <p>Intégration front-end : HTML, CSS, JavaScript</p>                       
                    </div>
                    <div class="com-card">
                        <img src="img/back.svg" alt="">
                        <p>Développement back-end : PHP</p>                      
                    </div>
                </div>
                <div class="com-cards">
                    <div class="com-card">
                        <img src="img/wordpress.svg" alt="">
                        <p>Création de site à l'aide de CMS : WordPress</p>                       
                    </div>
                    <div class="com-card">
                        <img src="img/refonte.svg" alt="">
                        <p>Refonte de site pré-existant</p>                       
                    </div>
                </div>    
            </section>
            <section class="competences">
                <h2>Expérience utilisateur et qualité web</h2>
                <div class="com-cards">
                    <div class="com-card">
                        <img src="img/qualite.svg" alt="">
                        <p>Audit qualité : Opquast, RGAA</p>                       
                    </div>
                    <div class="com-card">
                        <img src="img/securite.svg" alt="">
                        <p>Sécurité du site : OWASP</p>                        
                    </div>
                </div>
                <div class="com-cards">
                    <div class="com-card">
                        <img src="img/ergo.svg" alt="">
                        <p>Navigation et ergonomie</p>                        
                    </div>
                    <div class="com-card">
                        <img src="img/seo.svg" alt="">
                        <p>Optimisation pour les moteurs de recherche</p>                      
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <?php include('includes/footer.php'); ?>
    </footer>

    <script src="https://kit.fontawesome.com/b6fad4163c.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/script.js"></script>

</body>

</html>