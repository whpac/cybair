let last_known_scroll_position = 0;
let ticking = false;

function adjustNavbarElevation(scroll_pos) {
    if(scroll_pos > 30) {
        document.getElementById('main-navbar').classList.add('elevated');
    } else {
        document.getElementById('main-navbar').classList.remove('elevated');
    }
}

window.addEventListener('scroll', function (e) {
    last_known_scroll_position = window.scrollY;

    if(!ticking) {
        window.requestAnimationFrame(function () {
            adjustNavbarElevation(last_known_scroll_position);
            ticking = false;
        });

        ticking = true;
    }
});