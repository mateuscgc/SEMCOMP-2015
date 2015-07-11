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
$('#dropdown, .programming').hover(function(){
    $('.programming').stop().slideDown(300);
    $('nav:not(.fixed-nav)').css('background-color', 'rgba(0, 0, 0, .7)');
}, function(){
    $('.programming').stop().slideUp(300);
    $('nav:not(.fixed-nav)').css('background-color', 'transparent');
});

$(window).scroll(function(){
    if ($(this).scrollTop() > 20) {
        $('nav').addClass('fixed-nav');
    } else {
        $('nav').removeClass('fixed-nav')
        $('nav:not(.fixed-nav)').css('background-color', 'transparent');
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
