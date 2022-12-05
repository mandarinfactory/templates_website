$(function() {
    $('.faq_section button').click(function () {
        $('.faq_section p').stop().slideUp();
        $(this).siblings('p').stop().slideToggle();
        $('.faq_section button').not($(this)).removeClass('active');
        $(this).toggleClass('active');
    })//click
})//document.ready