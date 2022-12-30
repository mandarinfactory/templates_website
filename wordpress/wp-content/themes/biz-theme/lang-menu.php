<script>
  $(function() {
    $('.lang button').click(function() {
      var n = $(this).val()
      $('.lang').removeClass('active1 active2 active3').addClass('active' + n)
    }) //click
  }) //ready
</script>
<nav class="lang active1" title="해당 ui는 디자인설계까지 구현되었습니다">
  <button value="1">ko</button>
  <button value="2">en</button>
  <button value="3">cn</button>
</nav>