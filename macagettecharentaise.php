<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Eulalie Moreau | Design & Développement web - Projet Ma cagette Charentaise</title>
    <meta name="title" content="Eulalie Moreau | Design & Développement web - Projet Ma cagette Charentaise">
    <meta name="description" content="Design, intégration WordPress et développement d'un plugin sur-mesure d'un projet de stage.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://eulalie.sitesweb-angouleme.fr/macagettecharentaise.php">
    <meta property="og:title" content="Eulalie Moreau | Design & Développement web - Projet Ma cagette Charentaise">
    <meta property="og:description" content="Design, intégration WordPress et développement d'un plugin sur-mesure d'un projet de stage.">
    <meta property="og:image" content="https://eulalie.sitesweb-angouleme.fr/ces.php/img/mockup_macagette.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://eulalie.sitesweb-angouleme.fr/macagettecharentaise.php">
    <meta property="twitter:title" content="Eulalie Moreau | Design & Développement web - Projet Ma cagette Charentaise">
    <meta property="twitter:description" content="Design, intégration WordPress et développement d'un plugin sur-mesure d'un projet de stage.">
    <meta property="twitter:image" content="https://eulalie.sitesweb-angouleme.fr/ces.php/img/mockup_macagette.png">

    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/styles-header.css">
    <link rel="stylesheet" href="styles/styles-footer.css">
    <link rel="stylesheet" href="styles/styles-projet.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>

    <header>
        <?php include('includes/header.php'); ?>
    </header>

    <?php include('includes/burger-menu.php'); ?>

    <main>
        <div>
            <h1>Ma cagette Charentaise</h1>
            <div class="pro-nav">
                <span><a href="ces.php">Projet précédent </a>|<a href="kentuckyburger.php"> Projet suivant</a></span>
            </div>
            <div class="pro-description">
                <p>Projet réel réalisé dans le cadre d'un stage en entreprise. Création de l'identité visuelle et du site web Ma cagette Charentaise. <span class="italic">À noter : le projet a été modifié et le site web actuel ne correspond plus à mon travail.</span></p>
                <div class="pro-details">
                    <div class="pro-detail">
                        <p>Réalisations</p>
                        <ul>
                            <li>Charte graphique</li>
                            <li>maquette fonctionnelle & maquette graphique</li>
                            <li>intégration WordPress</li>
                            <li>plugin WP sur-mesure</li>
                        </ul>
                    </div>
                    <div class="pro-detail">
                        <p>Technologies utilisées</p>
                        <ul>
                            <li>Figma</li>
                            <li>WordPress</li>
                            <li>HTML/CSS</li>
                            <li>PHP</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <a href="" class="pro-cta cta">Voir sur Github</a> -->
            <img src="img/macagette.png" alt="" class="pro-mockup">
            <div class="pro-nav">
                <span><a href="ces.php">Projet précédent </a>|<a href="kentuckyburger.php"> Projet suivant</a></span>
            </div>
        </div>
    </main>

    <footer>
        <?php include('includes/footer.php'); ?>
    </footer>

    <script src="https://kit.fontawesome.com/b6fad4163c.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/script.js"></script>

</body>

</html>