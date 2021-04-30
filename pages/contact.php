<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Une description de la page..." />
    <title>Eulalie Moreau | Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/styles-contact.css">
    <link rel="shortcut icon" href="../img/favicon.ico">
</head>

<body class="con-body">

    <header>
        <?php include('../includes/header.php'); ?>
    </header>

    <main class="con-main">

        <div>

            <h1>Contact</h1>

            <p class="con-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra eros eu maximus interdum. In malesuada placerat orci, et convallis lorem.</p>

            <div class="m-position con-position">

                <div class="con-content">
                    <h2>Informations de contact</h2>
                    <div>
                        <div class="con-info">
                            <img src="../img/localisation.svg" alt="">
                            <p>Angoulême - Bordeaux - France télétravail</p>
                        </div>
                        <div class="con-info">
                            <img src="../img/mail.svg" alt="">
                            <p><a href="mailto:eulalie.m16000@gmail.com">eulalie.m16000@gmail.com</a></p>
                        </div>
                        <div class="con-info">
                            <img src="../img/tel.svg" alt="">
                            <p><a href="tel:+615701564">06 15 70 15 64</a></p>
                        </div>
                        <div class="con-info">
                            <img src="../img/linkedin.svg" alt="">
                            <p><a href="">Linkedin</a></p>
                        </div>   
                    </div>
                </div>

                <hr class="con-separator">

                <div class="con-content">
                    <form action="">

                        <div class="con-form">
                            <div class="con-field">
                                <label for="">Nom*</label>
                                <input type="text" placeholder="Nom*" class="short-input">
                            </div>

                            <div class="con-field">
                                <label for="">Email*</label>
                                <input type="mail" placeholder="Email*" class="short-input">                    
                            </div>
                        </div>

                        <div class="con-form">
                            <div class="con-field">
                                <label for="">Téléphone</label>
                                <input type="tel" placeholder="Téléphone" class="short-input">                    
                            </div>

                            <div class="con-field">
                                <label for="">Société</label>
                                <input type="text" placeholder="Société" class="short-input">                    
                            </div>
                        </div>


                        <div class="con-field">
                            <label for="">Objet*</label>
                            <input type="text" placeholder="Objet*" class="long-input">                    
                        </div>

                        <div class="con-field">
                            <label for="">Message*</label>
                            <textarea name="" id="" cols="55" rows="8" placeholder="Message*" class="long-input"></textarea>
                        </div>

                        <div class="con-form-validate">
                            <p>*Champs obligatoires</p>
                            <button type="submit" class="cta">Envoyer</button>
                        </div>
                    </form>
                </div>

            </div>
            
        </div>
        
    </main>

    <footer>
        <?php include('../includes/footer.php'); ?>
    </footer>

</body>

</html>