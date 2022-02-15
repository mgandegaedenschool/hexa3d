$('body').on('click','.question button.btn-choice-color', function (e) {
    let el = e.currentTarget;
    let oldEl = $('.question button.btn-choice-color.active');

    if (oldEl) {
        oldEl.removeClass('active');
    }
    if (el != oldEl[0]) {
        $(el).addClass('active');
        $('.question input[name="color"]').val(el.dataset.id);
    } else {
        $('.question input[name="color"]').val(null);
    }
});

$('body').on('click','.question button.btn-choice-number', function (e){
    let el = e.currentTarget;
    let oldEl = $('.question button.btn-choice-number.active');

    if (oldEl) {
        oldEl.removeClass('active');
    }
    if (el != oldEl[0]) {
        $(el).addClass('active');
        $('.question input[name="number"]').val(el.dataset.id);
    } else {
        $('.question input[name="number"]').val(null);
    }
});

$('body').on('click','.question button.btn-fullscreen', function (e){
    let elem = $($(this).data('fullscreen'))[0] || document.body;

    toggleFullScreen(e, elem);
});

$('body').on('click','.question button.btn-prev, .question button.btn-next, .question button.btn-end', function (e){
    let target = $(e.currentTarget);

    if (target.data('action')) {
        $('.question input[name="action"]').val(target.data('action'));
    }
});

$('body').on("submit", ".form-question", function(event) {
    AjaxForm(event);
});