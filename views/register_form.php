

    <section class="registration-section">
    <div class="close-button">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
        <h2 class="h2_underline">Inscription</h2>
        <p class="intro-text">Rejoignez notre communauté dès maintenant et explorez un nouveau monde numérique.</p>
        <form action="./controllers/inscriptionController.php" method="post">
            <label for="nom">Entrez votre nom</label>
            <input type="text" name="nom" required pattern="[a-zA-Z\s]+" title="Seuls les lettres et les espaces sont autorisés.">

            <label for="email">Entrez votre email</label>
            <input type="email" name="email" required>

            <label for="mdp">Entrez un mot de passe</label>
            <input type="password" name="mdp" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et au moins 8 caractères ou plus.">

            <label for="mdpVerif">Confirmer votre mot de passe</label>
            <input type="password" name="mdpVerif" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                title="Doit contenir au moins une lettre majuscule, une lettre minuscule, un chiffre et au moins 8 caractères ou plus.">

            <input type="submit" value="S'inscrire">
        </form>
    </section>

    <!-- Le reste de votre contenu HTML -->
