

    <section class="login-section form-cone">
        <div class="close-button">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <h2 class="h2_underline">Connexion</h2>
        <p class="intro-text">Connectez-vous pour accéder à votre compte.</p>
        <form action="./controllers/connexionController.php" method="post">
            <label for="email">Entrez votre email</label>
            <input type="email" name="email" required>

            <label for="mdp">Entrez votre mot de passe</label>
            <input type="password" name="mdp" required>

            <input type="submit" value="Se connecter">
        </form>
    </section>

