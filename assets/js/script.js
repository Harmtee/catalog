document.addEventListener('DOMContentLoaded', function() {
    var navLinks = document.querySelectorAll('ul li a');
    var currentUrl = window.location.href;

    navLinks.forEach(function(link) {
        if (link.href === currentUrl) {
            link.parentElement.classList.add('active');
        }
    });
});