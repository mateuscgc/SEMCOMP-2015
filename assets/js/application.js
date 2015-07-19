// Global Variables
var mainOffset;
var contact = false;
// Menu
$('#toggle').click(function() {
    if ($('nav').hasClass('menu-down')) {
        $('nav').removeClass('menu-down');
    } else {
        $('nav').addClass('menu-down');
    }
    $('.link-list').stop().slideToggle(300);
});
$(document).ready(function(){
    mainOffset = $('main').offset().top;
    if ($('#map_canvas').length != 0) {
       $('nav').addClass('fixed-nav');
       contact = true;
    }
});

// Dropdown programação
$('.dropdown, .programming').hover(function(){
    $('.programming').stop().slideDown(300);
    $('nav').addClass('slide-down');
}, function(){
    $('.programming').stop().slideUp(300, function(){
        $('nav').removeClass('slide-down');
    });
});

// Fixed Menu
$(window).scroll(function(){
    if ($(this).scrollTop() > 20 || contact) {
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
        if (icon.hasClass('fa-flip-vertical')) {
            icon.removeClass('fa-flip-vertical');
        } else {
            icon.addClass('fa-flip-vertical');
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
