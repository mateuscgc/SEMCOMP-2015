// Global Variables
var mainOffset;

// Menu
$(document).ready(function(){
    var i = 0;
    $('#toggle').click(function() {
        if (i == 0){
            $('nav>ul').addClass("show");
            i++;
        } else {
            $('nav>ul').removeClass("show");
            i = 0;
        }
    });
});

$(document).ready(function(){
    mainOffset = $('main').offset().top;
});

// Dropdown programação
$('.dropdown').hover(function(){
    $('.programming').stop().slideDown(300);
    $('nav').addClass('slide-down');
}, function(){
    $('.programming').stop().slideUp(300, function(){
        $('nav').removeClass('slide-down');
    });
});

$(window).scroll(function(){
    if ($(this).scrollTop() > 20) {
        $('nav').addClass('fixed-nav');
    } else {
        $('nav').removeClass('fixed-nav');
    }
});

// Tooltip Activator
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

// Talk Description Expand
$('.talk-title').click(function() {
    var container = $(this).parent().parent();
    container.children('.talk-description').slideToggle('slow', function() {
        var icon = container.children('.talk-expand-icon');
        if (icon.hasClass('icon-flip-vertical')) {
            icon.removeClass('icon-flip-vertical');
        } else {
            icon.addClass('icon-flip-vertical');
        }
    });
});

// Days trigger
$('.day-trigger').click(function() {
    if(!$(this).hasClass('day-active')) {
        $('.day-active').removeClass('day-active');

        var day = $(this).attr('day');
        $('div[day="'+day+'"]').addClass('day-active');
    }
});
