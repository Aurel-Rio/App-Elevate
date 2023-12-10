// Récupère le burger menu, la palette de couleurs et le footer

const burgerMenu = document.querySelector('.burger-menu');
const colorPalette = document.querySelector('.color-palette');
const footer = document.querySelector('footer');
const registrationSection = document.querySelector('.registration-section');

// Ajoute un écouteur d'événements au burger menu pour ouvrir/fermer la palette de couleurs
burgerMenu.addEventListener('click', togglePalette);
colorPalette.style.display = 'none';

// Fonction pour ouvrir/fermer la palette de couleurs
function togglePalette() {
    colorPalette.style.display = (colorPalette.style.display === 'none' || colorPalette.style.display === '') ? 'block' : 'none';

    if (colorPalette.style.display === 'block') {
        burgerMenu.classList.add('active');
    } else {
        burgerMenu.classList.remove('active');
    }

    updateFooterColor(); // Met à jour la couleur du footer
    updateRegisterFormColor();
}
// Fonction pour changer la couleur du thème
function changeThemeColor(color) {
    document.querySelector('header nav').style.backgroundColor = color;
    togglePalette(); // Ferme la palette de couleurs après avoir choisi une couleur
}

// Fonction pour mettre à jour la couleur du footer
function updateFooterColor() {
    const color = document.querySelector('header nav').style.backgroundColor;
    footer.style.backgroundColor = color;
}

// Fonction pour mettre à jour la couleur du formulaire d'inscription
function updateRegisterFormColor() {
    const color = document.querySelector('header nav').style.backgroundColor;
    registrationSection.style.backgroundColor = color;
}

// Fonction pour changer la couleur de fond du body
function changeBackgroundColor(color) {
    document.body.style.backgroundColor = color;
}


/*Boutons inscription connexion sur l'accueil*/ 

const bouttonsAccueil = document.querySelector('.welcome_choice_container');
const formInscription = document.querySelector('.registration-section');
const formConnexion = document.querySelector('.login-section');

const btInscription = document.querySelector('#bt_inscription');
const btConnexion = document.querySelector('#bt_connexion');
const closeFormButton = document.querySelector('.close-button')

const terminalHome = document.querySelector('#terminal');


formInscription.style.display = 'none';
formConnexion.style.display = 'none';

btInscription.addEventListener('click', (e) => {
    formInscription.style.display = 'flex';
    terminalHome.style.display = 'none';
    bouttonsAccueil.style.display = 'none';
})

btConnexion.addEventListener('click', (e) => {
    // Utilisez le bon formulaire ici
    formConnexion.style.display = 'flex'; // Assurez-vous que formConnexion est défini quelque part
    terminalHome.style.display = 'none';
    bouttonsAccueil.style.display = 'none';
})


closeFormButton.addEventListener('click', (e) => {
    formInscription.style.display = 'none' ;
    formInscription.style.display = 'none' ;
    bouttonsAccueil.style.display = 'initial';
    terminalHome.style.display = 'block';
})

/*
/*BG zoom*//*
     var zoomed = false;

        function zoomAndRotate() {
            var body = document.body;

            // Appliquer le zoom à 50%
            body.style.backgroundSize = zoomed ? "cover" : "150%";

            // Appliquer la rotation
            body.style.transform = zoomed ? "rotate(0deg)" : "rotate(360deg)";  // Ajuster l'angle de rotation selon vos besoins

            // Inverser le statut de zoomed
            zoomed = !zoomed;
        }
*/


