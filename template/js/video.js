$(function () {
    $('.video_section button').click(function () {
        var id = $(this).val()
        $('.video_section iframe').attr('src',`https://www.youtube.com/embed/${id}`)
    })
})//document.ready