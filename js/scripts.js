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
});