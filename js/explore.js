let exploreCategories = document.querySelectorAll('.explore-subpage-btn')

exploreCategories.forEach((item) =>
    item.addEventListener('click', () => {
        document.querySelectorAll('.explore-subpage').forEach((item) =>
            item.style.display = 'none'
        )
        document.querySelector('#explore-recent').style.display = 'none'
        let subpageId = event.target.getAttribute('data-id')
        let exploreSubpage = document.querySelector(`#explore-${subpageId}`)
        exploreSubpage.style.display = 'block'
        exploreCategories.forEach((item) =>
            item.classList.remove('explore-active')
        )
        event.target.classList.add('explore-active')
    })
)