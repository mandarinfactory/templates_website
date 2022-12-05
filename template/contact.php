<?php include "sub-header.php" ?>
<h2 class="sub_title"> 온라인문의</h2>
<section class="contact_section">
    <form>
        <p>
            <label for="id1">성명</label>
            <input id="id1" type="text">
        </p>
        <p>
            <label for="id2">전화번호</label>
            <input type="tel" title="연락처 첫번째 세자리">
            <input type="tel" title="연락처 두번째 세자리">
            <input type="tel" title="연락처 마지막 세자리">
        </p>
        <p>
            <label for="id3">이메일</label>
            <input id="id3" type="mail">
        </p>
        <p>
            <label for="id4">제목</label>
            <input id="id4" type="text">
        </p>
        <p>
            <label for="id5">설명</label>
            <textarea id="id5" rows="15"></textarea>
        </p>
        <p>
            <label for="id6">파일첨부</label>
            <input id="id6" type="file">
        </p>
        <p>
            <button type="submit" class="form_btn btn_style1">전송</button>
            <button type="reset" class="form_btn btn_style2">취소</button>
        </p>
    </form>
</section>
<?php include "sub-footer.php" ?>