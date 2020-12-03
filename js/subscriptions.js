if (document.getElementById('subscriptions')) {
    (() => {
        const subBoxes = document.querySelectorAll('.subscription-box');
        const onClickHandler = (e) => {
            const states = ['Subscribe', 'Unsubscribe'];
            e.target.classList.toggle('unsub-btn');
            e.target.textContent =
                e.target.textContent === states[0] ? states[1] : states[0];
        };

        subBoxes.forEach((subBox) => {
            subBox
                .querySelector('button')
                .addEventListener('click', onClickHandler);
        });
    })();
}
