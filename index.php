<?php require('fragments/header.php') ?>

<main>

    <section class="hero">
        <div class="carousel-bg">
            <div class="slides">
                <div class="slide"></div>
                <div class="slide"></div>
                <div class="slide"></div>
            </div>
        </div>
        <div class="inner-section">
            <h1>Bar'Atlas</h1>
            <span class="sub-headline">Venez découvrir nos différents univers autour d’un verre</span>
        </div>
    </section>

    <section class="accueil-concept">
        <div class="inner-section">
            <h2>Notre concept</h2>
            <p>Bienvenue au Bar'Atlas, une expérience unique nichée au cœur de Courchevel, où l'élégance rencontre l’art de la mixologie. <br> Notre établissement, pensé comme un véritable voyage sensoriel, vous invite à explorer différentes atmosphères au sein de ses multiples salles thématiques.</p>
        </div>
    </section>

    <section class="theme-redirect">
        <div class="inner-section">
            <div>
                <div class="inner-cln">
                    <h2>Alaska</h2>
                    <div class="text-content">
                        <p>Un bar glacé où l'élégance se marie à la fraîcheur pour une expérience sensorielle unique.</p>
                        <p>Plongez dans un monde où la glace devient art et les boissons glacées deviennent des créations exquises.</p>
                    </div>
                    <a href="/alaska.php" class="CTA"><span class="CTA-txt">En savoir plus</span></a>
                </div>
            </div>
            <div class="img-wrapper">
                <img src="assets/images/Accueil-Alaska.jpg" alt="Bar gelé d'Alaska" class="accueil-alaska" loading="lazy">
            </div>
        </div>
    </section>

    <section class="theme-redirect">
        <div class="inner-section">
            <div>
                <div class="inner-cln">
                    <h2>Sahara</h2>
                    <div class="text-content">
                        <p>Le bar oasis au cœur du désert où l'expérience de la boisson rencontre la fraîcheur inattendue.</p>
                        <p>Imaginez un lieu où les boissons exquises se mêlent à la chaleur du sable, créant un havre de rafraîchissement au milieu de l'immensité désertique.</p>
                    </div>
                    <a href="/sahara.php" class="CTA"><span class="CTA-txt">En savoir plus</span></a>
                </div>
            </div>
            <div class="img-wrapper">
                <img src="assets/images/Accueil-Sahara.jpg" alt="Bar désertique du Sahara" class="accueil-sahara" loading="lazy">
            </div>
        </div>
    </section>

    <section class="theme-redirect">
        <div class="inner-section">
            <div>
                <div class="inner-cln">
                    <h2>Ammonia</h2>
                    <div class="text-content">
                        <p>Le laboratoire sensoriel où la mixologie devient une expérience moléculaire captivante.</p>
                        <p>Découvrez un univers où les boissons prennent vie à travers des réactions visuelles et gustatives uniques.</p>
                        <p>Notre bar offre une fusion avant-gardiste entre la science et l'art.</p>
                    </div>
                    <a href="/ammonia.php" class="CTA"><span class="CTA-txt">En savoir plus</span></a>
                </div>
            </div>
            <div class="img-wrapper">
                <img src="assets/images/Accueil-Ammonia.jpg" alt="Bar chimique Ammonia" class="accueil-ammonia" loading="lazy">
            </div>
        </div>
    </section>

    <section class="newsletter">
        <div class="inner-section">
            <div class="newsletter-ctn">
                <h2>Abonnez-vous à notre newsletter !</h2>
                <form action="" class="newsletter-form">
                    <input type="email" id="emailSubmit" required>
                    <div class="consent-wrap">
                        <input type="checkbox" id="consent" required>
                        <label for="consent">Vous consentez à recevoir chaque semaine un e-mail de notre part</label>
                    </div>
                    <button type="submit">JE M'INSCRIS</button>
                </form>
            </div>
            <img src="assets/images/Santa.png" alt="Père Noël Newsletter Bar'Atlas">
        </div>
    </section>

</main>

<?php require('fragments/footer.php') ?>