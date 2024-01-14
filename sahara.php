<?php require('fragments/header.php') ?>

<main>
    <section class="hero">
        <div class="inner-section">
            <h1>Sahara</h1>
            <span class="sub-headline">le bar ensoleillé où la chaleur rencontre l'aventure</span>
        </div>
    </section>

    <section class="carte-concept">
        <div class="inner-section">
            <div>
                <div class="inner-cln">
                    <h2>Le concept</h2>
                    <div class="text-content">
                        <p>Le bar “Sahara” est un oasis au cœur du désert, où l'expérience de la boisson rencontre la fraîcheur inattendue. </p>
                        <p>Imaginez un lieu où les boissons exquises se mêlent à la chaleur du sable, créant un havre de rafraîchissement au milieu de l'immensité désertique.</p>
                    </div>
                </div>
            </div>
            <div class="img-wrapper">
                <img src="assets/images/Sahara-Concept.jpg" alt="Bar désertique du Sahara" class="sahara-concept" loading="lazy">
            </div>
        </div>
    </section>

    <div class="video-banner">
        <video autoplay loop muted preload="none">
            <source src="assets/videos/Sahara-Video.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la balise vidéo.
        </video>

    </div>

    <section class="carte">
        <div class="inner-section">
            <div class="menu-section">
                <h3 class="menu-title">Les cocktails</h3>
                <ul class="menu-list">
                    <li><span class="menu-item">Le Dune</span><span class="menu-price">12 €</span></li>
                    <li><span class="menu-item">Le Sable</span><span class="menu-price">12 €</span></li>
                    <li><span class="menu-item">L'Épine</span><span class="menu-price">13 €</span></li>
                    <li><span class="menu-item">Le Fizz</span><span class="menu-price">14 €</span></li>
                    <li><span class="menu-item">Le Desert</span><span class="menu-price">15 €</span></li>
                </ul>
            </div>
            <div class="menu-section">
                <h3 class="menu-title">Les cocktails softs</h3>
                <ul class="menu-list">
                    <li><span class="menu-item">Le Mirage</span><span class="menu-price">12 €</span></li>
                    <li><span class="menu-item">Le Sunset</span><span class="menu-price">12 €</span></li>
                    <li><span class="menu-item">Le Nomad</span><span class="menu-price">13 €</span></li>
                    <li><span class="menu-item">Le Spicy</span><span class="menu-price">14 €</span></li>
                    <li><span class="menu-item">Le Cactus</span><span class="menu-price">15 €</span></li>
                </ul>
            </div>
            <div class="menu-section">
                <h3 class="menu-title">Les softs</h3>
                <ul class="menu-list">
                    <li><span class="menu-item">Eau / Sirop</span><span class="menu-price">4 €</span></li>
                    <li><span class="menu-item">Café / Thé</span><span class="menu-price">5 €</span></li>
                    <li><span class="menu-item">Jus de fruits</span><span class="menu-price">6 €</span></li>
                    <li><span class="menu-item">Oasis</span><span class="menu-price">8 €</span></li>
                    <li><span class="menu-item">Ice Tea</span><span class="menu-price">8 €</span></li>
                </ul>
            </div>
        </div>
    </section>

</main>

<?php require('fragments/footer-carte.php') ?>
