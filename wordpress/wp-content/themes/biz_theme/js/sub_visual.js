$(function () {
    var thisUrl = location.href
    var menuNumber
    window.menuCateArr.forEach(function (v) {
        if (thisUrl.match(v.pageLabel)) {
            menuNumber = v.pageID;
        }//if
    })//forEach
    $('.sub_visual_img' + menuNumber).css({ 'display': 'flex' });
    var mainTitleType = new Type_effect(`.sub_visual .sub_visual_img${menuNumber} figcaption h5`, 150)
    mainTitleType.play();
    var subTitleType = new Type_effect(`.sub_visual .sub_visual_img${menuNumber} figcaption p`, 50)
    subTitleType.play();
    setTimeout(function () {
        $('.sub_visual_img' + menuNumber).addClass('active');
    }, 1000)//setTimeout

    var options = {
        "animate": true,
        "patternWidth": 100,
        "patternHeight": 100,
        "grainOpacity": 0.15,
        "grainDensity": 1,
        "grainWidth": 1,
        "grainHeight": 1
    };
    grained('#noise', options)//noise_animation
})//document.ready