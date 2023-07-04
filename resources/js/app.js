import "./bootstrap";

import "~resources/scss/app.scss";

import.meta.glob(["../img/**"]);

import * as bootstrap from "bootstrap";

const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", () => {
    myInput.focus();
});

// Seleziono tutti i bottoni di Elimina
let btnDelete = document.querySelectorAll(".hard_delete");

// Ciclo su tutti i btn selezionati per metterli in ascolto del click
btnDelete.forEach(function (btn) {
    btn.addEventListener("click", function () {
        if (confirm("Sei sicuro di voler eliminare definitivamente la card?")) {
            console.log("hai cliccato elimina");
        } else {
            console.log("eliminazione annullata");
            event.preventDefault();
        }
    });
});
