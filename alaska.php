<?php require('fragments/header.php') ?>


<main>
    <section class="hero">
        <div class="inner-section">
            <h1>Alaska</h1>
            <span class="sub-headline">Le bar glacé où l’élégance se marie à la fraîcheur</span>
        </div>
    </section>

    <section class="carte-concept">
        <div class="inner-section">
            <div>
                <div class="inner-cln">
                    <h2>Le concept</h2>
                    <div class="text-content">
                        <p>Le bar glacé où l'élégance se marie à la fraîcheur pour une expérience sensorielle unique.</p>
                        <p>Plongez dans un monde où la glace devient art et les boissons glacées deviennent des créations exquises.</p>
                    </div>
                </div>
            </div>
            <div class="img-wrapper">
                <img src="assets/images/Alaska-Concept.jpg" alt="Bar gelé d'Alaska" class="alaska-concept" loading="lazy">
            </div>
        </div>
    </section>

    <div class="video-banner">
        <video autoplay loop muted preload="none">
            <source src="assets/videos/Alaska-Video.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la balise vidéo.
        </video>

    </div>

    <section class="carte">
        <div class="inner-section">
            <div class="menu-section">
                <h3 class="menu-title">Les cocktails</h3>
                <ul class="menu-list">
                    <li><span class="menu-item">Le Blizzard</span><span class="menu-price">12 €</span></li>
                    <li><span class="menu-item">Le Givré</span><span class="menu-price">12 €</span></li>
                    <li><span class="menu-item">Le Frisson</span><span class="menu-price">13 €</span></li>
                    <li><span class="menu-item">La Tempête</span><span class="menu-price">14 €</span></li>
                    <li><span class="menu-item">Le Polaire</span><span class="menu-price">15 €</span></li>
                </ul>
            </div>

            <div class="menu-section">
                <h3 class="menu-title">Les cocktails softs</h3>
                <ul class="menu-list">
                    <li><span class="menu-item">Le Bleu</span><span class="menu-price">12 €</span></li>
                    <li><span class="menu-item">Le Glacial</span><span class="menu-price">12 €</span></li>
                    <li><span class="menu-item">L'Alaska</span><span class="menu-price">13 €</span></li>
                    <li><span class="menu-item">Le Neige</span><span class="menu-price">14 €</span></li>
                    <li><span class="menu-item">L'Aurore</span><span class="menu-price">15 €</span></li>
                </ul>
            </div>

            <div class="menu-section">
                <h3 class="menu-title">Les softs</h3>
                <ul class="menu-list">
                    <li><span class="menu-item">Eau / Sirop</span><span class="menu-price">4 €</span></li>
                    <li><span class="menu-item">Café / Thé</span><span class="menu-price">5 €</span></li>
                    <li><span class="menu-item">Jus de fruits</span><span class="menu-price">6 €</span></li>
                    <li><span class="menu-item">Sprite</span><span class="menu-price">8 €</span></li>
                    <li><span class="menu-item">Ice Tea</span><span class="menu-price">8 €</span></li>
                </ul>
            </div>
        </div>
    </section>


</main>


<?php require('fragments/footer-carte.php') ?>