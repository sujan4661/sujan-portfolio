let nav = document.querySelector(".navbar");

window.addEventListener("scroll", () => {
    nav.classList.toggle("active-nav", window.scrollY > 100);
});
// mobile menu
let toggleIcon = document.querySelector(".toggle-icon");

let navLinks = document.querySelector(".nav-links");

let toggleCross = document.querySelector(".toggle-cross");

toggleIcon.addEventListener("click", () => {
    let showMobileMenu = navLinks.classList.add("mobile-menu");

    let removeToggleIcon = (toggleIcon.style.display = "none");

    if (removeToggleIcon) {
        toggleCross.style.display = "block";
    }

    toggleCross.addEventListener("click", () => {
        let removeToggleCross = (toggleCross.style.display = "none");
        if (removeToggleCross) {
            toggleIcon.style.display = "block";
            navLinks.classList.remove("mobile-menu");
        }
    });
});
