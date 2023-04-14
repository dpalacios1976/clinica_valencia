const sidebar = document.querySelector("aside");
const menuButton = document.querySelector("#menu-button");
const menuClose = document.querySelector("#close-button");
const togleColor = document.querySelector(".togle-color");

// Show menu
menuButton.addEventListener('click', () => {
    sidebar.style.display = 'block';
});

// Close menu
menuClose.addEventListener('click', () => {
    sidebar.style.display = 'none';
});

// Change color theme
togleColor.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-colors');

    togleColor.querySelector('i:nth-child(1)').classList.toggle('active');
    togleColor.querySelector('i:nth-child(2)').classList.toggle('active');
});
