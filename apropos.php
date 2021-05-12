<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Eulalie Moreau | Design & Développement web - À propos</title>
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
    <link rel="stylesheet" href="styles/styles-apropos.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>

    <header>
        <?php include('includes/header.php'); ?>
    </header>

    <?php include('includes/burger-menu.php'); ?>

    <main>
        <div>
            <h1>À propos</h1>
            <section class="pro-section">
                <h2>Qui suis-je ?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra eros eu maximus interdum. In malesuada placerat orci, et convallis lorem. Nullam pretium nibh vel augue porttitor, sed scelerisque metus tincidunt. Ut convallis sapien a dolor pharetra, suscipit dictum neque lobortis. Fusce non eleifend velit, in dapibus neque.</p>
                <a href="cv_eulalie_moreau.pdf" target="_blank" class="cta">Voir mon CV</a>
            </section>
            <section class="pro-section">
                <h2>Mes compétences</h2>
                <div class="pro-content">
                    <img src="img/arborescence.svg" alt="" class="pro-img-left">
                    <div>
                        <h3>Conception de site web</h3>
                        <ul>
                            <li>Préciser les <strong>besoins</strong> du projet</li>
                            <li>Déterminer la <strong>cible</strong></li>
                            <li>Étudier la <strong>conccurence</strong></li>
                            <li>Réaliser un <strong>benchmarking</strong></li>
                            <li>Définir l'<strong>arborescence</strong> et l'<strong>ergonomie</strong> du site</li>
                        </ul> 
                    </div>                      
                </div>
                <div class="pro-content">
                    <div>
                        <h3>Maquettage et design graphique d'interface</h3> 
                        <ul>
                            <li>Réaliser la maquette fonctionnelle</li>
                            <li>Réaliser la maquette graphique : <strong>Adobe Xd</strong>, <strong>Figma</strong></li>
                            <li>Traiter les images : <strong>Gimp</strong>, <strong>Illustrator</strong></li>
                            <li>Réaliser un <strong>prototype</strong></li>
                        </ul>   
                    </div>
                    <img src="img/maquette.svg" alt="" class="pro-img-right">
                </div>
                <div class="pro-content">
                    <img src="img/front.svg" alt="" class="pro-img-left">
                    <div>
                        <h3>Intégration et développement</h3>
                        <ul>
                            <li>Intégrer le site à l'aide de CMS : <strong>WordPress</strong></li>
                            <li>Intégrer la maquette graphique sur-mesure: <strong>HTML</strong>, <strong>CSS</strong>, <strong>JS</strong></li>
                            <li>Développer la partie back-end : <strong>PHP</strong></li>
                            <li>Adapter le site en version <strong>responsive design</strong></li>
                        </ul>   
                    </div>                       
                </div>
                <div class="pro-content">
                    <div>
                        <h3>Qualité web et expérience utilisateur</h3>
                        <ul>
                            <li>Analyser les <strong>performances</strong></li>
                            <li><strong>Sécuriser</strong> le site</li>
                            <li>Vérifier l'<strong>accessibilité</strong></li>
                            <li>Optimiser pour les <strong>moteurs de recherche</strong></li>
                        </ul>  
                    </div>
                    <img src="img/front.svg" alt="" class="pro-img-right">
                </div>      
            </section>
            <section class="pro-section">
                <h2>Mon parcours</h2>
                
                <div class="container">
                    <div id="timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <!-- icone -->
                            </div>
                            <div class="timeline-content">
                                <h2>2012-2016</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Atque, facilis quo maiores magnam modi ab libero praesentium blanditiis.</p>
                                <a href="#" class="cta">button</a>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <!-- icone -->
                            </div>
                            <div class="timeline-content right">
                                <h2>2016-2017</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, facilis quo. Maiores magnam modi ab libero praesentium blanditiis consequatur aspernatur accusantium maxime molestiae sunt ipsa.</p>
                                <a href="#" class="cta">button</a>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <!-- icone -->
                            </div>
                            <div class="timeline-content">
                                <h2>2017-2019</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, facilis quo. Maiores magnam modi ab libero praesentium blanditiis consequatur aspernatur accusantium maxime molestiae sunt ipsa.</p>
                                <a href="#" class="cta">button</a>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <!-- icone -->
                            </div>
                            <div class="timeline-content right">
                                <h2>2020</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, facilis quo. Maiores magnam modi ab libero praesentium blanditiis consequatur aspernatur accusantium maxime molestiae sunt ipsa.</p>
                                <a href="#" class="cta">button</a>
                            </div>
                        </div>

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