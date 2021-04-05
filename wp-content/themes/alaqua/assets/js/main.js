document.addEventListener("DOMContentLoaded", function (event) {
    let triggerBtn = document.getElementById("triggerBtn");
    let contactForm = document.querySelector(".contact_form");
    triggerBtn.addEventListener("click", function () {
        contactForm.classList.toggle('active');
    });
});