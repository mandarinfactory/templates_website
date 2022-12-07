$(function () {
  var addr = location.href
  var category
  var menu

  if (addr.match('greet')) {
    category = 1; menu = 1
  } else if (addr.match('location')) {
    category = 1; menu = 2
  } else if (addr.match('exhib_permanent')) {
    category = 2; menu = 1
  } else if (addr.match('exhib_special')) {
    category = 2; menu = 2
  } else if (addr.match('gallery_viewbox')) {
    category = 3; menu = 1
  } else if (addr.match('gallery_masonry1')) {
    category = 3; menu = 2
  } else if (addr.match('gallery_isotope')) {
    category = 3; menu = 3
  } else if (addr.match('gallery_masonry2')) {
    category = 3; menu = 4
  } else if (addr.match('library')) {
    category = 4; menu = 1
  } else if (addr.match('info')) {
    category = 5; menu = 1
  } else if (addr.match('architect')) {
    category = 5; menu = 2
  } else if (addr.match('notice')) {
    category = 5; menu = 3
  }

  $('.snb .category' + category).show()
  $(`.snb .menu${category}-${menu}`).addClass('active')

  var categoryLabel = $(`.snb .category${category} em`).text()
  $('.breadcrumb .category-label').text(categoryLabel)
  var menuLabel = $(`.snb .menu${category}-${menu}`).text()
  $('.breadcrumb .menu-label').text(menuLabel)

  $('.sub-visual .visual' + category).fadeIn().addClass('active')
  setTimeout(function(){
    //$('.sub-visual .visual' + category).addClass('active')
  },1)

})//ready 