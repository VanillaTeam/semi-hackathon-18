// Плавное появление и исзечновение меню сверху
$(window).scroll(function () {
    if ($(window).scrollTop() >= $('#title').outerHeight() - $('#menu').outerHeight()) {
        // Показать
        $('#menu').fadeIn();
    } else {
        // Спрятать
        $('#menu').fadeOut();
    }
});
// На случай, если перезагрзили страницу не в начале полосы прокрутки
if ($(window).scrollTop() >= $('#title').outerHeight() - $('#menu').outerHeight()) {
    $('#menu').fadeIn();
}