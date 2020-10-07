/**
 *
 * @type {Date}
 * Date for today
 */
let date = new Date();


/**
 * @type {Date}
 * first day of the first week of the planning
 */
let dateFirstDayOFTheYear = new Date(2019, 11, 30);


/**
 *
 * @type {Date}
 * last day of the first week of the planning
 */
let dateTest = new Date(2020, 0, 5);
//console.log(dateTest);
//console.log(dateTest.valueOf());

/**
 *
 * @type {number}
 * the timestamp of one week
 */
let diffTimeOneWeek = dateTest.valueOf() - dateFirstDayOFTheYear.valueOf();

/**
 *
 * @type {Date}
 */
let dateOneDayMore = new Date(dateTest.valueOf() + diffTimeOneWeek / 6);

let dateTable = document.getElementsByClassName("date");
date[1].textContent = date.getMonth();

for (let i = 0; i < 52; i++) {
    //the time of the last day of the first week planning
    let timeStampStart = dateTest.valueOf();
    //The time of the first day after the last day of the previous week
    let timeDayAfterOne;
    //To have the good day for each new week dependant of i
    //The first is juste one day more, because the calcul in parenthesis equal to 0 for the first iteration
    timeDayAfterOne = timeStampStart + (diffTimeOneWeek / 6 * i * 7) + diffTimeOneWeek / 6;

    /**
     *
     * @type {Date}
     * new Date with on day more in timestamp
     */
    let dateBeginningWeek = new Date(timeDayAfterOne);

    console.log(dateBeginningWeek);

    let thDateWeekFirstDay = document.createElement("th");
    thDateWeekFirstDay.textContent = `${dateBeginningWeek.getDay()}/${dateBeginningWeek.getMonth()}`;
    table.appendChild(thDateWeekFirstDay);


    for (let j = 0; j < 5; j++) {
        let time1DayAfter = dateBeginningWeek.valueOf() + diffTimeOneWeek / 6 * j + diffTimeOneWeek / 6;
        /**
         *
         * @type {Date}
         * new Date to have one day more for each iteration
         */
        let dateOneDayMore = new Date(time1DayAfter);

        let thDateWeek = document.createElement("th");
        thDateWeek.textContent = `${dateOneDayMore.getDay()}/${dateOneDayMore.getMonth()}`;
        table.appendChild(thDateWeek);

        console.log(dateOneDayMore);
    }

    /**
     *
     * @type {Date}
     * new Date to have the last day of the week which has dateBeginningWeek as first day
     */
    let dateFinishWeek = new Date(timeDayAfterOne + diffTimeOneWeek);

    console.log(dateFinishWeek);

    let thDateWeekLastDay = document.createElement("th");
    thDateWeekLastDay.textContent = `${dateFinishWeek.getDay()}/${dateFinishWeek.getMonth()}`;
    table[0].appendChild(thDateWeekLastDay);


}


let decrementWeek = 0;

function createMoreLineInPast() {
    for (let i = 0; i < 7; i++) {
        if (i < 1) {
            let newLineHead = document.createElement("th");
            newLineHead.classList.add(`week${decrementWeek}`);
            let dateCutLastElement = lineTable[i].firstElementChild.nextElementSibling.textContent.split("/");
            console.log(dateCutLastElement);
            lineTable[i].insertBefore(newLineHead, lineTable[i].firstElementChild.nextElementSibling);
            let dayDateCutLastElement = parseInt(dateCutLastElement[0]);
            let monthDateCutLastElement = parseInt(dateCutLastElement[1]);
            dayDateCutLastElement = dayDateCutLastElement - 1
            let dayTextContent;
            let monthPreTextContent;
            let monthTextContent;
            if (dayDateCutLastElement < 1) {
                monthPreTextContent = monthDateCutLastElement - 1;
                dayDateCutLastElement = 30;
                console.log(dayDateCutLastElement);
            } else {
                monthPreTextContent = monthDateCutLastElement;
            }
            if (monthPreTextContent > 9 && monthPreTextContent < 13) {
                monthTextContent = monthPreTextContent;
            } else if (monthPreTextContent > 12) {
                monthTextContent = "01";
            } else {
                monthTextContent = `0${monthPreTextContent}`;
            }
            if (dayDateCutLastElement + 1 < 10) {
                newLineHead.textContent = `0${dayDateCutLastElement}/${monthTextContent}`;
            } else {
                newLineHead.textContent = `${dayDateCutLastElement}/${monthTextContent}`;
            }

        } else {
            let newLineBody = document.createElement("td");
            newLineBody.classList.add(`week${decrementWeek}`);
            lineTable[i].appendChild(newLineBody);
        }
    }

    let lineToDisplay = document.getElementsByClassName(`week${decrementWeek + 1}`);
    for (let i = 0; i < lineToDisplay.length; i++) {
        lineToDisplay[i].style.display = "none";
    }
}

let allDate = document.getElementsByClassName("date");
let changeWeek = document.getElementsByClassName("nextWeek");
let previousWeek = document.getElementsByClassName("previousWeek");
let tablePlanning = document.getElementsByClassName("tableauPlanning");
let lineTable = document.getElementsByClassName("lineTable");
let arrayContenerPlanning = [...tablePlanning];
