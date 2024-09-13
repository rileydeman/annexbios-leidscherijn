let chairs = document.getElementsByClassName("chair");

for (let i = 0; i < chairs.length; i++) {
    chairs[i].addEventListener("click",function () {
        if (!chairs[i].classList.contains("occupied")) {
            if (chairs[i].classList.contains("selected")) {
                chairs[i].classList.remove("selected");
            } else {
                chairs[i].classList.add("selected");
            }
        }
    })
}