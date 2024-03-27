
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="filter.js"></script>
    <link rel="stylesheet" href="filter.css">
</head>
<body>
    

<div class="filter">
    <div class="filter__name">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.42388 1.25C1.77581 1.25 1.25 1.78465 1.25 2.4428V3.14483C1.25 3.63235 1.43539 4.10119 1.76702 4.45383L5.40133 8.31824L5.40292 8.31581C6.10453 9.03409 6.49929 10.0051 6.49929 11.0175V14.4464C6.49929 14.6755 6.73902 14.8218 6.938 14.7137L9.00767 13.5859C9.32011 13.4153 9.51509 13.0838 9.51509 12.7238V11.0085C9.51509 10.0018 9.90426 9.0349 10.5995 8.31824L14.2338 4.45383C14.5646 4.10119 14.75 3.63235 14.75 3.14483V2.4428C14.75 1.78465 14.225 1.25 13.5769 1.25H2.42388Z" stroke="#A7A7A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Фильтр
    </div>
    <div class="filter__content filter__content--none">
        <svg class="filter__close" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M12.0927 13.04L7.85268 8.79329L3.61268 13.04L2.66602 12.0933L6.91268 7.85329L2.66602 3.61329L3.61268 2.66663L7.85268 6.91329L12.0927 2.67329L13.0327 3.61329L8.79269 7.85329L13.0327 12.0933L12.0927 13.04Z" fill="#A7A7A7"/>
        </svg>
        <div class="filter-item">
            <div class="filter-item__name">
                По размеру
            </div>
            <div class="filter-item__block">
                <div class="filter-item__select">
                    <div class="filter-item__select-text filter-item__select-content-text--gray">
                        Маленький
                    </div>

                    <div class="filter-item__select-content filter-item_content--none">
                        <div class="filter-item__select-content-text filter-item__select-content-text--gray">
                            Маленький
                        </div>
                        <div class="filter-item__select-content-text">
                            Средний
                        </div>
                        <div class="filter-item__select-content-text">
                            Большой
                        </div>
                    </div>

                    <svg class="filter-item__select-svg" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M12 5L7 10L2 5" stroke="#A7A7A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="filter-item">
            <div class="filter-item__name">
                По цвету
            </div>
            <div class="filter-item__block">
                <div class="filter-item__select">
                    <div class="filter-item__select-text filter-item__select-content-text--gray">
                        Чёрный
                    </div>

                    <div class="filter-item__select-content filter-item_content--none">
                        <div class="filter-item__select-content-text filter-item__select-content-text--gray">
                            Чёрный
                        </div>
                        <div class="filter-item__select-content-text">
                            Белый
                        </div>
                        <div class="filter-item__select-content-text">
                            Зелёный
                        </div>
                    </div>

                    <svg class="filter-item__select-svg" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M12 5L7 10L2 5" stroke="#A7A7A7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
