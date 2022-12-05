<?php include "sub-header.php" ?>
<script src="../template/js/store.js"></script>
<script src="../template/js/faq.js"></script>
<h2 class="sub_title"> FAQ</h2>
<section class="faq_section">
</section>
<script>
    $('.faq_section').prepend(`<ul></ul>`)
    faqArr.forEach(function(v) {
        $('.faq_section ul').append(`
            <li>
                <button class="q">
                <i class="fa-solid fa-circle-question fa-xl ques"></i>
                ${v.ques}</button>            
                <p class="a">
                <i class="fa-solid fa-circle-check fa-xl"></i>
                ${v.ans}</p>            
            </li>
        `)
    }) //forEach
</script>
<?php include "sub-footer.php" ?>