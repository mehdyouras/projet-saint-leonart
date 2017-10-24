

const fHamburgerMenu = function() {
    let $hamburger = document.querySelector(".c-hamburger");
    let $hamburgerNav = document.querySelector(".c-hamburger__nav");
    let $hamburerNavItem = document.querySelector(".c-hamburger__nav a:last-child");

    $hamburgerNav.style.position = 'absolute';

    $hamburger.addEventListener("focus", function() {
        $hamburger.classList.toggle("is-active");
        if($hamburger.classList.contains("is-active")) {
            $hamburgerNav.style.left = "0";
        } else {
            $hamburgerNav.style.left = "-100%";
        }
    });

    $hamburger.addEventListener("blur", function() {
        $hamburerNavItem.addEventListener("blur", function() {
            $hamburger.classList.remove("is-active");
            $hamburgerNav.style.left = "-100%";
        });
    });
};

const fPageIsLoaded = function() {
    fHamburgerMenu();
};

window.addEventListener("load", fPageIsLoaded);
