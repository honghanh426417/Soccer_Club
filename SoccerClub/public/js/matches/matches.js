function siteCountDown() {
    const targetDate = new Date('2023-10-25').getTime();

    function updateCountdown() {
        const currentDate = new Date().getTime();
        console.log(currentDate)
        const timeRemaining = targetDate - currentDate;

        if (timeRemaining <= 0) {
            // Countdown has expired
            document.getElementById('date-countdown2').innerHTML = 'Countdown expired';
            clearInterval(countdownInterval); // Dừng interval
        } else {
            const weeks = Math.floor(timeRemaining / (1000 * 60 * 60 * 24 * 7));
            const days = Math.floor((timeRemaining % (1000 * 60 * 60 * 24 * 7)) / (1000 * 60 * 60 * 24));
            const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            document.getElementById('date-countdown2').innerHTML = `<span class="countdown-block"><span class="label">${weeks}</span> weeks </span> <span class="countdown-block"><span class="label">${days}</span> days </span> <span class="countdown-block"><span class="label">${hours}</span> hr </span> <span class="countdown-block"><span class="label">${minutes}</span> min </span> <span class="countdown-block"><span class="label">${seconds}</span> sec</span>`;
        }
    }

    updateCountdown();
    const countdownInterval = setInterval(updateCountdown, 1000);
}

siteCountDown();
