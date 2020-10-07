window.onload = function () {

    /**
     * To have the date of the day actually
     * @type {Date}
     */
    let date = new Date();
    let month = date.getMonth() + 1;
    let day = date.getDate();
    let textVerif = `${day}/${month}`;


    let nbreSeancePlannifie = 0;

    /**
     * Variable pour revenir au 1 er jour de la semaine en fonction du day actually
     * le dimanche est 0 et samedi le chiffre 6
     */
    let dateBeginningWeek = new Date();

    switch (date.getDay()) {
        case 0:
            dateBeginningWeek.setTime(date.getTime() - 86400000 * 6);
            break;
        case 2:
            dateBeginningWeek.setTime(date.getTime() - 86400000);
            break;
        case 3:
            dateBeginningWeek.setTime(date.getTime() - 86400000 * 2);
            break;
        case 4:
            dateBeginningWeek.setTime(date.getTime() - 86400000 * 3);
            break;
        case 5:
            dateBeginningWeek.setTime(date.getTime() - 86400000 * 4);
            break;
        case 6:
            dateBeginningWeek.setTime(date.getTime() - 86400000 * 5);
            break;
        default:
            console.log("héro");
    }


    /**
     * To have all the date of the week
     * We date the dateBeginningWeek, selected before in the swith, and add each one day (i) the time of millisecond of one day
     * and save in an array to use later in the getHTTPRequest
     * @type {Date}
     */
    let dateAfterChange = new Date();
    let monthJson;
    let dayJson;
    let writtingDayMontToFindGoodDateInJson;
    let tableauContenerAllDateOfTheWeek = [];

    for (let i = 0; i < 7; i++) {
        dateAfterChange.setTime(dateBeginningWeek.getTime() + 86400000 * i);
        monthJson = dateAfterChange.getMonth() + 1;
        dayJson = dateAfterChange.getDate();
        writtingDayMontToFindGoodDateInJson = `${dayJson}/${monthJson}`;
        tableauContenerAllDateOfTheWeek.push(writtingDayMontToFindGoodDateInJson);
    }


    let divUser = document.getElementsByClassName("userInfoDayTraining")[0];

    let infoDayTraining = document.getElementsByClassName("infoDayTraining")[0];

    let divPictureDayTraining = document.getElementsByClassName("divPictureDayTraining")[0];
    let pictureDayTraining = document.createElement("img");
    pictureDayTraining.classList.add("pictureDayTraining");
    let textPictureDayTimeSeance = document.getElementsByClassName("paraphTimeSeance")[0];
    let iconeIntensityPictureDay = document.getElementsByClassName("paraphIntesitySeance")[0];
    let textPictureDayTypeSeance = document.getElementsByClassName("paraphTypeSeance")[0]

    let userInfoPlanning = document.getElementsByClassName("userInfoPlanning")[0];

    let divContentNameTrainingDayActually = document.getElementsByClassName("divContentNameTrainingDayActually")[0];
    let divContentNameBreakfastToDay = document.getElementsByClassName("divContentNameBreakfastDayActually")[0];
    let divContentNameFirstMealToDay = document.getElementsByClassName("divContentNameFirstMealDayActually")[0];
    let divContentNameSecondMealToDay = document.getElementsByClassName("divContentNameSecondMealDayActually")[0];

    let linkPlanningTrainingDayActually = document.getElementsByClassName("divContentLink")[0];
    let linkPlanningBreakfastDayActually = document.getElementsByClassName("divContentLink")[1];
    let linkPlanningFirstMealDayActually = document.getElementsByClassName("divContentLink")[2];
    let linkPlanningSecondMealDayActually = document.getElementsByClassName("divContentLink")[3];

    /**
     * This array will use to check if the date already found (avant que je rende impossible d'enregistrer plusieurs fois sur la même date, actuellement, si on enregistre plusieurs fois l'entrainement dans le fichier json, ça ne supprime pas l'ancien)
     * @type {*[]}
     */
    let tableauCompareDateAlreadyUse = [];


    getHttpRequest("http://localhost/code/blog-with-nutrition/public/index.php/sport/programme/planning-js");

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


                        /**
                         * Transformation in an array
                         * @type {*|string[]}
                         */
                        let tableInformationPlanningArray = tablInformationPlanningObject[0][i].split(",");


                        /**
                         * Indicate number training done in the week
                         */
                        for (let iDate = 0; iDate < tableauContenerAllDateOfTheWeek.length; iDate++) {
                            console.log(tableauContenerAllDateOfTheWeek[iDate]);
                            console.log(tableInformationPlanningArray[5]);
                            console.log(tableauContenerAllDateOfTheWeek.length);
                            if (tableInformationPlanningArray[5] === tableauContenerAllDateOfTheWeek[iDate] && tableInformationPlanningArray[1] === "line1" && tableInformationPlanningArray[0] !== "Repos") {
                                tableauCompareDateAlreadyUse.push(tableauContenerAllDateOfTheWeek[iDate]);
                            }

                        }
                        let tableauCompareDateAlreadyUseLength = tableauCompareDateAlreadyUse.length;
                        if (tableauCompareDateAlreadyUseLength === 0) {
                            nbreSeancePlannifie = 0;
                        } else {
                            nbreSeancePlannifie = 0;
                            for (let jdate = 0; jdate < tableauContenerAllDateOfTheWeek.length; jdate++) {
                                if(tableauCompareDateAlreadyUse.includes(tableauContenerAllDateOfTheWeek[jdate])) {
                                    nbreSeancePlannifie++;
                                }
                            }
                        }

                        console.log(nbreSeancePlannifie);
                        console.log(tableauCompareDateAlreadyUse);


                        //console.log(tableInformationPlanningArray[5]);

                        /**
                         * Verification if the day actually (text verif) is in the file, we add in the div with the training of day actually
                         * and for the planning (training, breakfast, lunch and dinner)
                         */
                        if (tableInformationPlanningArray[5] === textVerif) {
                            //console.log(tableInformationPlanningArray[1]);
                            let nameCircuit;
                            switch (tableInformationPlanningArray[1]) {
                                case "line1" :
                                    //console.log(tableInformationPlanningArray[4]);
                                    //console.log(divUser);
                                    nameCircuit = tableInformationPlanningArray[0];
                                    divPictureDayTraining.style.background = "url(" + '../../../image/circuit/' + nameCircuit + '.jpg' + ")" + "no-repeat";
                                    divPictureDayTraining.style.backgroundSize = "cover";
                                    textPictureDayTimeSeance.textContent = `${tableInformationPlanningArray[7]} min`;
                                    iconeIntensityPictureDay.textContent = tableInformationPlanningArray[8];
                                    //pictureDayTraining.src = `../../../image/circuit/${tableInformationPlanningArray[0]}.jpg`;
                                    //divPictureDayTraining.appendChild(pictureDayTraining);
                                    infoDayTraining.lastElementChild.textContent = tableInformationPlanningArray[0];
                                    textPictureDayTypeSeance.textContent = `Séance ${tableInformationPlanningArray[6]}`;
                                    divContentNameTrainingDayActually.lastElementChild.textContent = tableInformationPlanningArray[0];
                                    linkPlanningTrainingDayActually.firstElementChild.textContent = "voir l'entraînement";
                                    linkPlanningTrainingDayActually.firstElementChild.href = `http://localhost/code/blog-with-nutritione/public/index.php/sport/programme/circuit/${tableInformationPlanningArray[0]}`;
                                    break;
                                case "line1FirstDay" :
                                    console.log(tableInformationPlanningArray[4]);
                                    console.log(divUser);
                                    nameCircuit = tableInformationPlanningArray[0];
                                    divPictureDayTraining.style.background = "url(" + '../../../image/circuit/' + nameCircuit + '.jpg' + ")" + "no-repeat";
                                    divPictureDayTraining.style.backgroundSize = "cover";
                                    textPictureDayTimeSeance.textContent = `${tableInformationPlanningArray[7]} min`;
                                    iconeIntensityPictureDay.textContent = tableInformationPlanningArray[8];
                                    //pictureDayTraining.src = `../../../image/circuit/${tableInformationPlanningArray[0]}.jpg`;
                                    //divPictureDayTraining.appendChild(pictureDayTraining);
                                    infoDayTraining.lastElementChild.textContent = tableInformationPlanningArray[0];
                                    textPictureDayTypeSeance.textContent = `Séance ${tableInformationPlanningArray[6]}`;
                                    divContentNameTrainingDayActually.lastElementChild.textContent = tableInformationPlanningArray[0];
                                    linkPlanningTrainingDayActually.firstElementChild.textContent = "voir l'entraînement";
                                    linkPlanningTrainingDayActually.firstElementChild.href = `http://localhost/code/blog-with-nutrition/public/index.php/sport/programme/circuit/${tableInformationPlanningArray[0]}`;
                                    break;
                                case "line2" :
                                    divContentNameBreakfastToDay.lastElementChild.textContent = tableInformationPlanningArray[0];
                                    linkPlanningBreakfastDayActually.firstElementChild.textContent = "voir la recette";
                                    linkPlanningBreakfastDayActually.firstElementChild.href = `http://localhost/code/blog-with-nutrition/public/index.php/sport/programme/recette/${tableInformationPlanningArray[0]}-Breakfastk`;
                                    break;
                                case "line4" :
                                    divContentNameFirstMealToDay.lastElementChild.textContent = tableInformationPlanningArray[0];
                                    linkPlanningFirstMealDayActually.firstElementChild.textContent = "voir la recette";
                                    linkPlanningFirstMealDayActually.firstElementChild.href = `http://localhost/code/blog-with-nutrition/public/index.php/sport/programme/recette/${tableInformationPlanningArray[0]}-Breakfastk`;
                                    break;
                                case "line6" :
                                    divContentNameSecondMealToDay.lastElementChild.textContent = tableInformationPlanningArray[0];
                                    linkPlanningSecondMealDayActually.firstElementChild.textContent = "voir la recette";
                                    linkPlanningSecondMealDayActually.firstElementChild.href = `http://localhost/code/blog-with-nutrition/public/index.php/sport/programme/recette/${tableInformationPlanningArray[0]}-Breakfastk`;
                                    break;

                            }

                        }
                        /**
                         * Select the good line with the second information in the array information of the human
                         * @type {HTMLCollectionOf<Element>}
                         */
                        //let lineBoxSpanTextInformation = document.getElementsByClassName(tableInformationPlanningArray[1]);
                        /**
                         * Select the good box of the line selected before with the third information in the array information of the human
                         * @type {Element}
                         */
                        //let numberBoxOntheLineSelectedBefore = lineBoxSpanTextInformation[parseInt(tableInformationPlanningArray[2])];
                        /**
                         * Finally, add the first information of the array information of the human in the element span text content
                         * @type {*|string}
                         */
                        //numberBoxOntheLineSelectedBefore.firstElementChild.textContent = tableInformationPlanningArray[0];

                        /**
                         * Don't forget to add the good picture in the child img and remove the class hidden to display the picture
                         * @type {string}
                         */
                        //numberBoxOntheLineSelectedBefore.lastElementChild.src = `../../../image/${tableInformationPlanningArray[0]}.jpg`;
                        //numberBoxOntheLineSelectedBefore.lastElementChild.classList.remove("hidden");
                    }
                }

                let textInCircle;
                let pourcentageToColor;
                if(tablInformationPlanningObject[1] === 0) {
                    switch (nbreSeancePlannifie) {
                        case 0:
                            textInCircle = "0 / 4";
                            break;
                        case 1:
                            textInCircle = "1 / 4";
                            break;
                        case 2:
                            textInCircle = "2 / 4";
                            break;
                        case 3:
                            textInCircle = "3 / 4";
                            break;
                        default:
                            textInCircle = "4 / 4";
                            break;
                    }
                    pourcentageToColor = 25*nbreSeancePlannifie;
                } else if (tablInformationPlanningObject[1] === 1) {
                    switch (nbreSeancePlannifie) {
                        case 0:
                            textInCircle = "0 / 3";
                            break;
                        case 1:
                            textInCircle = "1 / 3";
                            break;
                        case 2:
                            textInCircle = "2 / 3";
                            break;
                        default:
                            textInCircle = "3 / 3";
                            break;
                    }
                    pourcentageToColor = 33.333333333333333 * nbreSeancePlannifie;
                }

                circle(pourcentageToColor, canvas, textInCircle);

            }
        }
        ;








    }

    let circlepop = document.getElementsByClassName("externeCircle")[0];
    let canvas = document.getElementsByClassName("round1")[0];


    //circle("tutoriel", "lightgrey", 15, 75, 75, 60, 0, 2* Math.PI);
    //circle("tutoriel2", "black", 1, 75, 75, 50, 0, 2* Math.PI);
    //circle("inCanvas", "black", 1, 75, 75, 50, 0, 2* Math.PI);


    /*
**	Fonction qui dessine le cercle
**	@param i:number - nombre de 0 à 100
**	@param target : elt HTML - l'élément canvas cible
*/
    function circle(i, target, textToDisplayNumberSeanceDone) {
        let data = i;
        //var data = document.querySelector('canvas.round1').dataset.percent;
        let color = "#00BCD4";
        let canvas = target;
        canvas.width = target.width;
        canvas.height = target.height * 2;

        data = parseInt(data)
        var perimetre = 2 * (2 * Math.PI - 1 / 2 * Math.PI) * data
        const context = canvas.getContext("2d");
        context.font = "30px Arial";
        context.fillText(textToDisplayNumberSeanceDone, canvas.width / 2 - canvas.width / 10, canvas.width / 2);
        //console.log(perimetre)
        context.beginPath();
        //c'est ici quel a partir est a changer, surement start angle
        context.arc(canvas.width / 2, canvas.width / 2, canvas.width / 2 - 10, -1 / 2 * Math.PI, 3 / 2 * Math.PI);
        context.lineWidth = "45";
        context.strokeStyle = '#fff'
        context.shadowOffsetX = 1;
        context.shadowBlur = 10;
        context.shadowColor = 'rgba(0,0,0,0.1)'

        context.stroke();
        context.beginPath();
        context.arc(canvas.width / 2, canvas.width / 2, canvas.width / 2 - 10, -1 / 2 * Math.PI, ((data / 100) * 2 * Math.PI - (1 / 2 * Math.PI)));
        context.lineWidth = "45";
        context.strokeStyle = "#5ae596";
        context.shadowOffsetX = 1;
        context.shadowBlur = 10;
        context.shadowColor = 'rgba(0,0,0,0.1)'
        //console.log(data)
        context.stroke();


    }


}