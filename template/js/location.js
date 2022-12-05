$(function () {
    $('.map button').click(function () {
        $('.map button').removeClass('active');
        $(this).addClass('active');
        $('.map iframe, .map img').hide();
        var n = $(this).val();
        $(`.pane${n}`).show();
    })//click-event
})//document.ready