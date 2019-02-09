$(document).ready(function () {
    $('.list-group-item').hover(
        function () {
            $(this).find('.badge').addClass('badge-danger');
        },
        function () {
            $(this).find('.badge').removeClass('badge-danger');
        },
    )
})