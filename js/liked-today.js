if (document.getElementById('liked-posts')) {
    (() => {
        const checkInputs = document.querySelectorAll('.liked-box-check');
        const unLikeButton = document.querySelector('#unlike-selected-btn');
        const onDislikeHandler = () => {
            checkInputs.forEach((checkbox) => {
                if (checkbox.checked) {
                    checkbox.parentNode.remove();
                }
            });
        };
        unLikeButton.addEventListener('click', onDislikeHandler);
    })();
}
