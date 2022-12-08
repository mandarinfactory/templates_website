$(function () {

        $(window).load(function(){
            var $container = $('.isotope_gallery_section ul');
            var filterSelect ="*"
            fn_isotope()
            function fn_isotope(){
                $container.isotope({
                    filter: filterSelect,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    }//animationOptions
                })//isotope
            }//fn
            $('.isotope_gallery_section .btn_grp button').click(function(){
                filterSelect = $(this).val()
                fn_isotope()
                $('.isotope_gallery_section .btn_grp button').removeClass('active')
                $(this).addClass('active')
            })//click	
            $(window).resize(function(){
                fn_isotope()
            })//resize
        })//load
    /* isotope_plugin -------------------------------------- */
})//document.ready