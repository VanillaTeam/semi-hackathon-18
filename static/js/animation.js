// Анимация первого блока
function show_title() {
    // Показать первый заголовок
    setTimeout(function () {
        $('.title-1').addClass('show');
    }, 750);
    // Показать первый заголовок
    setTimeout(function () {
        $('.title-2').addClass('show');
    }, 1500);
    // Показать стрелочку
    setTimeout(function () {
        $('.down-arrow').addClass('show');
    }, 2250);
}

show_title();

// Анимация прокрутки для якорных ссылок
$('a[href^="#"]').on('click', function (e) {
    // Отмена обработчика по-умолчанию
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);
    // Учет высоты меню
    let menuHeight = $('#menu').height();
    // Если меню нет
    if (menuHeight === undefined) menuHeight = 0;

    // скорость прокрутки тут
    $('html, body').stop().animate({
        'scrollTop': $target.offset().top - menuHeight
    }, 900, 'swing', function () {
        /*window.location.hash = target;*/
    });
});