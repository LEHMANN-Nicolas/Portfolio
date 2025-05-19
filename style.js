document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.fade-in-down');

    window.addEventListener('scroll', () => {
        let delay = 0;

        elements.forEach((element, index) => {
            const elementPosition = element.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (elementPosition < windowHeight) {
                setTimeout(() => {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }, delay);
                delay += 300; // Delay of 300ms for each element
            }
        });
    });

    // Trigger scroll event once to check the initial position
    window.dispatchEvent(new Event('scroll'));
});