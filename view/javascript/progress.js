function updateProgressBar(percentage) {
    const progressBar = document.getElementById('progress_bar');
    if (progressBar) {
        progressBar.style.width = `${percentage}%`;
    }
}

document.addEventListener('DOMContentLoaded', (event) => {
    
    
    updateProgressBar(userProgress);
});
