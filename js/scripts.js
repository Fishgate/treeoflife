$(document).ready(function(){
    //=========================================
    //     TYRONE WORKS ON FORM SUBMISSION 
    //=========================================
    $('#form').on('invalid', function(){
        var invalid_fields = $(this).find('[data-invalid]');
        console.log(invalid_fields);
        $(this).find('.alert-box').css('display', 'block');
    })
    .on('valid', function(){
        console.log('valid!');
        $(this).find('.alert-box').css('display', 'none');
    });
    
    //=========================================
    //     ADJUST CLEARING GALLERY THUMBS
    //=========================================
    $('.clearing-thumbs a').each(function(){
        $(this).click(function(){
           $(this).parent().parent().removeClass('small-block-grid-3'); 
        });
    });
    
    $('.clearing-close').bind('click', function(){
        $('#toggle-grid').addClass('small-block-grid-3');
    });
    
    //=========================================
    //     BENFICIARIES ACCORDIAN 
    //=========================================
    $('.accordion dd').each(function(){
        $(this).click(function(){
            $('.accordion dd').removeClass('active');
            $(this).toggleClass('active');
        });
    });
});



//    6 22 55 426 118