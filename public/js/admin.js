// Dark | Light button & Close | Open Navbar
// Local Storage
const body = document.querySelector('body'),
    modeToggle = body.querySelector('.mode-toggle'),
    sidebarToggle = body.querySelector('.sidebar-toggle'),
    sidebar = document.querySelector('nav');

let getMode = localStorage.getItem('mode');
if (getMode === 'dark') {
    body.classList.toggle('dark')
}
modeToggle.addEventListener('click', () => {
    body.classList.toggle('dark');
    if (body.classList.contains('dark')) {
        localStorage.setItem('mode', 'dark');
    } else {
        localStorage.setItem('mode', 'light');
    }
});

let getStatus = localStorage.getItem('status');
if (getStatus === 'close') {
    sidebar.classList.toggle('close');
}
sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('close');
    if (sidebar.classList.contains('close')) {
        localStorage.setItem('status', 'close');
    } else {
        localStorage.setItem('status', 'open');
    }
});

