document.addEventListener('DOMContentLoaded', function () {
    const timerInput = document.getElementById('hcdb-timer-input');
    const startButton = document.getElementById('hcdb-start-timer');
    const timerDisplay = document.getElementById('hcdb-timer-display');
    let countdown;

    startButton.addEventListener('click', function () {
        const minutes = parseInt(timerInput.value, 10);

        if (isNaN(minutes) || minutes <= 0) {
            timerDisplay.textContent = 'Please enter a valid number of minutes.';
            return;
        }

        let seconds = minutes * 60;
        timerDisplay.textContent = formatTime(seconds);

        clearInterval(countdown); // Clear any existing timer

        countdown = setInterval(function () {
            seconds--;
            timerDisplay.textContent = formatTime(seconds);

            if (seconds <= 0) {
                clearInterval(countdown);
                timerDisplay.textContent = 'Time is up!';
                alert('Timer finished!');
            }
        }, 1000);
    });

    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        const remainingSeconds = seconds % 60;
        return `${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
    }
});
