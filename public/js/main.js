
const navbar = document.querySelector('.header-view');

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { // Adjust this value based on when you want the color to change
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});


document.querySelector('.toggle-btn').addEventListener('click', function() {
    // Get all elements with class 'right-part'
    const rightPartElements = document.getElementsByClassName('right-part');

    // Loop through the collection and toggle the 'active' class
    for (let i = 0; i < rightPartElements.length; i++) {
        rightPartElements[i].classList.toggle('active');
    }
});
document.getElementById('closeNav').addEventListener('click', function() {
    document.getElementById('mobileNav').style.width = '0';
});


