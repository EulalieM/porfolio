<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Eulalie Moreau | Design & Développement web - Réalisations</title>
    <meta name="title" content="Eulalie Moreau | Design & Développement web - Réalisations">
    <meta name="description" content="Les différents projets de développement web et de web design que j'ai pu réalisé au cours de mes études et de mes expériences professionnelles.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://eulalie-moreau.fr/realisations.php">
    <meta property="og:title" content="Eulalie Moreau | Design & Développement web - Réalisations">
    <meta property="og:description" content="Les différents projets de développement web et de web design que j'ai pu réalisé au cours de mes études et de mes expériences professionnelles.">
    <meta property="og:image" content="https://eulalie-moreau.fr/realisations.php/img/eulalie_photo_meta.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://eulalie-moreau.fr/realisations.php">
    <meta property="twitter:title" content="Eulalie Moreau | Design & Développement web - Réalisations">
    <meta property="twitter:description" content="Les différents projets de développement web et de web design que j'ai pu réalisé au cours de mes études et de mes expériences professionnelles.">
    <meta property="twitter:image" content="https://eulalie-moreau.fr/realisations.php/img/eulalie_photo_meta.png">

    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/styles-header.css">
    <link rel="stylesheet" href="styles/styles-footer.css">
    <link rel="stylesheet" href="styles/styles-realisations.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>

    <header>
        <?php include('includes/header.php'); ?>
    </header>

    <?php include('includes/burger-menu.php'); ?>

    <main>
        <div>
            <h1>Mes réalisations</h1>
            <div class="rea-project rea-project-right">
                <div class="rea-description">
                    <h2 class="rea-h2">CES</h2>
                    <p>Projet fictif réalisé dans le cadre d’un test d’admission pour un Bachelor. Création et développement en version mobile d’un quiz sur le CES. Le respect du parcours utilisateur fourni et de la charte graphique était demandé.</p>
                    <a href="ces" class="rea-cta cta">Voir le projet</a>
                </div>
                <div class="rea-picture">
                    <img src="img/mockup_ces.png" alt="" class="rea-img">
                </div>
            </div>
            <div class="rea-project rea-project-left">
                <div class="rea-picture">
                    <img src="img/mockup_macagette.png" alt="" class="rea-img">
                </div>
                <div class="rea-description">
                    <h2 class="rea-h2">Ma cagette Charentaise</h2>
                    <p>Projet réel réalisé dans le cadre d’un stage au sein de la société Les Jardins de l’Osme. Création de l’identité visuelle et du site web de Ma cagette Charentaise.</p>
                    <a href="ma-cagette-charentaise" class="rea-cta cta">Voir le projet</a>
                </div>
            </div>
            <div class="rea-project rea-project-right">
                <div class="rea-description">
                    <h2 class="rea-h2">Kentucky Burger</h2>
                    <p>Projet fictif réalisé dans le cadre d’un exercice en formation. Création de l’identité visuelle et du site web du restaurant fictif Kentucky Burger dans un style de ranch américain.</p>
                    <a href="kentucky-burger" class="rea-cta cta">Voir le projet</a>
                </div>
                <div class="rea-picture">
                    <img src="img/mockup_kentucky.png" alt="" class="rea-img">
                </div>
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