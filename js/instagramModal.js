if (document.querySelector('.ig-login-flow-wrapper')) {
    (() => {
        const flowWrapper = document.querySelector('.ig-login-flow-wrapper');
        const flowBox = document.querySelector('.ig-login-flow');
        const closeFlowButton = document.querySelector('.close-flow-button');
        const flowForm = document.querySelector('.ig-login-flow-form');

        flowWrapper.addEventListener('click', () => {
            flowWrapper.classList.add('hidden');
        });

        flowBox.addEventListener('click', (e) => {
            e.stopPropagation();
        });

        closeFlowButton.addEventListener('click', () => {
            flowWrapper.classList.add('hidden');
        });

        flowForm.addEventListener('submit', (e) => {
            e.preventDefault();
            window.location.href = './automations.php';
        });
    })();
}
