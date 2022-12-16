<script>
    $(function() {
        $('.lang button').click(function() {
            var n = $(this).val()
            $('.lang').removeClass('active1 active2 active3').addClass('active' + n)
        })
    })
</script>
<nav class="lang active1 title=" 해당 UI는 디자인설계까지만 구현되어있습니다.">
    <button value="1">KR</button>
    <button value="2">EN</button>
    <button value="3">JP</button>
</nav>