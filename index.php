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
    <meta property="og:url" content="https://eulalie.sitesweb-angouleme.fr/">
    <meta property="og:title" content="Eulalie Moreau | Design &
    Développement web - Présentation">
    <meta property="og:description" content="Eulalie Moreau, étudiante en développement web à la recherche d'un contrat en alternance pour septembre 2021 sur Angoulême ou Bordeaux.">
    <meta property="og:image" content="https://eulalie.sitesweb-angouleme.fr/img/eulalie_photo_meta.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://eulalie.sitesweb-angouleme.fr/">
    <meta property="twitter:title" content="Eulalie Moreau | Design & Développement web - Présentation">
    <meta property="twitter:description" content="Eulalie Moreau, étudiante en développement web à la recherche d'un contrat en alternance pour septembre 2021 sur Angoulême ou Bordeaux.">
    <meta property="twitter:image" content="https://eulalie.sitesweb-angouleme.fr/img/eulalie_photo_meta.png">
    
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/styles-header.css">
    <link rel="stylesheet" href="styles/styles-footer.css">
    <link rel="stylesheet" href="styles/styles-presentation.css">
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body class="pre-body">

    <header>
        <?php include('includes/header.php'); ?>
    </header>

    <?php include('includes/burger-menu.php'); ?>

    <main class="pre-main">
        <div class="pre-position" id="pre-desktop">
            <div class="pre-content">
                <h1 class="pre-name">Moreau</h1>
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
    </main>

    <footer>
        <?php include('includes/footer.php'); ?>
    </footer>
    
    <script src="https://kit.fontawesome.com/b6fad4163c.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="scripts/script.js"></script>

</body>

</html>