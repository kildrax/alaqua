document.addEventListener("DOMContentLoaded", function (event) {
    let triggerBtn = document.getElementById("triggerBtn");
    let contactForm = document.querySelector(".contact_form");
    triggerBtn.addEventListener("click", function () {
        contactForm.classList.toggle('active');
    });
});

// let horariosMini = document.getElementById("horariosPrecios");
// let horariosGlobal = document.querySelector(".global_horarios");
// horariosMini.addEventListener("click", function () {
//     horariosGlobal.classList.add("active");
// });

// horariosGlobal.addEventListener("click", function () {
//     horariosGlobal.classList.remove("active");
// });