

const fHamburgerMenu = function() {
    let $hamburger = document.querySelector(".c-hamburger");
    let $hamburgerNav = document.querySelector(".c-hamburger__nav");
    let $hamburerNavItem = document.querySelector(".c-hamburger__nav a:last-child");

    $hamburgerNav.style.position = 'absolute';

    $hamburger.addEventListener("click", function() {
        if($hamburger.classList.contains("is-active")) {
            $hamburger.classList.remove("is-active");
            $hamburgerNav.style.left = "-100%";
        } else {
            $hamburger.classList.add("is-active");
            $hamburgerNav.style.left = "0";
        }
    });

    window.addEventListener("keydown", function(e) {
        if(e.keyCode === 9) {
            console.log('test');
            document.querySelector(".c-hamburger .c-nav__item:last-child").addEventListener('blur', function() {
                $hamburger.classList.remove("is-active");
                $hamburgerNav.style.left = "-100%";
            });
            $hamburger.addEventListener("focus", function() {
                $hamburger.classList.add("is-active");
                $hamburgerNav.style.left = "0";
            });
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
