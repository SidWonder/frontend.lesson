'use strict';
var gulp       	 = require('gulp'), // Подключаем Gulp
    cache        = require('gulp-cache'), // Подключаем библиотеку кеширования
    browserSync  = require('browser-sync'), // Подключаем Browser Sync 
    plumber      = require("gulp-plumber"); //предохранитель для остановки гальпа   



gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync({ // Выполняем browserSync
        server: { // Определяем параметры сервера
            baseDir: 'work/day27',    // Директория для сервера - app    
            index: "index.html" //Загружаемая страница 
        },
        notify: false, // Отключаем уведомления
        browser: ["chrome"] //Выбираем браузер, можно несколько "chrome", "firefox", "opera"
    });
});

  

gulp.task('watch', ['browser-sync'], function() {
    gulp.watch('work/day27/*.html', browserSync.reload); // Наблюдение за HTML файлами    
    gulp.watch('work/day27/*.html', browserSync.reload); // Наблюдение за HTML файлами      
    gulp.watch('work/day27/js/**/*.js', browserSync.reload);   // Наблюдение за JS файлами в папке js
});


gulp.task('clear', function () {
    return cache.clearAll();
})

gulp.task('default', ['watch']);
