<?php include "sub-header.php" ?>
<script src="../template/js/store.js"></script>
<h2 class="sub_title"> 자유게시판</h2>
<section class="freeboard_section">
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
    $(".freeboard_section").prepend(`
        <table class="board">
            <thead>
                <tr>
                    <th scope="col">번호</th>
                    <th scope="col">제목</th>
                    <th scope="col">작성일자</th>
                    <th scope="col">작성자</th>
                    <th scope="col">조회수</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>    
    `) //prepend
    freeboardArrCopy = [...freeboardArr]
    freeboardArrCopy.reverse().forEach(function(v) {
        $('.freeboard_section .board tbody').prepend(`
        <tr>
        <td>${v.no}</td>
        <td><a href="#">${v.title}</a></td>
        <td>${v.date}</td>
        <td>${v.auth}</td>
        <td>${v.read_count}</td>
        </tr>
        `) //prepend 
    }) //forEach + .reverse()를 통해 내림차순으로 바꾼다! => forEach내에서 바꿀수는 없으니! && 직접적인 array-database를 바꾸면 안된다! => array의 copy를 만들어야한다.[...//hard-copy!]
</script>
<?php include "sub-footer.php" ?>