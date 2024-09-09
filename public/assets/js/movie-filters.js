let movieFilterSelect = document.getElementById("movieFilterSelect");
let movieFilterSelectArrow = document.getElementById("movieFilterSelectArrow");
let movieCatOptions = document.getElementById("movieCatOptions");
let movieCatSelectOpen = false;

movieFilterSelect.addEventListener("click", function () {

    if (movieCatSelectOpen) {
        movieCatOptions.style.maxHeight = null;
        movieFilterSelectArrow.style.transform = "rotate(0deg)"
        movieCatSelectOpen = !movieCatSelectOpen;
    } else {
        movieCatOptions.style.maxHeight = movieCatOptions.scrollHeight + "px";
        movieFilterSelectArrow.style.transform = "rotate(180deg)"
        movieCatSelectOpen = !movieCatSelectOpen;
    }
});