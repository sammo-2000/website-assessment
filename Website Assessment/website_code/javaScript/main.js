document.querySelector('.burger').addEventListener('click', () => document.querySelector('header').classList.toggle('active'));



/* https://alvarotrigo.com/blog/css-animations-scroll/
This is not my code, this code was taken from internet
The refernce to this code is linked above */
function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
            reveals[i].classList.add("active");
        } else {
            reveals[i].classList.remove("active");
        }
    }
}

window.addEventListener("scroll", reveal);