(() => {
    const burgerMenu = document.querySelector('.burger-menu');
    const closeMenu = document.querySelector('.close-menu');
    const menuOverlay = document.querySelector('.menu-overlay');
    const menu = document.querySelector('.menu');
    const backArrow = document.querySelector('.back-arrow');
    const searchBar = document.querySelector('#menu-search-bar');

    function toggleMenu() {
        menuOverlay.classList.toggle('hidden');
    }

    // bind toggleMenu
    [burgerMenu, closeMenu, menuOverlay].forEach((element) =>
        element.addEventListener('click', toggleMenu)
    );

    // prevent event bubbling from menu container
    menu.addEventListener('click', (e) => e.stopPropagation());

    // give the browser go back functionality to the back arrow button
    if (backArrow) backArrow.addEventListener('click', () => history.back());

    // add search functionality to the search bar
    if (document.querySelector('#explore')) {
        const results = document.querySelectorAll('.hashtag-group-person');
        const filterStuff = (e) => {
            const searchTerm = e.target.value.toLowerCase();
            results.forEach((result) => {
                const resultTitle = result
                    .querySelector('.result-title')
                    .textContent.toLowerCase();

                if (resultTitle.includes(searchTerm)) {
                    result.classList.remove('hidden');
                } else result.classList.add('hidden');
            });
        };
        searchBar.addEventListener('keyup', filterStuff);
    }
})();
