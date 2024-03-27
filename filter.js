document.addEventListener("DOMContentLoaded", function () {
    
    document.querySelector('.filter__name').addEventListener('click', () =>{
        document.querySelector('.filter__content').classList.remove('filter__content--none');
    });

    document.querySelector('.filter__close').addEventListener('click', () =>{
        document.querySelector('.filter__content').classList.add('filter__content--none');
    });
    
    const filters = document.querySelectorAll('.filter-item__select');

    document.body.addEventListener('click', (event) =>{
        filters.forEach((filter) => {
            filter.querySelector('.filter-item__select-text').classList.remove('filter-item_content--none');
            filter.querySelector('.filter-item__select-content').classList.add('filter-item_content--none');
            filter.classList.remove('filter-item__select--border0');
            filter.querySelector('.filter-item__select-svg').classList.remove('filter-item__select-svg--transform');
        });
        
    });

    filters.forEach((filter) => {

        texts = filter.querySelectorAll('.filter-item__select-content .filter-item__select-content-text');
        texts.forEach((text) => {
            text.addEventListener('click', (event) =>{
                text.parentNode.parentNode.classList.remove('filter-item__select--border0');                
                text.parentNode.classList.add('filter-item_content--none');
                text.parentNode.previousElementSibling.classList.remove('filter-item_content--none');
                text.parentNode.nextElementSibling.classList.remove('filter-item__select-svg--transform');
                text.parentNode.parentNode.firstElementChild.replaceWith(text.cloneNode(true));
                text.parentNode.parentNode.firstElementChild.classList.add('filter-item__select-text');
                event.stopPropagation()
            });
        });

        filter.addEventListener('click', (event) =>{

            filters.forEach((filter2) => {
                filter2.querySelector('.filter-item__select-text').classList.remove('filter-item_content--none');
                filter2.querySelector('.filter-item__select-content').classList.add('filter-item_content--none');
                filter2.classList.remove('filter-item__select--border0');
                filter2.querySelector('.filter-item__select-svg').classList.remove('filter-item__select-svg--transform');
            });

            filter.querySelector('.filter-item__select-text').classList.add('filter-item_content--none');
            filter.querySelector('.filter-item__select-content').classList.remove('filter-item_content--none');
            filter.classList.add('filter-item__select--border0');
            filter.querySelector('.filter-item__select-svg').classList.add('filter-item__select-svg--transform');
            event.stopPropagation()
        });
        
    });


});