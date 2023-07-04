import './bootstrap';

import '~resources/scss/app.scss';

import.meta.glob([
    '../img/**'
]);

import * as bootstrap from 'bootstrap';

const myModal = document.getElementById("myModal");
const myInput = document.getElementById("myInput");

myModal.addEventListener("shown.bs.modal", () => {
    myInput.focus();
});
