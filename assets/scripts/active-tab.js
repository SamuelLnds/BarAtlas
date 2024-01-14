document.addEventListener("DOMContentLoaded", function() {
    updateActiveNavLink();

    window.addEventListener('hashchange', updateActiveNavLink);
    window.addEventListener('load', updateActiveNavLink);
});

function updateActiveNavLink() {
    const navLinks = document.querySelectorAll('nav ul li a');
    const currentUrl = window.location.pathname + window.location.hash;

    navLinks.forEach(link => {
        const linkUrl = new URL(link.href, window.location.origin).pathname + new URL(link.href, window.location.origin).hash;
        
        if (linkUrl === currentUrl || (currentUrl === '/' && linkUrl === window.location.origin + '/')) {
            link.classList.add('active-nav-tab');
        } else {
            link.classList.remove('active-nav-tab');
        }

    });
    
    
}

