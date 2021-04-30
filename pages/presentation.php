<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Une description de la page..." />
    <title>Eulalie Moreau | Présentation</title>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/styles-presentation.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
</head>

<body class="pre-body">

    <header>
        <?php include('../includes/header.php'); ?>
    </header>

    <main class="pre-main">
        <div class="m-position" id="pre-desktop">
            <div class="pre-content">
                <h1 class="pre-name">Eulalie Moreau</h1>
                <h2>Design &<br>
                Développement web</h2>
                <p class="pre-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus augue ex, ac iaculis est vehicula non. Nullam nec tincidunt justo, nec tristique tortor</p>
                <a href="contact.php" class="pre-contact cta">Me contacter</a>
            </div>

            <div class="pre-content">
                <img src="../img/eulalie_photo.png" alt="Photo Eulalie Moreau" class="pre-photo">
            </div>
        </div>

        <div class="m-position" id="pre-mobile">
            <div class="pre-content pre-content-mobile">
                <h1 class="pre-name">Eulalie Moreau</h1>
                <img src="../img/eulalie_photo.png" alt="Photo Eulalie Moreau" class="pre-photo">
            </div>
            <div class="pre-content">
                <h2>Design & Développement web</h2>
                <p class="pre-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum cursus augue ex, ac iaculis est vehicula non. Nullam nec tincidunt justo, nec tristique tortor</p>
                <a href="contact.php" class="pre-contact cta">Me contacter</a>
            </div>
        </div>
    </main>

    <footer>
        <?php include('../includes/footer.php'); ?>
    </footer>

</body>

</html>