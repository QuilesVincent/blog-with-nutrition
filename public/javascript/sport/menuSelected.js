window.onload = function () {

    let numberPortionLess = document.getElementsByClassName("divChangePortionLess")[0];
    let numberPortionMore = document.getElementsByClassName("divChangePortionMore")[0];

    let numberPortion = document.getElementsByClassName("number")[0].firstElementChild;
    let textNumberPortion = numberPortion.textContent;

    let allIngredientsQuantity = document.getElementsByClassName("quantityIngredient");
    let allIngredientsQuantityLength = allIngredientsQuantity.length;

    numberPortionLess.addEventListener("click", (e) => {
        if(parseFloat(textNumberPortion) > 1) {
            for(let i = 0; i < allIngredientsQuantityLength; i++) {
                allIngredientsQuantity[i].textContent = parseFloat(allIngredientsQuantity[i].textContent) / parseFloat(textNumberPortion);
            }
            textNumberPortion = parseFloat(textNumberPortion) - 1;
            numberPortion.textContent = textNumberPortion;
            for(let i = 0; i < allIngredientsQuantityLength; i++) {
                allIngredientsQuantity[i].textContent = parseFloat(allIngredientsQuantity[i].textContent) * textNumberPortion;
            }
        }

    })

    numberPortionMore.addEventListener("click", (e) => {
        for(let i = 0; i < allIngredientsQuantityLength; i++) {
            allIngredientsQuantity[i].textContent = parseFloat(allIngredientsQuantity[i].textContent) / parseFloat(textNumberPortion);
        }
        textNumberPortion = parseFloat(textNumberPortion) + 1;
        numberPortion.textContent = textNumberPortion;

        for(let i = 0; i < allIngredientsQuantityLength; i++) {
            allIngredientsQuantity[i].textContent = parseFloat(allIngredientsQuantity[i].textContent) * textNumberPortion;
        }
    })


};
