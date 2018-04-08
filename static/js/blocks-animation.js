/*  Vue классы для плавного отображения элементов блока */

let vladimir_vue = new Vue({
    el: '#vladimir',
    data: {
        lang_1: false,
        lang_2: false,
        lang_3: false,
        lang_4: false,
        lang_5: false
    }
});

let alex_vue = new Vue({
    el: '#alex',
    data: {
        lang_1: false,
        lang_2: false,
        lang_3: false
    }
});

let anton_vue = new Vue({
    el: '#anton',
    data: {
        lang_1: false,
        lang_2: false,
        lang_3: false,
        lang_4: false,
        lang_5: false
    }
});

let ilya_vue = new Vue({
    el: '#ilya',
    data: {
        lang_1: false,
        lang_2: false,
        lang_3: false,
        lang_4: false
    }
});

/* Функции для запуска анимаций блоков */

function show_vladimir() {
    vladimir_vue.lang_1 = true;
    setTimeout(function () {
        vladimir_vue.lang_2 = true
    }, 200);
    setTimeout(function () {
        vladimir_vue.lang_3 = true
    }, 400);
    setTimeout(function () {
        vladimir_vue.lang_4 = true
    }, 600);
    setTimeout(function () {
        vladimir_vue.lang_5 = true
    }, 800);
}

function show_alex() {
    alex_vue.lang_1 = true;
    setTimeout(function () {
        alex_vue.lang_2 = true
    }, 200);
    setTimeout(function () {
        alex_vue.lang_3 = true
    }, 400);
}

function show_anton() {
    anton_vue.lang_1 = true;
    setTimeout(function () {
        anton_vue.lang_2 = true
    }, 200);
    setTimeout(function () {
        anton_vue.lang_3 = true
    }, 400);
    setTimeout(function () {
        anton_vue.lang_4 = true
    }, 600);
    setTimeout(function () {
        anton_vue.lang_5 = true
    }, 800);
}

function show_ilya() {
    ilya_vue.lang_1 = true;
    setTimeout(function () {
        ilya_vue.lang_2 = true
    }, 200);
    setTimeout(function () {
        ilya_vue.lang_3 = true
    }, 400);
    setTimeout(function () {
        ilya_vue.lang_4 = true
    }, 600);
}

// Дополнительные параметры для функций
show_vladimir.was = false;
show_alex.was = false;
show_anton.was = false;
show_ilya.was = false;

/* Waypoint'ы для запуска анимаций */

$('#vladimir .langs-label').waypoint(function (direction) {
    if (!show_vladimir.was) {
        show_vladimir();
    }
}, {
    offset: '80%'
});

$('#alex .langs-label').waypoint(function (direction) {
    if (!show_alex.was) {
        show_alex();
    }
}, {
    offset: '80%'
});

$('#anton .langs-label').waypoint(function (direction) {
    if (!show_anton.was) {
        show_anton();
    }
}, {
    offset: '80%'
});

$('#ilya .langs-label').waypoint(function (direction) {
    if (!show_ilya.was) {
        show_ilya();
    }
}, {
    offset: '80%'
});