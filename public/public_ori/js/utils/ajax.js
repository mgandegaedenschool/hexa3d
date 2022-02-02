function resetError(tableInput) {
    tableInput.forEach(element => {
        $('#' + element).removeClass('input-invalid');
    });

    $('.form-message-error').html('');
}

function redirect(path) {
    window.history.pushState('', '', path);
    document.location.reload();
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function AjaxQuestion(params = { event: null, link: null, data: [] }) {
    let url = null;

    if (params.event != null) {
        // href of element recovers
        url = $(params.event.currentTarget).attr('href');

        // Prevented from having redirection
        params.event.preventDefault();
    } else if (params.link != null) {
        // Defined url
        url = params.link;
    }

    // Action Ajax
        // done : active if there is no error and has received new data
        // fail : active if there is an error
    $.ajax({
        method: "get",
        url: url,
        data: params.data
    })
        .done((data) => {
            if (data.question) {
                if (data.question.push_url) {
                    if (window.location.href.charAt(window.location.href.length - 1) != '/') {
                        if (url != window.location.href.slice(0, -1)) {
                            window.history.pushState('', '', url);
                        }
                    } else if (url != window.location.href) {
                        window.history.pushState('', '', url);
                    }
                }
            }

            if (data.redirect) {
                let route;

                if (data.redirect.route == "refresh") {
                    route = window.location.href;
                } else {
                    route = data.redirect.route
                }

                if (data.redirect.ajax != true) {
                    redirect(route);
                } else {
                    AjaxQuestion({ link: route });
                }
            }

            $('.question .content').html(data.question.content);
        })
        .fail((data) => {
            // Log status
            console.log(data.status, "data status");
            // Log Response
            console.log(data.responseJSON, "data response");
        });
}

function AjaxForm(e) {
    let tableInput = [];

    // Prevented from having redirection
    e.preventDefault();
    let target = $(e.currentTarget);

    // Find the form entries
    $.each($('#' + target[0]["id"]).find('input'), function (i, el) {
        if ($(el).attr('id') != undefined) {
            // Push the ID of the form's entries into the table
            tableInput.push($(el).attr('id'));
        }
    });

    // Remove error of form
    resetError(tableInput);

    $.ajax({
        type: "post",
        url: $(target).attr('action'),
        data: new FormData(target[0]),
        contentType: false,
        processData: false
    })
        .done((data) => {
            if (data.redirect) {
                let route;
                let dataAjaxQuestion = [];

                if (data.redirect.route == "refresh") {
                    route = window.location.href;
                } else {
                    route = data.redirect.route
                }

                if (data.redirect.data) {
                    dataAjaxQuestion = data.redirect.data;
                }

                if (data.redirect.ajax != true) {
                    redirect(route);
                } else {
                    if (data.redirect.data) {
                        AjaxQuestion({link: route, data: dataAjaxQuestion});
                    } else {
                        AjaxQuestion({link: route});
                    }
                }
            }
        })
        .fail((data) => {
            $.each(data.responseJSON.errors, function (i, error) {
                // Finds the block of the message error and adds the message to it
                $('#' + target[0]["id"])
                    .find('.message-error-' + i)
                    .append(error);
            });
        });
}