<?php 
session_start();
?>

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

    <?php include('../includes/burger-menu.php'); ?>

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
                    <h2>Formulaire de contact</h2>

                    <?php if (isset($_SESSION['errors'])): ?> 
                        <div class="con-alert con-error">
                            <div class="con-error-icon">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <p class="con-error-text"><?= implode('<br>', $_SESSION['errors']); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="con-alert con-success">
                            <i class="fas fa-check-circle"></i>
                            <p>Votre Email a bien été envoyé.</p>
                        </div>
                    <?php endif; ?>

                    <form action="post-contact.php" method="POST">

                        <div class="con-form">
                            <div class="con-field">
                                <label for="inputname">Nom*</label>
                                <input type="text" id="inputname" name="name" placeholder="Nom*" class="short-input" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
                            </div>

                            <div class="con-field">
                                <label for="inputemail">Email*</label>
                                <input type="mail" id="inputemail" name="email" placeholder="Email*" class="short-input" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">                    
                            </div>
                        </div>

                        <div class="con-form">
                            <div class="con-field">
                                <label for="inputphone">Téléphone</label>
                                <input type="tel" id="inputphone" name="phone" placeholder="Téléphone" class="short-input" value="<?= isset($_SESSION['inputs']['phone']) ? $_SESSION['inputs']['phone'] : ''; ?>">                    
                            </div>

                            <div class="con-field">
                                <label for="inputcompany">Société</label>
                                <input type="text" id="inputcompany" name="company" placeholder="Société" class="short-input" value="<?= isset($_SESSION['inputs']['company']) ? $_SESSION['inputs']['company'] : ''; ?>">                    
                            </div>
                        </div>

                        <div class="con-field">
                            <label for="object">Objet*</label>
                            <input type="text" id="inputobject" name ="object" placeholder="Objet*" class="long-input" value="<?= isset($_SESSION['inputs']['object']) ? $_SESSION['inputs']['object'] : ''; ?>">                    
                        </div>

                        <div class="con-field">
                            <label for="inputmessage">Message*</label>
                            <textarea name="message" id="inputmessage" cols="55" rows="8" placeholder="Message*" class="long-input"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
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

    <script src="https://kit.fontawesome.com/b6fad4163c.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../scripts/script.js"></script>

</body>

</html>

<?php 
unset($_SESSION['inputs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
?>