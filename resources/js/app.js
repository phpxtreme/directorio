$(document).ready(function () {
    $('.list-group-item').hover(
        function () {
            $(this).find('.badge').addClass('badge-light');
        },
        function () {
            $(this).find('.badge').removeClass('badge-light');
        },
    )
})