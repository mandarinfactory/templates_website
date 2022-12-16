<?php include "sub-header.php" ?>
<h2 class="sub_title"> 공지사항</h2>
<section class="notice_section">
    <form class="search_form">  
        <select>
            <option label="제목"></option>
            <option label="내용"></option>
            <option label="작성자"></option>
        </select>
        <input type="text">
        <button class="form_btn btn_style1">
            검색
        </button>
    </form>
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