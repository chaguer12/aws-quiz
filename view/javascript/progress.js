document.addEventListener('DOMContentLoaded', (event) => {
    const userNameInput = document.getElementsByName('userName')[0];
    const progressBar = document.getElementById('progress_bar');

    userNameInput.addEventListener('input', function() {
        let percentage = 10;

        if (this.value.length === 0) {
            percentage = 0;
        }

        progressBar.style.width = `${percentage}%`;

        // Trigger a reflow to apply the transition on subsequent changes
        void progressBar.offsetWidth;
    });
});
