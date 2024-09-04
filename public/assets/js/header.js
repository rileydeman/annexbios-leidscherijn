let headerSelect = document.getElementById("headerSelectPlaceholder");
let headerSelectArrow = document.getElementById("headerSelectArrow");
let headerSelectOptions = document.getElementById("headerSelectOptions");

let headerSelectOptionsOpen = false;

headerSelect.addEventListener("click", function (event) {
    if (headerSelectOptionsOpen) {
        headerSelectOptions.style.maxHeight = null;
        headerSelectArrow.style.transform = "rotate(0deg)"

        headerSelectOptionsOpen = !headerSelectOptionsOpen;
    } else {
        headerSelectOptions.style.maxHeight = headerSelectOptions.scrollHeight + "px";
        headerSelectArrow.style.transform = "rotate(180deg)"

        headerSelectOptionsOpen = !headerSelectOptionsOpen;
    }
})

let headerSelectOption = document.getElementsByClassName("headerSelectOption");
let headerSelectInput = document.getElementById("headerSelectInput");
let headerSelectText = document.getElementById("headerSelectText");

for (let i = 0; i < headerSelectOption.length; i++) {
    headerSelectOption[i].addEventListener("click", function (event) {
        //console.log(headerSelectOption[i].childNodes[1].innerHTML);

        headerSelectInput.value = headerSelectOption[i].childNodes[1].innerHTML;
        headerSelectText.innerHTML = headerSelectInput.value;
    })
}

let headerSelectFilmForm = document.getElementById("headerSelectFilmForm");
let headerFormSubmitBtn = document.getElementById("headerFormSubmitBtn");

headerFormSubmitBtn.addEventListener("click", function (event) {
    headerSelectFilmForm.submit();
})