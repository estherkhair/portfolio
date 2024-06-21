document.getElementById('dark-mode-toggle').addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
        document.querySelector('header').classList.toggle('dark-mode');
        document.querySelectorAll('nav ul li a').forEach(link => {
            link.classList.toggle('dark-mode');
        });
        document.querySelector('#contact-form button').classList.toggle('dark-mode');
    });
    