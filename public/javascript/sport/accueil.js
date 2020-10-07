window.onload = function () {
    let formConnexion = document.querySelector('.page_connexion');
    let connexionButton = document.querySelector('.connexionButton');
    let inscriptionButton = document.querySelector(".inscriptionButton");
    let principalScreen = document.getElementsByClassName("principalScreen")[0];

    connexionButton.addEventListener('click', () => {
        formConnexion.classList.remove('hide');
        principalScreen.classList.add("hide");
    });

    inscriptionButton.addEventListener('click', () => {
        window.location = "http://localhost/code/blog-with-nutrition/public/index.php/sport/programme/inscription-utilisateur";
    });



};
