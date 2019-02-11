$(document).ready(function () {

    $(window).scroll(function () {
        if (window.pageYOffset > $('.search').offset().top) {
            $('.back-to-top').fadeIn(400);
        } else {
            $('.back-to-top').fadeOut(400);
        }
    })

    $('.back-to-top').click(function (event) {
        event.preventDefault();
        $('body, html').animate({
            scrollTop: 0
        }, 800);

        return false;
    })

    $('.list-group-item').hover(
        function () {
            $(this).find('.badge').addClass('badge-success');
        },
        function () {
            $(this).find('.badge').removeClass('badge-success');
        },
    )
})