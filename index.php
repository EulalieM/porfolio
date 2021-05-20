<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Eulalie Moreau | Design & Développement web - Présentation</title>
    <meta name="title" content="Eulalie Moreau | Design &
    Développement web - Présentation">
    <meta name="description" content="Eulalie Moreau, étudiante en développement web à la recherche d'un contrat en alternance pour septembre 2021 sur Angoulême ou Bordeaux.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://eulalie-moreau.fr/">
    <meta property="og:title" content="Eulalie Moreau | Design &
    Développement web - Présentation">
    <meta property="og:description" content="Eulalie Moreau, étudiante en développement web à la recherche d'un contrat en alternance pour septembre 2021 sur Angoulême ou Bordeaux.">
    <meta property="og:image" content="https://eulalie-moreau.fr/img/eulalie_photo_meta.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://eulalie-moreau.fr/">
    <meta property="twitter:title" content="Eulalie Moreau | Design & Développement web - Présentation">
    <meta property="twitter:description" content="Eulalie Moreau, étudiante en développement web à la recherche d'un contrat en alternance pour septembre 2021 sur Angoulême ou Bordeaux.">
    <meta property="twitter:image" content="https://eulalie-moreau.fr/img/eulalie_photo_meta.png">
    
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/styles-header.css">
    <link rel="stylesheet" href="styles/styles-footer.css">
    <link rel="stylesheet" href="styles/styles-presentation.css">
    <link rel="stylesheet" href="styles/styles-apropos.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>

    <header>
        <?php include('includes/header.php'); ?>
    </header>

    <?php include('includes/burger-menu.php'); ?>

    <main>

        <section class="pre-main">
            <div class="pre-position" id="pre-desktop">
                <div class="pre-content">
                    <h1 class="pre-name">Eulalie Moreau</h1>
                    <h2>Design &<br>
                    Développement web</h2>
                    <p class="pre-description">Persévérante, passionnée et rigoureuse, je poursuis mes études en alternance et j'intègre un Bachelor développeur web en septembre 2021.</p>
                    <a href="contact" class="pre-contact cta">Me contacter</a>
                </div>
                <div class="pre-content">
                    <img src="img/eulalie_photo.png" alt="Photo Eulalie Moreau" class="pre-photo">
                </div>
            </div>
            <div class="pre-position" id="pre-mobile">
                <div class="pre-content pre-content-mobile">
                    <h1 class="pre-name">Eulalie Moreau</h1>
                    <img src="img/eulalie_photo.png" alt="Photo Eulalie Moreau" class="pre-photo">
                </div>
                <div class="pre-content">
                    <h2>Design & Développement web</h2>
                    <p class="pre-description">Persévérante, passionnée et rigoureuse, je poursuis mes études en alternance et j'intègre un Bachelor développeur web en septembre 2021.</p>
                    <a href="contact" class="pre-contact cta">Me contacter</a>
                </div>
            </div>
            <a href="#section1" class="pre-ancre"><img src="img/chevron.svg" alt="" class="pre-chevron"></a>
        </section>

        <section id="section1" class="pro-section">
                <h2>Qui suis-je ?</h2>
                <p>Étant une enfant d'Internet, j'ai depuis toujours été attirée par les nouvelles technologies et le multimédia. Après avoir découvert plusieurs secteurs d'activité, je me suis finalement lancée et je me suis reconvertie dans le domaine du web. Aujourd'hui, je suis déterminée à poursuivre dans ce milieu et à continuer de me former pour concevoir et développer des applications web de qualité.</p>
                <a href="img/CV_Eulalie_Moreau.pdf" target="_blank" class="cta pro-cv">Voir mon CV <i class="fas fa-external-link-alt"></i></a>
            </section>
            <section class="pro-section">
                <h2>Mes compétences</h2>
                <div class="pro-content pro-content-left">
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
                <div class="pro-content pro-content-right">
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
                <div class="pro-content pro-content-left">
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
                <div class="pro-content pro-content-right">
                    <div>
                        <h3>Qualité web et expérience utilisateur</h3>
                        <ul>
                            <li>Analyser les <strong>performances</strong></li>
                            <li><strong>Sécuriser</strong> le site</li>
                            <li>Vérifier l'<strong>accessibilité</strong></li>
                            <li>Optimiser pour les <strong>moteurs de recherche</strong></li>
                        </ul>  
                    </div>
                    <img src="img/qualite.svg" alt="" class="pro-img-right">
                </div>      
            </section>
            <section class="pro-section">
                <h2>Mon parcours</h2>
                
                <div class="container">
                    <div id="timeline">
                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <div class="timeline-content">
                                <h3>2012-2016 : Hôtellerie-Restauration-Pâtisserie</h3>
                                <p>Ayant une appétence pour la pâtisserie, j'ai tout d'abord décidé de passer un Baccalauréat Technolgique Hôtellerie-Restauration suivi d'une Mention Complémentaire Cuisinier en Dessert de Restauration. J'ai réalisé plusieurs stages dans ce domaine durant ces formations.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-book"></i>
                            </div>
                            <div class="timeline-content right">
                                <h3>2016-2017 : Service civique</h3>
                                <p>Afin de me réorienté, j'ai travaillé en Service Civique dans un collège en tant qu'aide-documentaliste : préparation d'expositions culturelles, encadrement des élèves, animations périscolaires.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-hand-holding-medical"></i>
                            </div>
                            <div class="timeline-content">
                                <h3>2017-2019 : Sanitaire et social</h3>
                                <p>N'ayant pas réussi à me réorienté dans l'informatique, j'ai obtenu un BTS Services et Prestations des Secteurs Sanitaire et Social dans lequel j'ai appris la démarche qualité et la gestion de projet.</p>
                            </div>
                        </div>

                        <div class="timeline-item">
                            <div class="timeline-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div class="timeline-content right">
                                <h3>2020 : Développement web et web design</h3>
                                <p>J'ai finalement réussi à me reconvertir dans le domaine du web et j'ai obtenu deux titres professionnels de niveau bac + 2 : <a href="https://www.francecompetences.fr/recherche/rncp/26602/" class="link">Web Designer</a> ainsi que <a href="https://www.francecompetences.fr/recherche/rncp/31114/" class="link">Développeur Web et Web Mobile</a>. Je me suis également formée à la qualité web et j'ai obtenu la certification <a href="https://www.opquast.com/certification/" class="link">Opquast</a> avec un niveau avancé.</p>
                            </div>
                        </div>

                    </div>
                </div>

            </section>
    </main>

    <footer>
        <?php include('includes/footer.php'); ?>
    </footer>
    
    <script src="https://kit.fontawesome.com/b6fad4163c.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/script.js"></script>

</body>

</html>