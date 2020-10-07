window.onload = function () {


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

    /**
     * All the div contener circuit
     * @type {HTMLCollectionOf<Element>}
     */
    let clickCircuit = document.getElementsByClassName("circuitClick");


    /**
     * If click on one circuit, do fonction Reporter on this circuit
     */
    for (let i = 0; i < clickCircuit.length; i++) {
        clickCircuit[i].addEventListener("click", (e) => {
            new Reporter(clickCircuit[i]);
        })
    }

    /**
     * First, select the text content in a span in a div clicked
     * then, select the window opener (window origin)
     * and select in the latter the box at the origin selected
     * finnaly, insert the text of the span in the box, delete the classname "caseSelected" on the latter and close the window pop up
     *
     * @param selected
     * @constructor
     */
    function Reporter(selected) {
        let circuitSelected = selected.firstElementChild.lastElementChild;
        let text = circuitSelected.textContent;
        let texto = text.split("");
        let textoLength = text.length;
        for (let i = 0; i < textoLength; i++) {
            texto[0].toLowerCase();
            if (texto[i] === " ") {
                texto[i + 1].toUpperCase();
                texto[i] = "";
            }
        }
        texto = texto.join("");
        let windowOrigin = window.opener;
        let caseSelected = windowOrigin.document.getElementsByClassName("caseSelected");
        caseSelected[0].firstElementChild.lastElementChild.textContent = texto;
        if (caseSelected[0].classList.contains("line1")) {
            if(selected.firstElementChild.lastElementChild.textContent === "Repos") {
                caseSelected[0].lastElementChild.lastElementChild.style.display = "none";
                caseSelected[0].style.backgroundColor = "#e5eafe";
                caseSelected[0].firstElementChild.lastElementChild.style.color = "#8399f1" ;
            } else {
                caseSelected[0].lastElementChild.lastElementChild.textContent = "voir l'entraînement";
                caseSelected[0].style.backgroundColor = "#feeee5";
                caseSelected[0].firstElementChild.lastElementChild.style.color = "#f1b18d" ;
            }

        } else {
            caseSelected[0].lastElementChild.lastElementChild.textContent = "voir la recette";
            if (caseSelected[0].classList.contains("line2") || caseSelected[0].classList.contains("line4") || caseSelected[0].classList.contains("line6")) {
                caseSelected[0].style.backgroundColor = "#e6fbf0";
                caseSelected[0].firstElementChild.lastElementChild.style.color = "#63d796";
            } else {
                caseSelected[0].style.backgroundColor = "#fcfaee";
                caseSelected[0].firstElementChild.lastElementChild.style.color = "#ede0a1";
            }
        }
        caseSelected[0].lastElementChild.lastElementChild.classList.add("textToSee2");
        caseSelected[0].lastElementChild.lastElementChild.classList.remove("indication2");


        let arrayInformation = [];
        /**
         * The text content information
         * @type {string}
         */
        let information = caseSelected[0].firstElementChild.lastElementChild.textContent;
        /**
         * We will use after to check all the class and keep the class week"number" and line"number"
         * @type {string[]}
         */
        let arrayClassCase = caseSelected[0].className.split(" ");
        let classWeekNumber;
        let classLineNumber;
        let classDayNumber;
        let boxNumberInHisLine;
        /**
         * to have the good week
         * @type {RegExp}
         */
        let regexWeek = /week\d+/;
        /**
         * to have the good line
         * @type {RegExp}
         */
        let regexLine = /line\d+/;

        let regexDay = /day\d+/;
        for (let i = 0; i < arrayClassCase.length; i++) {
            if (arrayClassCase[i].match(regexWeek)) {
                classWeekNumber = arrayClassCase[i];
            }
            if (arrayClassCase[i].match(regexLine)) {
                classLineNumber = arrayClassCase[i];
            }
            if (arrayClassCase[i].match(regexDay)) {
                classDayNumber = arrayClassCase[i];
            }
        }
        /**
         * To have the good number of the box in his line
         * @type {HTMLCollectionOf<Element>}
         * Surement possibilité de l'enlever, a voir
         */
        let goodLineTable = windowOrigin.document.getElementsByClassName(classLineNumber);
        for (let j = 0; j < goodLineTable.length; j++) {
            if (goodLineTable[j].classList.contains("caseSelected")) {
                boxNumberInHisLine = j;
            }
        }

        let elementDateTextContent = windowOrigin.document.getElementsByClassName(classDayNumber);
        let dateTextContent = elementDateTextContent[0].textContent;

        let classTablText = circuitSelected.className.split(" ");
        let textTypeSeance = classTablText[0];

        let textTimeSeance = classTablText[1];

        let textIntensity = classTablText[2];
        /**
         * We create an array to save the data
         * @type {(string|number)[]}
         */
        let tablData = [information, classLineNumber, boxNumberInHisLine, classWeekNumber, classDayNumber, dateTextContent, textTypeSeance, textTimeSeance, textIntensity];

        /**
         * We push in the array contener all the informations
         */
        arrayInformation.push(tablData);

        /**
         * The string that will contains all the params to post ajax
         * @type {string}
         */
        var strParamAjax = "";
        for (let i = 0; i < arrayInformation.length; i++) {
            console.log(arrayInformation[i]);
            if (i === 0) {
                strParamAjax += "&";
            }
            strParamAjax += `data${i}=${arrayInformation[i]}`;
            if (i < arrayInformation.length - 1) {
                strParamAjax += "&";
            }
        }
        console.log(strParamAjax);
        console.log(arrayInformation);
        console.log(JSON.stringify(arrayInformation));


        postHttpRequestProgramme("http://localhost/code/blog-with-nutrition/public/index.php/sport/programme/save-planning-js", strParamAjax);

        //caseSelected[0].classList.remove("caseSelected");

        //window.close();


    }
}

/**
 * Add a condition, if the window is closed by click on the cross of this window
 * if it's done, selec element that contains the class "caseSelected" on the windowOpener as the function Reporter and remove this class
 */