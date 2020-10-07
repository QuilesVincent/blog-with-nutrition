window.onload = () => {


    /**
     * All the training
     * @type {HTMLCollectionOf<Element>}
     */
    let arrayAllTrainingDiv = document.getElementsByClassName("circuit");

    /**
     * All the filtres and their textContent
     * @type {Element}
     */
    let filtreCircuitTraining = document.getElementsByClassName("contentFiltreCircuitTraining")[0];
    let textCircuitTraining = filtreCircuitTraining.lastElementChild.textContent;
    let filtreYoga = document.getElementsByClassName("contentFiltreYogaTraining")[0];
    let textYoga = filtreYoga.lastElementChild.textContent;
    let filtreFastTraining = document.getElementsByClassName("contentFiltreFastTraining")[0];
    let textFastTraining = filtreFastTraining.lastElementChild.textContent;
    let filtreAbdosTraining = document.getElementsByClassName("contentFiltreAbdosTraining")[0];
    let textAbdosTraining = filtreAbdosTraining.lastElementChild.textContent;
    let filtreStretching = document.getElementsByClassName("contentFiltreStretchingTraining")[0];
    let textStretching = filtreStretching.lastElementChild.textContent;

    /**
     * Array with all the filtres
     * @type {(Element|*)[]}
     */
    let arrayAllFiltres = [filtreCircuitTraining, filtreYoga, filtreFastTraining, filtreAbdosTraining, filtreStretching];

    /**
     * AddEventListener for each onglet
     */
    filtreCircuitTraining.addEventListener("click", (e) => {
        let textoCircuitTraining = textCircuitTraining.replace(" ", "");
        hiddenNotGoodTraining(arrayAllTrainingDiv, textoCircuitTraining);
        toAddClassOnTheGoodOngletToChangeBackgroundColor(arrayAllFiltres, textCircuitTraining);
    })
    filtreYoga.addEventListener("click", (e) => {
        hiddenNotGoodTraining(arrayAllTrainingDiv, textYoga);
        toAddClassOnTheGoodOngletToChangeBackgroundColor(arrayAllFiltres, textYoga);
    })
    filtreFastTraining.addEventListener("click", (e) => {
        hiddenNotGoodTraining(arrayAllTrainingDiv, textFastTraining);
        toAddClassOnTheGoodOngletToChangeBackgroundColor(arrayAllFiltres, textFastTraining);
    })
    filtreAbdosTraining.addEventListener("click", (e) => {
        hiddenNotGoodTraining(arrayAllTrainingDiv, textAbdosTraining);
        toAddClassOnTheGoodOngletToChangeBackgroundColor(arrayAllFiltres, textAbdosTraining);
    })
    filtreStretching.addEventListener("click", (e) => {
        hiddenNotGoodTraining(arrayAllTrainingDiv, textStretching);
        toAddClassOnTheGoodOngletToChangeBackgroundColor(arrayAllFiltres, textStretching);
    })


    function toAddClassOnTheGoodOngletToChangeBackgroundColor(arrayWithAllFilters, textFilter){
        let arrayWithAllFiltersLength = arrayWithAllFilters.length;
        for(let i = 0; i < arrayWithAllFiltersLength; i++) {
            if (arrayWithAllFilters[i].lastElementChild.textContent === textFilter){
                arrayWithAllFilters[i].classList.add("trainingSelected");
            } else {
                arrayWithAllFilters[i].classList.remove("trainingSelected");
            }
        }
    }


    /**
     * Function to display good training and hidden the other
     * @param arrayAllTraining
     * @param trainingToDisplay
     */
    function hiddenNotGoodTraining(arrayAllTraining, trainingToDisplay) {
        let arrayAllTrainingLength = arrayAllTraining.length;
        for (let i = 0; i < arrayAllTrainingLength; i++) {
            if (arrayAllTraining[i].classList.contains(trainingToDisplay)) {
                arrayAllTraining[i].classList.remove("hidden");
            } else {
                arrayAllTraining[i].classList.add("hidden");
            }
        }
    }


}