let chairs = document.getElementsByClassName("chair");
let ticketTypeRepeater = document.getElementById("ticketType-repeater");

for (let i = 0; i < chairs.length; i++) {
    chairs[i].addEventListener("click", function () {
        if (!chairs[i].classList.contains("occupied")) {
            //console.log(chairs);
            // console.log("Row = " + chairs[i].attributes.row.value)
            // console.log("Chair = " + chairs[i].attributes.chair.value)

            if (chairs[i].classList.contains("selected")) {
                chairs[i].classList.remove("selected");
                document.getElementById(`ticket-${chairs[i].attributes.coordinate.value}`).remove();
                updateTickets();
                updateAmountTickets();
            } else {
                chairs[i].classList.add("selected");

                //document.createElement("div");
                ticketTypeRepeater.innerHTML += '<div class="tt-item" id="ticket-' + chairs[i].attributes.coordinate.value + '">\n' +
                    '                        <h3>Rij ' + chairs[i].attributes.row.value + ' Stoel ' + chairs[i].attributes.chair.value + '</h3>\n' +
                    '                        <div class="selections">\n' +
                    '                            <select name="ticketType-' + chairs[i].attributes.coordinate.value + '" id="">\n' +
                    '                                <option value="9,00">Normaal - &euro;9,00</option>\n' +
                    '                                <option value="5,00">Kind -  &euro;5,00</option>\n' +
                    '                                <option value="7,00">65+ - &euro;7,00</option>\n' +
                    '                            </select>\n' +
                    '\n' +
                    '                            <p>&euro;9,00</p>\n' +
                    '                        </div>\n' +
                    '                    </div>';

                updateTickets();
                updateAmountTickets();

            }
        }
    })
}

let tickets = document.getElementsByClassName("tt-item");

function updateTickets() {
    tickets = document.getElementsByClassName("tt-item");

    for (let i = 0; i < tickets.length; i++) {
        let select = tickets[i].childNodes[3].childNodes[1];
        let priceText = tickets[i].childNodes[3].childNodes[3];

        select.addEventListener("change", function (event) {
            priceText.innerHTML = `&euro;${select.value}`;
        })
    }
}

function updateAmountTickets() {
    totalTickets = document.getElementById("totalTickets");
    totalTickets.innerHTML = `Totaal kaarten: ${document.getElementsByClassName("tt-item").length}`;
}