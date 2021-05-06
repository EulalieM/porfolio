<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Une description de la page..." />
    <title>Eulalie Moreau | Projet type</title>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/styles-projet.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
</head>

<body>

    <header>
        <?php include('../includes/header.php'); ?>
    </header>

    <?php include('../includes/burger-menu.php'); ?>

    <main>
        <div>
            <h1>Consumer Electronics Show</h1>
            <div class="pro-description">
                <p>Projet fictif réalisé dans le cadre d'un test d'entré en Bachelor. Création et développement d'un jeu en version mobile pour le CES avec respect du parcours utilisateur et de la charte graphique</p>
                <div class="pro-details">   
                    <div class="pro-detail">
                        <p>Réalisations</p>
                        <ul>
                            <li>Maquette fonctionnelle & maquette graphique</li>
                            <li>base de données</li>
                            <li></i>intégration version mobile</li>
                        </ul>
                    </div>  
                    <div class="pro-detail">
                        <p>Technologies utilisées</p>
                        <ul>
                            <li>Figma</li>
                            <li>MySQL/MariaDB</li>
                            <li>HTML/CSS</li>
                            <li></i>PHP</li>
                        </ul>
                    </div>           
                </div>
            </div>
            <!-- <div class="pro-nav">
                <span>|<a href="macagettecharentaise.php"> Projet suivant</a></span>
            </div> -->
            <img src="../img/ces.png" alt="" class="pro-mockup">
            <div class="pro-nav">
                <span>|<a href="macagettecharentaise.php"> Projet suivant</a></span>
            </div>
        </div>
    </main>

    <footer>
        <?php include('../includes/footer.php'); ?>
    </footer>

    <script src="https://kit.fontawesome.com/b6fad4163c.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../scripts/script.js"></script>

</body>

</html>