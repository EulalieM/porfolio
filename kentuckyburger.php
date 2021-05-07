<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Eulalie Moreau | Design & Développement web - Projet Kentucky Burger</title>
    <meta name="title" content="Eulalie Moreau | Design & Développement web - Projet Kentucky Burger">
    <meta name="description" content="Charte graphique et maquettage du site web du restaurant fictif Kentucky Burger.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://eulalie.sitesweb-angouleme.fr/kentuckyburger.php">
    <meta property="og:title" content="Eulalie Moreau | Design & Développement web - Projet Kentucky Burger">
    <meta property="og:description" content="Charte graphique et maquettage du site web du restaurant fictif Kentucky Burger.">
    <meta property="og:image" content="https://eulalie.sitesweb-angouleme.fr/ces.php/img/mockup_kentucky.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://eulalie.sitesweb-angouleme.fr/kentuckyburger.php">
    <meta property="twitter:title" content="Eulalie Moreau | Design & Développement web - Projet Kentucky Burger">
    <meta property="twitter:description" content="Charte graphique et maquettage du site web du restaurant fictif Kentucky Burger.">
    <meta property="twitter:image" content="https://eulalie.sitesweb-angouleme.fr/ces.php/img/mockup_kentucky.png">
    
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
            <h1>Kentucky Burger</h1>
            <div class="pro-nav">
                <span><a href="macagettecharentaise.php">Projet précédent </a>|</span>
            </div>
            <div class="pro-description">
                <p>Projet fictif réalisé dans le cadre de ma formation. Création de l'identité visuelle et du site web du restaurant Kentucky Burger dans un style de ranch américain.</p>
                <div class="pro-details">
                    <div class="pro-detail">
                        <p>Réalisations</p>
                        <ul>
                            <li>Charte graphique</li>
                            <li>maquette fonctionnelle & maquette graphique</li>
                        </ul>
                    </div>
                    <div class="pro-detail">
                        <p>Technologies utilisées</p>
                        <ul>
                            <li>Adobe Xd</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <a href="" class="pro-cta cta">Voir sur Github</a> -->
            <img src="img/kentucky.png" alt="" class="pro-mockup">
            <div class="pro-nav">
                <span><a href="macagettecharentaise.php">Projet précédent </a>|</span>
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