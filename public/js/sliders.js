$(document).ready(function () {
    $('.your-class').slick({
        infinite: true,     // Infinite looping
        slidesToShow: 3,    // Show 3 slides at once
        slidesToScroll: 1,  // Scroll 1 slide at a time
        // dots: true,         // Display navigation dots
        autoplay: true,     // Enable autoplay
        autoplaySpeed: 2000, // Speed for autoplay (2 seconds)

        responsive: [
            {
                breakpoint:1500, // When screen width is <= 1440px
                settings: {
                    slidesToShow: 3.5, // Show 2 slides
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 768, // When screen width is <= 768px
                settings: {
                    slidesToShow: 1, // Show 1 slide
                    slidesToScroll: 1,
                }
            },
        ]
    });

    // Add margin using CSS
    $('.your-class .offer-content-box').css({
        'margin-right': '20px'  // 20px space between slides
    });

    // To prevent extra margin on the last item
    $('.your-class .offer-content-box:last-child').css({
        'margin-right': '0' // Remove margin for the last item
    });
});


let next = document.querySelector('.next')
let prev = document.querySelector('.prev')

next.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').appendChild(items[0])
})

prev.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slide').prepend(items[items.length - 1]) // here the length of items = 6
})




