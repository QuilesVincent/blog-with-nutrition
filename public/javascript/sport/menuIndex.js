window.onload = () => {

    let ongletBreakfast = document.getElementsByClassName("Breakfast");
    let ongletLowCarb = document.getElementsByClassName("LowCarb");
    let ongletHightCarb = document.getElementsByClassName("HightCarb");
    let ongletSnack = document.getElementsByClassName("Snack");
    let arrayAllOnglet = [ongletBreakfast, ongletLowCarb, ongletHightCarb, ongletSnack];
    //let ongletCheatMeal = document.getElementsByClassName("CheatMeal");

    let filtreBreakfast = document.getElementsByClassName("contentFiltreBreakfast")[0];
    let textBreakfast = filtreBreakfast.lastElementChild.textContent;
    let filtreLowCarb = document.getElementsByClassName("contentFiltreLowCarb")[0];
    let textLowCarb = filtreLowCarb.lastElementChild.textContent;
    let filtreHightCarb = document.getElementsByClassName("contentFiltreHightCarb")[0];
    let textHightCarb = filtreHightCarb.lastElementChild.textContent;
    let filtreSnack = document.getElementsByClassName("contentFiltreSnack")[0];
    let textSnack = filtreSnack.lastElementChild.textContent;
    let filtreCheatMeal = document.getElementsByClassName("contentFiltreCheatMeal")[0];
    let textCheatMeal = filtreCheatMeal.lastElementChild.textContent;

    filtreBreakfast.addEventListener("click", (e) => {
        hiddenNotGoodMenu(arrayAllOnglet, textBreakfast);
    })

    filtreLowCarb.addEventListener("click", (e) => {
        hiddenNotGoodMenu(arrayAllOnglet, textLowCarb);
    })

    filtreHightCarb.addEventListener("click", (e) => {
        hiddenNotGoodMenu(arrayAllOnglet, textHightCarb);
    })

    filtreSnack.addEventListener("click", (e) => {
        hiddenNotGoodMenu(arrayAllOnglet, textSnack);
    })




    function hiddenNotGoodMenu(arrayAllMenu, MenuToDisplay){
        let arrayAllMenuLength = arrayAllMenu.length;

        for(let i = 0; i < arrayAllMenuLength; i++ ) {
            let oneMenuArray = arrayAllMenu[i];
            let oneMenuArrayLength = oneMenuArray.length;
            for (let j = 0; j < oneMenuArrayLength; j++){
                if (oneMenuArray[j].classList.contains(MenuToDisplay)){
                    oneMenuArray[j].classList.remove("hidden");
                } else {
                    oneMenuArray[j].classList.add("hidden");
                }
            }
        }
    }


}