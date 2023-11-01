
// Scroll animation
const header = document.querySelector('header');

window.addEventListener('scroll', function () {
    header.classList.toggle('sticky', window.scrollY > 0);
});


// Show & hide password and change the icon
const showHidePassword = document.querySelectorAll('.showHidePassword'),
    passwordFields = document.querySelectorAll('.password');

showHidePassword.forEach(eyeIcon => {
    eyeIcon.addEventListener('click', () => {
        passwordFields.forEach(passwordField => {
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                showHidePassword.forEach(iconEye => {
                    iconEye.classList.replace('bx-low-vision', 'bxs-bullseye');
                })
            } else {
                passwordField.type = 'password';
                showHidePassword.forEach(iconEye => {
                    iconEye.classList.replace('bxs-bullseye', 'bx-low-vision')
                })
            }
        })
    })
});

// Accordion
const accordions = document.querySelectorAll('.item-accordion');

accordions.forEach(accordion => {
    accordion.addEventListener('click', (e) => {
        const self = e.currentTarget;
        const btn = self.querySelector('.btn-accordion');
        const content = self.querySelector('.content-accordion');

        const icons = document.querySelectorAll('.icon');
        const icon = self.querySelector('.icon');

        self.classList.toggle('open');

        if (self.classList.contains('open')) {
            icon.classList.replace('bx-plus', 'bx-minus');
        } else {
            icon.classList.replace('bx-minus', 'bx-plus');
        }
    })
});

// Sidemenu
const menu = document.querySelector('#menu-icon'),
    navbar = document.querySelector('.nav');

menu.addEventListener('click', () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('opened-menu');
});
window.addEventListener('scroll', () => {
    menu.classList.remove('bx-x');
    navbar.classList.remove('opened-menu');
});
