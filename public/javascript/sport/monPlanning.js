window.onload = function () {
    /**
     *Note : il faudra également enregistré dans un fichier ou bdd les informations rentré par l'utilisateur sur des semaines différentes et les incorporé immédiatement
     */

    /**
     * Add class hidden on the week displayed to become hidden
     * @param weekDisplayedBase
     * @constructor
     */
    function HiddenWeekDisplayedAfterChange(weekDisplayedBase) {
        let weekDisplayedBaseLength = weekDisplayedBase.length;
        for (let i = 0; i < weekDisplayedBaseLength; i++) {
            weekDisplayedBase[i].classList.add("hidden");
        }
    }


    /**
     *
     * @param weekDisplayedBase
     * @constructor
     */
    function DisplayPreviousWeek(weekDisplayedBase) {
        /**
         * It's the first day of the week displayed
         */
        let firstDay = weekDisplayedBase[0];

        /**
         * It's the last day of the previous week
         * @type {Element}
         */
        let lastDayPreviousWeek = firstDay.previousElementSibling;
        lastDayPreviousWeek.classList.add("weekDisplayed");
        lastDayPreviousWeek.classList.remove("hidden");
        /**
         * Add the class weekDisplayed in all the previousElementsSibling until the not included last day of the previous week
         */
        while (!lastDayPreviousWeek.previousElementSibling.classList.contains("lastDay")) {
            lastDayPreviousWeek.previousElementSibling.classList.add("weekDisplayed");
            lastDayPreviousWeek.previousElementSibling.classList.remove("hidden");
            lastDayPreviousWeek = lastDayPreviousWeek.previousElementSibling;
        }
    }


    /**
     *
     * @param weekDisplayedBase
     * @constructor
     */
    function DisplayNextWeek(weekDisplayedBase) {
        /**
         * It's the last day of the displayed week
         */
        let lastDay = weekDisplayedBase[6];
        /**
         * It's the first day of the next week
         * @type {Element}
         */
        let firstDayNextWeek = lastDay.nextElementSibling;
        firstDayNextWeek.classList.add("weekDisplayed");
        firstDayNextWeek.classList.remove("hidden");
        /**
         * Add the class weekDisplayed in all the nextElementsSibling until the not included first day of the next week
         */
        while (!firstDayNextWeek.nextElementSibling.classList.contains("firstDay")) {
            firstDayNextWeek.nextElementSibling.classList.add("weekDisplayed");
            firstDayNextWeek.nextElementSibling.classList.remove("hidden");
            firstDayNextWeek = firstDayNextWeek.nextElementSibling;
        }
    }


    /**
     *
     * @param lineHidden
     * @constructor
     */
    function DeleteClassDisplayedOnHidden(lineHidden) {
        let lineHiddenLength = lineHidden.length;
        for (let i = 0; i < lineHiddenLength; i++) {
            /**
             * To delete the class weekDisplayed on the html Elements that contain hidden and again weekDisplayed
             */
            if (lineHidden[i].classList.contains("weekDisplayed")) {
                lineHidden[i].classList.remove("weekDisplayed");
            }
        }
    }


    /**
     *
     * @param weekDisplayedBaseLineInfo
     * @constructor
     */
    function DisplayNextWeekLineInfo(weekDisplayedBaseLineInfo) {
        /**
         * use to keep the 7 elements after the 7 elements actually displayed
         * @type {*[]}
         */
        let arrayNewElementToClassListAdd = [];

        /**
         * we check the elements in the line
         * If the elements contains weekDisplayedLinfo
         *      we add hidden on this, and remove to this weekDisplayedLineInfo and weekDisplayed
         */
        for (let i = 0; i < weekDisplayedBaseLineInfo.length; i++) {
            if (weekDisplayedBaseLineInfo[i].classList.contains("weekDisplayedLineInfo")) {
                weekDisplayedBaseLineInfo[i].classList.add("hidden");
                weekDisplayedBaseLineInfo[i].classList.remove("weekDisplayedLineInfo");
                weekDisplayedBaseLineInfo[i].classList.remove("weekDisplayed");
                arrayNewElementToClassListAdd.push(weekDisplayedBaseLineInfo[i + 7]);
            }
        }
        /**
         * For each element previously recovered
         *      we add class weekDisplayedLineInfo, weekDisplayed and remove the class hidden
         */
        for (let i = 0; i < arrayNewElementToClassListAdd.length; i++) {
            arrayNewElementToClassListAdd[i].classList.add("weekDisplayedLineInfo");
            arrayNewElementToClassListAdd[i].classList.add("weekDisplayed");
            arrayNewElementToClassListAdd[i].classList.remove("hidden");
        }
    }


    /**
     *
     * @param weekDisplayedBaseLineInfo
     * @constructor
     */
    function DisplayPreviousWeekLineInfo(weekDisplayedBaseLineInfo) {
        /**
         * used to keep the 7 elements before the 7 elements actually displayed
         * @type {*[]}
         */
        let arrayNewElementToClassListAdd = [];

        /**
         * we check the elements in the line
         * If the elements contains weekDisplayedLinfo
         *      we add hidden on this, and remove to this weekDisplayedLineInfo and weekDisplayed
         */
        for (let i = 0; i < weekDisplayedBaseLineInfo.length; i++) {
            if (weekDisplayedBaseLineInfo[i].classList.contains("weekDisplayedLineInfo")) {
                weekDisplayedBaseLineInfo[i].classList.add("hidden");
                weekDisplayedBaseLineInfo[i].classList.remove("weekDisplayedLineInfo");
                weekDisplayedBaseLineInfo[i].classList.remove("weekDisplayed");
                arrayNewElementToClassListAdd.push(weekDisplayedBaseLineInfo[i - 7]);
            }
        }
        /**
         * For each element previously recovered
         *      we add class weekDisplayedLineInfo, weekDisplayed and remove the class hidden
         */
        for (let i = 0; i < arrayNewElementToClassListAdd.length; i++) {
            arrayNewElementToClassListAdd[i].classList.add("weekDisplayedLineInfo");
            arrayNewElementToClassListAdd[i].classList.add("weekDisplayed");
            arrayNewElementToClassListAdd[i].classList.remove("hidden");
        }
    }


    /**
     * We select the weekDisplayed
     * We take the firstDay and lastDay
     * We take the the day and the month for each twice
     * We change textContent of the firstDay and lastDay of the weekDateTitle
     * We compare the month of the firstDay and last Day
     *      If they are no equal -> we add the month of the first day in the weekDateTitle after the firstDay
     *
     * @constructor
     */
    function ChangeDateWeekDateTitle() {
        let arrayAllMonth = [
            "Janvier", "Février", "Mars", "Avril",
            "Mai", "Juin", "Juillet", "Aout",
            "Septembre", "Octobre", "Novembre", "Décembre"
        ];
        let weekDisplayedActually = document.getElementsByClassName("weekDisplayed");
        let dayFirstDayDayWeekDisplayed = weekDisplayedActually[0].textContent.split("/")[0];
        let dayLastDayWeekDisplayed = weekDisplayedActually[6].textContent.split("/")[0];
        let monthFirstDayWeekDisplayed = weekDisplayedActually[0].textContent.split("/")[1];
        let monthLastDayWeekDisplayed = weekDisplayedActually[6].textContent.split("/")[1];

        let firstDayWeekDate = document.getElementsByClassName("firstDayWeekDate");
        let lastDayWeekDate = document.getElementsByClassName("lastDayWeekDate");
        let monthFirstDayWeekDate = document.getElementsByClassName("monthWeekDateFirstDay");
        let monthWeekDate = document.getElementsByClassName("monthWeekDate");
        let yearWeekDate = document.getElementsByClassName("yearWeekDate");

        firstDayWeekDate[0].textContent = dayFirstDayDayWeekDisplayed;
        lastDayWeekDate[0].textContent = dayLastDayWeekDisplayed;
        monthWeekDate[0].textContent = arrayAllMonth[parseInt(monthLastDayWeekDisplayed) - 1];

        if (monthFirstDayWeekDisplayed !== monthLastDayWeekDisplayed) {
            monthFirstDayWeekDate[0].textContent = arrayAllMonth[parseInt(monthFirstDayWeekDisplayed) - 1];
            if (monthFirstDayWeekDate[0].classList.contains("hidden")) {
                monthFirstDayWeekDate[0].classList.remove("hidden");
            }
        } else {
            if (!monthFirstDayWeekDate[0].classList.contains("hidden")) {
                monthFirstDayWeekDate[0].classList.add("hidden");
            }
        }
    }

    /**
     * Add the number of the day for each line
     * @param line
     */
    function addNumberDayInPlanning(line) {
        let lineLength = line.length;
        for(let i = 0; i < lineLength; i++) {
            if(!line[i].classList.contains("date")){
                if(line[i+1] === undefined) {
                    break;
                }
                line[i+1].classList.add(`day${i}`);
            } else {
                line[i].classList.add(`day${i}`);
            }

        }
    }

    /**
     * The line that contains the date
     * @type {HTMLCollectionOf<Element>}
     */
    let lineDate = document.getElementsByClassName("date");

    /**
     * All the lineDate that are displayed
     * @type {HTMLCollectionOf<Element>}
     */
    let weekDisplayed = document.getElementsByClassName("weekDisplayed");

    /**
     * All the case of the lineInfo
     * @type {HTMLCollectionOf<Element>}
     */
    let allCasesLineChoice = document.getElementsByClassName("linePlanningRemplace");

    /**
     * All the lineInfo that are displayed
     * @type {HTMLCollectionOf<Element>}
     */
    let weekLineInfoDisplayed = document.getElementsByClassName("weekDisplayedLineInfo");

    /**
     * Event to have the next week
     * @type {HTMLCollectionOf<Element>}
     */
    let changeWeek = document.getElementsByClassName("nextWeek");
    /**
     * Event to have the previous week
     * @type {HTMLCollectionOf<Element>}
     */
    let previousWeek = document.getElementsByClassName("previousWeek");

    /**
     * All the lineDate that are hidden
     * @type {HTMLCollectionOf<Element>}
     */
    let lineTableHidden = document.getElementsByClassName("hidden");

    /**
     * line 1 : Routine
     * @type {HTMLCollectionOf<Element>}
     */
    let line1 = document.getElementsByClassName("line1");
    /**
     * line 2 : petit déjeuner
     * @type {HTMLCollectionOf<Element>}
     */
    let line2 = document.getElementsByClassName("line2");
    /**
     * line 3 : Encas
     * @type {HTMLCollectionOf<Element>}
     */
    let line3 = document.getElementsByClassName("line3");
    /**
     * line 4 Déjeuner
     * @type {HTMLCollectionOf<Element>}
     */
    let line4 = document.getElementsByClassName("line4");
    /**
     * line 5 : Encas
     * @type {HTMLCollectionOf<Element>}
     */
    let line5 = document.getElementsByClassName("line5");
    /**
     * line 6 : Dîner
     * @type {HTMLCollectionOf<Element>}
     */
    let line6 = document.getElementsByClassName("line6");


    getHttpRequest("http://localhost/code/blog-with-nutrition/public/index.php/sport/programme/planning-js");

    addNumberDayInPlanning(line1);
    addNumberDayInPlanning(line2);
    addNumberDayInPlanning(line3);
    addNumberDayInPlanning(line4);
    addNumberDayInPlanning(line5);
    addNumberDayInPlanning(line6);
    addNumberDayInPlanning(lineDate);


    changeWeek[0].addEventListener("click", (e) => {
        /**
         * First we add hidden on the week actually displayed
         * Then, we add class weekDisplayed on the nextWeek to display this week
         * Finnaly, we delete class weekDisplayed on the weeks that contains class hidden to display only the good week
         */
        new HiddenWeekDisplayedAfterChange(weekDisplayed);
        new DisplayNextWeek(weekDisplayed);
        new DeleteClassDisplayedOnHidden(lineTableHidden);
        new DisplayNextWeekLineInfo(line1);
        new DisplayNextWeekLineInfo(line2);
        new DisplayNextWeekLineInfo(line3);
        new DisplayNextWeekLineInfo(line4);
        new DisplayNextWeekLineInfo(line5);
        new DisplayNextWeekLineInfo(line6);
        new ChangeDateWeekDateTitle();
    })

    previousWeek[0].addEventListener("click", (e) => {
        /**
         * First we add hidden on the week actually displayed
         * Then, we add class weekDisplayed on the previous week to display this week
         * Finnaly, we delete class weekDisplayed on the weeks that contains class hidden to display only the good week
         */
        new HiddenWeekDisplayedAfterChange(weekDisplayed);
        new DisplayPreviousWeek(weekDisplayed);
        new DeleteClassDisplayedOnHidden(lineTableHidden);
        new DisplayPreviousWeekLineInfo(line1);
        new DisplayPreviousWeekLineInfo(line2);
        new DisplayPreviousWeekLineInfo(line3);
        new DisplayPreviousWeekLineInfo(line4);
        new DisplayPreviousWeekLineInfo(line5);
        new DisplayPreviousWeekLineInfo(line6);
        new ChangeDateWeekDateTitle();
    })


    /**
     * variable used for the popUp that will contain all the circuits or menu
     */
    var popup;
    /**
     * After a click on the window
     * If a case contains caseSelected
     * We close the popup to become on the main window
     */
    document.addEventListener("click", (e) => {
        let caseSelected = document.getElementsByClassName("caseSelected");
        if (caseSelected[0] !== undefined) {
            popup.close()
            for (let i = 0; i < caseSelected.length; i++) {
                caseSelected[i].classList.remove("caseSelected");
            }
        } else if (e.target.classList.contains("lineTraining")) {
            e.target.classList.add("caseSelected");
            popup = window.open("planning-programme", "pop", "width=900, height=450");
        } else if (e.target.classList.contains("lineBreakfast")) {
            e.target.classList.add("caseSelected");
            popup = window.open("planning-food-breakfast", "pop", "width=900, height=450");
        } else if (e.target.classList.contains("lineLunch")) {
            e.target.classList.add("caseSelected");
            popup = window.open("planning-food-meal", "pop", "width=900, height=450");
        } else if (e.target.classList.contains("lineDinner")) {
            e.target.classList.add("caseSelected");
            popup = window.open("planning-food-meal", "pop", "width=900, height=450");
        } else if (e.target.classList.contains("lineSnack")) {
            e.target.classList.add("caseSelected");
            popup = window.open("planning-food-snack", "pop", "width=900, height=450");
        }

    })




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

                if (tablInformationPlanningObject[0] !== null) {
                    /**
                     * For each array information, we transform the string data in an array
                     * We use the informations to writte the name of the data in the good box
                     */
                    for (let i = 0; i < tablInformationPlanningObject[0].length; i++) {

                        if(tablInformationPlanningObject[0][i] === "") {
                            continue;
                        } else {
                            /**
                             * Transformation in an array
                             * @type {*|string[]}
                             */
                            let tableInformationPlanningArray = tablInformationPlanningObject[0][i].split(",");
                            /**
                             * Select the good line with the second information in the array information of the human
                             * @type {HTMLCollectionOf<Element>}
                             */
                            let lineBoxSpanTextInformation = document.getElementsByClassName(tableInformationPlanningArray[1]);
                            /**
                             * Select the good box of the line selected before with the third information in the array information of the human
                             * @type {Element}
                             */
                            let numberBoxOntheLineSelectedBefore = lineBoxSpanTextInformation[parseInt(tableInformationPlanningArray[2])];
                            /**
                             * Finally, add the first information of the array information of the human in the element span text content
                             * @type {*|string}
                             */
                            let textIndication1GoodBox = numberBoxOntheLineSelectedBefore.firstElementChild.lastElementChild;
                            textIndication1GoodBox.textContent = tableInformationPlanningArray[0];

                            let textIndication2GoodBox = numberBoxOntheLineSelectedBefore.lastElementChild.lastElementChild;
                            if(numberBoxOntheLineSelectedBefore.classList.contains("line1")) {
                                if(textIndication1GoodBox.textContent === "Repos") {
                                    textIndication1GoodBox.style.color = "#5774EB";
                                    numberBoxOntheLineSelectedBefore.style.backgroundColor = "#E5EAFE";
                                    textIndication2GoodBox.style.display = "none";
                                } else {
                                    textIndication2GoodBox.textContent = "voir l'entraînement";
                                    textIndication1GoodBox.style.color = "#EB9464";
                                    numberBoxOntheLineSelectedBefore.style.backgroundColor = "#FEEEE5";
                                }
                            } else {
                                textIndication2GoodBox.textContent = "voir la recette";
                                if(numberBoxOntheLineSelectedBefore.classList.contains("line2") || numberBoxOntheLineSelectedBefore.classList.contains("line4") || numberBoxOntheLineSelectedBefore.classList.contains("line6")) {
                                    numberBoxOntheLineSelectedBefore.style.backgroundColor = "#e6fbf0";
                                    textIndication1GoodBox.style.color = "#38CC78";
                                } else {
                                    numberBoxOntheLineSelectedBefore.style.backgroundColor = "#fcfaee";
                                    textIndication1GoodBox.style.color = "#E2CD68";
                                }
                            }

                            textIndication2GoodBox.classList.add("textToSee2");
                            textIndication2GoodBox.classList.remove("textIndication2");

                        }



                    }
                }

            }
        };
    }


    function postHttpRequestProgramme(url, data) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", url);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onload = function () {
            //Si le statut HTTP n'est pas 200...
            if (xhr.status !== 200) {
                //...On affiche le statut et le message correspondant
                alert("Erreur " + xhr.status + " : " + xhr.statusText);
            } else {
                console.log(`succès${xhr.status} : ${xhr.statusText}`);
                alert("bravo, ton planning est enregistré");


                return xhr.responseText;
            }
        };
        xhr.send("data=" + data);
    }

}