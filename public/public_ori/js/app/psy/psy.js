$('body').on('click','.header .btn-show-form', function (e){
    $(e.currentTarget).closest('form').addClass('active')
});

$('body').on('click','.header .btn-main--cancel', function (e){

    $(e.currentTarget).closest('form').removeClass('active')
});

$('body').on('click','.card-body .copy', function (e){

    navigator.clipboard.writeText($(e.currentTarget).closest('div').children('input').val());
    $(e.currentTarget).closest('div').addClass('card-copy')
    setTimeout(function(){ $(e.currentTarget).closest('div').removeClass('card-copy') }, 2000);
});


$(function () {
    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="copytoggle"]').tooltip()
})
