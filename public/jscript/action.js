$(document).ready(function() {
    $('.click').bind('click', function() {
            $(this).next().slideToggle(2000);
    });
});