$(function () {
  var url = location.href
  var menuNum
  menuArr.forEach(function (v) {
    if (url.match(v.pageLabel)) {
      menuNum = v.pageID
    }
  })//forEach

  $('.visual' + menuNum).css({ 'display': 'flex' })
  var typeH5 = new Type_effect(`.sub-visual .visual${menuNum} h5`, 300)
  typeH5.play()
  var typeP = new Type_effect(`.sub-visual .visual${menuNum} p`, 50)
  typeP.play()

  setTimeout(function () {
    $('.visual' + menuNum).addClass('active')
  }, 1000)

  var options = {
    "animate": true,
    "patternWidth": 100,
    "patternHeight": 100,
    "grainOpacity": 0.03,
    "grainDensity": 2.09,
    "grainWidth": 7.85,
    "grainHeight": 5.07
  };
  grained('#noise', options)


})//ready
