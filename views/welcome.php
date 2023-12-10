<style>
.button-colored {
    color: #bebaab;
}

body {
    margin: 0;
    padding: 0;
    background-color: black;
    color: #bebaab;
    font-family: 'Courier New', monospace;
    overflow: hidden;
    height: 100vh;
}

#terminal {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    white-space: nowrap;
    overflow: hidden;
    border-right: 2px solid #bebaab;
    /* Curseur */
    font-size: 20px;
}
</style>
<title>App-Elevate</title>

<div id="terminal"></div>

<div class="background-container">
    <div class="welcome_choice_container">
        <button id="bt_connexion">Connexion</button>
        <button id="bt_inscription">Inscription</button>
        <p>Bêta v1.0</p>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const terminal = document.getElementById("terminal");
        const buttonsContainer = document.querySelector(".welcome_choice_container");
        const connexionButton = document.getElementById("bt_connexion");
        const inscriptionButton = document.getElementById("bt_inscription");

        const messages = [
            "Bienvenue sur App-Elevate!",
            "L'endroit idéal pour élever votre expérience numérique."
        ];
        let messageIndex = 0;
        let index = 0;

        function typeText() {
            terminal.textContent = messages[messageIndex].slice(0, index) + "_"; // Ajoute le curseur

            if (index < messages[messageIndex].length) {
                index++;
                setTimeout(typeText, 50); // Vitesse de frappe (ajustez selon vos préférences)
            } else if (messageIndex < messages.length - 1) {
                // Attendez 1 seconde avant de commencer le prochain message
                setTimeout(() => {
                    messageIndex++;
                    index = 0;
                    typeText();
                }, 1000);
            } else {
                // Une fois tous les messages affichés, ajoutez la classe de couleur aux boutons
                buttonsContainer.style.color = "#bebaab";
                connexionButton.style.color = "#bebaab";
                inscriptionButton.style.color = "#bebaab";

                // Changez également la couleur de la bordure des boutons
                connexionButton.style.borderColor = "#bebaab";
                inscriptionButton.style.borderColor = "#bebaab";
            }
        }

        typeText();
    });
</script>
