/**
 * Button to mean the week is done
 * @type {HTMLCollectionOf<Element>}
 */
let buttonYes = document.getElementsByClassName("weekDoneYes");

/**
 * Button to mean the week is not done
 * @type {HTMLCollectionOf<Element>}
 */
let buttonNo = document.getElementsByClassName("weekNotDone");

/**
 * The contener for the answer yes or no if the week's done
 * @type {HTMLCollectionOf<Element>}
 */
let contenerInfoWeekDoneOrNot = document.getElementsByClassName("weekDoneContener");

/**
 * The contener for the answer why the week doesn't done
 * @type {HTMLCollectionOf<Element>}
 */
let contenerWhyWeekDontDone = document.getElementsByClassName("contenerWhyWeekDontDone");

/**
 * The div for the answer holidays
 * @type {HTMLCollectionOf<Element>}
 */
let answerWhyIsHolidays = document.getElementsByClassName("holidaysDiv");
/**
 * The div for the answer maladie or fiest
 * @type {HTMLCollectionOf<Element>}
 */
let answerWhyIsMaladieOrFiestal = document.getElementsByClassName("maladieOrFiesta");
/**
 * The div for the answer motivation miss
 * @type {HTMLCollectionOf<Element>}
 */
let answerWhyIsMotivationMiss = document.getElementsByClassName("motivationMiss");

/**
 * The contener to show the astuce to purpose to do a detox after holidays
 * @type {HTMLCollectionOf<Element>}
 */
let contenerAstuceAfterHolidays = document.getElementsByClassName("contenerAstuceAfterHolidays");
/**
 *
 * @type {HTMLCollectionOf<Element>}
 */
let buttonYesDetoxAfterHolidays = document.getElementsByClassName("buttonDetoxYes");
/**
 *
 * @type {HTMLCollectionOf<Element>}
 */
let buttonNotDetoxAfterHolidays = document.getElementsByClassName("buttonDetoxNot");

/**
 * The contener to show the astuce to do a detox and proposition to push in the planning
 * @type {HTMLCollectionOf<Element>}
 */
let contenerAstuceAfterMaladieOrFiesta = document.getElementsByClassName("contenerAstuceAfterMaladieOrFiesta");
/**
 *
 * @type {HTMLCollectionOf<Element>}
 */
let buttonYesDetoxProgrammationAfterMaladieOrFiesta = document.getElementsByClassName("buttonDetoxProgrammationYes");
/**
 *
 * @type {HTMLCollectionOf<Element>}
 */
let buttonNotDetoxProgrammationAfterMaladieOrFiesta = document.getElementsByClassName("buttonDetoxProgrammationNot");

/**
 * The contener to offer the possibility to order directly the product
 * @type {HTMLCollectionOf<Element>}
 */
let contenerPropositionBuyProductDetox = document.getElementsByClassName("contenerPropositionBuyProduct");
/**
 *
 * @type {HTMLCollectionOf<Element>}
 */
let butttonBuyDetoxProduct = document.getElementsByClassName("buttonBuyDetoxProduct");
/**
 *
 * @type {HTMLCollectionOf<Element>}
 */
let buttonDontBuyDetoxProduct = document.getElementsByClassName("buttonDontBuyDetoxProduct");

/**
 * The contener to show where find smoothie detox in the application
 * @type {HTMLCollectionOf<Element>}
 */
let contenerMessageToSayWhereFindSmoothieDetox = document.getElementsByClassName("messageToSayWhereFindSmoothieDetox");

/**
 * The form contener to writte the informations by the user
 * @type {HTMLCollectionOf<Element>}
 */
let formContener = document.getElementsByClassName("divForm");

/**
 * if click on Yes
 * add hidden to hidden the contener for the answer yes or no if the week''s done
 * Remove hidden in the form to display him
 */
buttonYes[0].addEventListener("click", (e) => {
    contenerInfoWeekDoneOrNot[0].classList.add("hidden");
    formContener[0].classList.remove("hidden");
});

/**
 * Post the information to change the date of the next control
 * and redirect on the principal page
 */
buttonNo[0].addEventListener("click", (e) => {
    getHttpRequest("http://localhost/code/blog-with-nutrition/public/index.php/sport/programme/weekControlChangeDate-javascript");
    contenerInfoWeekDoneOrNot[0].classList.add("hidden");
    contenerWhyWeekDontDone[0].classList.remove("hidden");
});

answerWhyIsHolidays[0].addEventListener("click", (e) => {
    contenerWhyWeekDontDone[0].classList.add("hidden");
    contenerAstuceAfterHolidays[0].classList.remove("hidden");
});

buttonYesDetoxAfterHolidays[0].addEventListener("click", (e) => {
    contenerAstuceAfterHolidays[0].classList.add("hidden");
    contenerAstuceAfterMaladieOrFiesta[0].classList.remove("hidden");
})

buttonNotDetoxAfterHolidays[0].addEventListener("click", (e) => {
    contenerAstuceAfterHolidays[0].classList.add("hidden");
    contenerMessageToSayWhereFindSmoothieDetox[0].classList.remove("hidden");
    setTimeout(redirectOnTheHomePage(), 4000);
})

buttonNotDetoxProgrammationAfterMaladieOrFiesta[0].addEventListener("click", (e) => {
    contenerAstuceAfterMaladieOrFiesta[0].classList.add("hidden");
    contenerMessageToSayWhereFindSmoothieDetox[0].classList.remove("hidden");
    setTimeout(redirectOnTheHomePage(), 4000);
});

buttonYesDetoxProgrammationAfterMaladieOrFiesta[0].addEventListener("click", (e) => {
    contenerAstuceAfterMaladieOrFiesta[0].classList.add("hidden");
    contenerPropositionBuyProductDetox[0].classList.remove("hidden");
});

butttonBuyDetoxProduct[0].addEventListener("click", (e) => {
    alert("amener sur la page d'achat des produits et le laisser choisir 6 smoothie parmis les différents produits");
})

buttonDontBuyDetoxProduct[0].addEventListener("click", (e) => {
    contenerAstuceAfterMaladieOrFiesta[0].classList.add("hidden");
    contenerMessageToSayWhereFindSmoothieDetox[0].classList.remove("hidden");
    setTimeout(redirectOnTheHomePage(), 4000);
})

function redirectOnTheHomePage() {
    windows.location = "http://localhost/code/blog-with-nutrition/public/index.php/sport/programme/programs";
}


/**
 * Get information in the controller Symfony that search the information on the human in the JsonFile
 * @param url
 */
function getHttpRequest(url) {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", url);
    xhr.send();
    xhr.onload = function () {
        //Si le statut HTTP n'est pas 200...
        if (xhr.status !== 200) {
            //...On affiche le statut et le message correspondant
            alert("Erreur " + xhr.status + " : " + xhr.statusText);
        } else {
            /**
             * transform the string Json data in an array
             * @type {any}
             */
            let tablInformationPlanningObject = JSON.parse(xhr.responseText);
            console.log(tablInformationPlanningObject);
        }
    };
}



