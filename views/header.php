<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Application</title>
</head>

<body>

    <!-- En tête de page -->
    <header>
        <nav>
            <section>
                <img id="logo" src="assets/logo/logo2.png" alt="logo Ap-elevate">
                <h2>AppElevate</h2>
                <div class="nav_profile_container">
                    <div class="nav_photo_user"></div>
                    <div class="nav_user_name"></div>
                </div>
            </section>

            <div>
                <div class="burger-menu">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>

                <div class="color-palette" id="colorPalette">
                    <div class="palette-section">
                        <div class="palette-instruction">Choisissez une couleur de thème</div>
                        <div class="color-options">
                            <!-- Couleurs pour le thème -->
                            <div class="color-option" style="background-color: #0d0e00;"
                                onclick="changeThemeColor('#0d0e00')"></div> <!-- Jaune très foncé -->
                            <div class="color-option" style="background-color: #000c00;"
                                onclick="changeThemeColor('#000c00')"></div> <!-- Vert très foncé -->
                            <div class="color-option" style="background-color: #000011;"
                                onclick="changeThemeColor('#000011')"></div> <!-- Bleu très foncé -->
                            <div class="color-option" style="background-color: #100011;"
                                onclick="changeThemeColor('#100011')"></div> <!-- Violet très foncé -->
                            <div class="color-option" style="background-color: #10000b;"
                                onclick="changeThemeColor('#10000b')"></div> <!-- Rose très foncé -->
                            <div class="color-option" style="background-color: #100000;"
                                onclick="changeThemeColor('#100000')"></div> <!-- Rouge très foncé -->
                            <div class="color-option" style="background-color: #100700;"
                                onclick="changeThemeColor('#100700')"></div> <!-- Orange très foncé -->
                            <div class="color-option" style="background-color: #070707;"
                                onclick="changeThemeColor('#070707')"></div> <!-- Gris très foncé -->

                        </div>
                    </div>

                    <div class="palette-section">
                        <div class="palette-instruction">Choisissez une couleur de fond</div>
                        <div class="color-options">
                            <!-- Couleurs pour le fond d'écran -->
                            <div class="color-option" style="background-color: #ffffff;"
                                onclick="changeBackgroundColor('#ffffff')"></div>
                            <!-- Blanc -->
                            <div class="color-option" style="background-color: #d9d9d9;"
                                onclick="changeBackgroundColor('#d9d9d9')"></div>
                            <!-- Gris clair -->
                            <div class="color-option" style="background-color: #808080;"
                                onclick="changeBackgroundColor('#808080')"></div>
                            <!-- Gris -->
                            <div class="color-option" style="background-color: #404040;"
                                onclick="changeBackgroundColor('#404040')"></div>
                            <!-- Gris foncé -->
                            <div class="color-option" style="background-color: #000000;"
                                onclick="changeBackgroundColor('#000000')"></div>
                            <!-- Noir -->
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </header>

</body>

</html>