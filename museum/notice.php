<?php include "sub-header.php" ?>
<h2 class="sub_title"> 공지사항</h2>
<section class="notice_section">
</section>
<script>
    $('.notice_section').prepend(`
    <table class="board">
        <thead>
            <tr>
                <th scope="col">번호</th>
                <th scope="col">제목</th>
                <th scope="col">작성일자</th>
                <th scope="col">작성자</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>`) //prepend
    noticeArrCopy = [...noticeArr]
    noticeArrCopy.reverse().forEach(function(v) {
        $('.notice_section .board tbody').prepend(`
        <tr>
            <td>${v.number}</td>
            <td>${v.title}</td>
            <td>${v.date}</td>
            <td>${v.writer}</td>
        </tr>
        `) //prepend
    }) //forEach
</script>
<?php include "sub-footer.php" ?>