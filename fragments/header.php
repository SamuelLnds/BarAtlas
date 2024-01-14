<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">

    <title>Bar'Atlas</title>
    
    <link rel="stylesheet" href="assets/styles/general-styling.css">
    
    <link rel=preload as=image href=assets/images/Logo.png fetchpriority=high>
    
    <?php if ($_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/?') { ?>
        <link rel="stylesheet" href="assets/styles/index-styling.css">
        <script src="assets/scripts/form-newsletter.js"></script>
        <script src="assets/scripts/carrousel.js"></script>
    <?php } ?>

    <?php if ($_SERVER['REQUEST_URI'] === '/alaska.php') { ?>
        <link rel="stylesheet" href="assets/styles/alaska-styling.css">
        <link rel=preload as=image href=assets/images/Alaska-lowres.jpg fetchpriority=high>
    <?php } ?>

    <?php if ($_SERVER['REQUEST_URI'] === '/sahara.php') { ?>
        <link rel="stylesheet" href="assets/styles/sahara-styling.css">
        <link rel=preload as=image href=assets/images/Sahara-lowres.jpg fetchpriority=high>
    <?php } ?>

    <?php if ($_SERVER['REQUEST_URI'] === '/ammonia.php') { ?>
        <link rel="stylesheet" href="assets/styles/ammonia-styling.css">
        <link rel=preload as=image href=assets/images/Ammonia-lowres.jpg fetchpriority=high>
    <?php } ?>

    <?php if ($_SERVER['REQUEST_URI'] === '/about.php') { ?>
        <link rel="stylesheet" href="assets/styles/about-styling.css">
    <?php } ?>

    <?php if ($_SERVER['REQUEST_URI'] === '/contact.php') { ?>
        <link rel="stylesheet" href="assets/styles/contact-styling.css">
    <?php } ?>

    <script src="assets/scripts/scroll2top.js"></script>
    <script src="assets/scripts/active-tab.js"></script>

</head>
<body>

    <header>

        <div class="header-content inner-section">

            <a href="/"><img src="assets/images/Logo.png" alt="Logo Bar'Atlas" class="logo"></a>

            <nav>

                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/alaska.php">Alaska</a></li>
                    <li><a href="/sahara.php">Sahara</a></li>
                    <li><a href="/ammonia.php">Ammonia</a></li>
                    <li><a href="/about.php">À propos</a></li>
                </ul>
                
            </nav>

            <a href="/contact.php" class="contact-btn">
                <span class="CTA-txt">Nous contacter</span>
            </a>

        </div>
    
    </header>