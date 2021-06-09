const { add } = require('lodash');

require('./bootstrap');

window.Swal = require('sweetalert2');

let fase1 = document.getElementById("fase1");
let fase2= document.getElementById("fase2");
let groups1 = document.getElementById("groups1");
let groups2 = document.getElementById("groups2");


fase1.addEventListener("click", () => {
    groups2.classList.add('hidden');
    groups1.classList.remove('hidden');
})


fase2.addEventListener("click", function() {
    groups1.classList.add('hidden');
    groups2.classList.remove('hidden');
})