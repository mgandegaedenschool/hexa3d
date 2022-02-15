setInterval(timerCountdown, 1000);

function timerCountdown() {
    countdownTime = new Date(new Date(countdownTime.getTime()).setSeconds(countdownTime.getSeconds() + 1));

    if (countdownTime.getMinutes() == 15 && countdownTime.getSeconds() == 0) {
        $('#modalTimer').modal('show');
    } else if (countdownTime.getMinutes() >= 20) {
        redirect(window.location.href);
    }
}