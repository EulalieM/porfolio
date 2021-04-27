<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Une description de la page..." />
    <title>Eulalie Moreau | Compétences</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/styles-competences.css">
</head>

<body>

    <header>
        <?php include('../includes/header.php'); ?>
    </header>

    <main>

        <div>
            <h1>Mes compétences</h1>

            <section class="competences">
                <h2>Étude de marché</h2>
                <div class="com-cards">
                    <div class="container">
                        <div class="card">
                            <p>Définir les besoins</p>
                            <img src="../pics/besoins.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Déterminer la cible du projet</p>
                            <img src="../pics/cible.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Étudier la conccurence</p>
                            <img src="../pics/conccurence.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Réaliser un benchmarking</p>
                            <img src="../pics/benchmarking.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>
                
            <section class="competences">
                <h2>Conception et design graphique</h2>
                <div class="com-cards">
                    <div class="container">
                        <div class="card">
                            <p>Construire une arborescence</p>
                            <img src="../pics/arborescence.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Élaborer une charte graphique</p>
                            <img src="../pics/charte.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Designer une maquette graphique</p>
                            <img src="../pics/maquette.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Logiciels : Adobe Xd, Figma, Gimp, Photoshop, Illustrator</p>
                            <img src="../pics/logiciels.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="competences">
                <h2>Intégration et développement web</h2>
                <div class="com-cards">
                    <div class="container">
                        <div class="card">
                            <p>Intégration front-end HTML, CSS, JavaScript</p>
                            <img src="../pics/front.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Développement back-end PHP</p>
                            <img src="../pics/back.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Création de site à l'aide de CMS</p>
                            <img src="../pics/wordpress.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Refonte de ste pré-existant</p>
                            <img src="../pics/refonte.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <section class="competences">
                <h2>Expérience utilisateur et qualité web</h2>
                <div class="com-cards">
                    <div class="container">
                        <div class="card">
                            <p>Audit qualité : Opquast, RGAA</p>
                            <img src="../pics/qualite.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Sécurité du site : recommandations OWASP</p>
                            <img src="../pics/securite.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Navigation et ergonomie</p>
                            <img src="../pics/ergo.svg" alt="">
                        </div>
                        <div class="card">
                            <p>Optimisation pour les moteurs de recherche</p>
                            <img src="../pics/seo.svg" alt="">
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>

    <footer>
        <?php include('../includes/footer.php'); ?>
    </footer>

</body>

</html>