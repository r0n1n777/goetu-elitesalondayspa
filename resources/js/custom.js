$(function(){
    $(window).on('scroll', function() {
        if ($(this).scrollTop() < 400) {
            $('.back-to-top').addClass('d-none');
        } else {
            $('.back-to-top').removeClass('d-none');
        }
    });

    $('.back-to-top').on('click', function(e) {
        e.preventDefault();
        window.scrollTo(0, 0);
    });

    $('.rate-star').hover(function(){
        let score = $(this).attr('id');
        for (let star = 1; star <= score; star++) {
            $('#'+star).attr('src', '../images/rate/star-hover.webp');
        }
    },
    function(){
        $('.rate-star').attr('src', '../images/rate/star.webp');
    });
});