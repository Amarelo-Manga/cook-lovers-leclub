//jQuery for page scrolling feature - requires jQuery Easing plugin
var $b = jQuery.noConflict();
$b(function() {
    $b(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $b(this);
        $b('html, body').stop().animate({
            scrollTop: $b($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
