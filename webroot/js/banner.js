$(document).ready(function() {
    $('#photo-banner').cycle({
        fx: 'fade',
        speed: 500,
        timeout: 8000,
        random: true,
        slides: '.banner-slide'
    });
});