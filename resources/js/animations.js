const counters = document.querySelectorAll(".counter");

const options = {
    threshold: 1,
};

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            const targetValue = parseInt(
                entry.target.getAttribute("data-target")
            );
            entry.target.innerText = "0";

            const updateCounter = () => {
                const count = +entry.target.innerText;
                const increment = targetValue / 200;

                if (count < targetValue) {
                    entry.target.innerText = `${Math.ceil(count + increment)}`;
                    if (targetValue === 10) {
                        setTimeout(updateCounter, 150);
                    } else if (targetValue === 30) {
                        setTimeout(updateCounter, 50);
                    } else if (targetValue === 250) {
                        setTimeout(updateCounter, 15);
                    }
                } else {
                    entry.target.innerText = targetValue;
                }
            };
/**/
            updateCounter();
            observer.unobserve(entry.target);
        }
    });
}, options);

counters.forEach((counter) => {
    observer.observe(counter);
});
