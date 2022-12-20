$(function () {
    var thisUrl = location.href
    var menuNumber
    window.menuCateArr.forEach(function (v) {
        if (thisUrl.match(v.pageLabel)) {
            menuNumber = v.pageID
        }//if
    })//forEach
    $('visual' + menuNumber).css({ 'display': 'flex' })
})//document.ready