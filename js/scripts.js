$(document).ready(function(){
    //=========================================
    //     TYRONE WORKS ON FORM SUBMISSION 
    //=========================================
    $('#myForm').on('invalid', function(){
        var invalid_fields = $(this).find('[data-invalid]');
        console.log(invalid_fields);
        $(this).find('.alert-box').css('display', 'block');
    })
    .on('valid', function(){
        console.log('valid!');
        $(this).find('.alert-box').css('display', 'none');
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