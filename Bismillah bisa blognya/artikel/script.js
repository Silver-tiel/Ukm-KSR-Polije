const slider = document.getElementById('slider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

if(slider) {
    nextBtn.addEventListener('click', () => {
        slider.scrollBy({ left: 420, behavior: 'smooth' });
    });

    prevBtn.addEventListener('click', () => {
        slider.scrollBy({ left: -420, behavior: 'smooth' });
    });
}