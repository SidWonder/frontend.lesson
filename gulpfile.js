/**
 * Gulpfile
 * Author:Andrey
 * 2020/02/09 
 * 
 * Подкинуть gulpfile.js, package.json, .gitignore в папку с проектом
 * Выполнить команду: npm i
 * 
 */

'use strict';
var gulp       	 = require('gulp'), 					      // Подключаем Gulp                                npm i --save-dev gulp
    browserSync  = require('browser-sync'), 			  // Подключаем Browser Sync                        npm i --save-dev browser-sync
    sass         = require('gulp-sass'), 				    // Подключаем Sass пакет,                         npm i --save-dev gulp-sass
    autoprefixer = require('gulp-autoprefixer'),		// Автоматическое добавление префиксов            npm i --save-dev gulp-autoprefixer
    plumber      = require("gulp-plumber"), 			  // Предохранитель для остановки галпа         	  npm i --save-dev gulp-plumber
    imagemin     = require('gulp-imagemin'), 			  // Сжатие изображений                             npm i --save-dev gulp-imagemin
    pngquant     = require('imagemin-pngquant'), 		// Сжатие png                                     npm i --save-dev imagemin-pngquant
    cssnano      = require('gulp-cssnano'), 			  // Подключаем пакет для минификации CSS	          npm i --save-dev gulp-cssnano
    cache        = require('gulp-cache'), 				  // Отключение кеширования в режиме разработки     npm i --save-dev gulp-cache

    rename       = require('gulp-rename'), 				  // Переименование файлов                          npm i --save-dev gulp-rename
    del          = require('del'), 						      // Удаление файлов и папок                        npm i --save-dev del
    concat       = require('gulp-concat'), 				  // Конкатенация файлов                            npm i --save-dev gulp-concat

    uglify       = require('gulp-uglify'), 				  // Сжатие JS                                      npm i --save-dev gulp-uglify
    jshint       = require("gulp-jshint"), 				  // Отслеживание ошибкок в js                      npm i --save-dev gulp-jshint

	  _src_		     = 'work/day71/src/',
	  _dist_		   = 'work/day71/dist/',
    _css_        = 'css';                           //Папка с стилями
	
// SASS
gulp.task('sass', function(){ // Создаем таск Sass
    return gulp.src(_src_+'sass/*.sass') // Берем источник    
        .pipe(plumber())
        .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы
        .pipe(gulp.dest(_src_+'css')) // Выгружаем результата в папку app/css
        .pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
});


// Browser-sync
gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync({ // Выполняем browserSync
        server: { // Определяем параметры сервера
            baseDir: _src_,    // Директория для сервера - app    
            index: "index.html" //Загружаемая страница 
        },
        notify: false, // Отключаем уведомления
        browser: ["chrome"] //Выбираем браузер, можно несколько "chrome", "firefox", "opera"
    });
});


// Сжимаем IMG
gulp.task('img', function() {
    return gulp.src(_src_+'img/**/*') // Берем все изображения из app
        .pipe(cache(imagemin({  // Сжимаем их с наилучшими настройками с учетом кеширования
            interlaced: true,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        })))
        .pipe(gulp.dest(_dist_+'img')); // Выгружаем на продакшен
});


// Удаляем dist
gulp.task('clean', function() {
    return del.sync(_dist_); // Удаляем папку dist перед сборкой
});

// Сжимаем JS
gulp.task('scripts', ['jstest'], function() {
    return gulp.src([_src_ + 'js/*.js', '!'+_src_+'js/*.min.js'])   // Ищем все JS
        .pipe(concat('scripts.min.js')) // Собираем их в кучу в новом файле libs.min.js
        .pipe(uglify()) // Сжимаем JS файл
        .pipe(gulp.dest(_src_ + 'js')); // Выгружаем в папку app/js
});

// проверка js на ошибки и вывод их в консоль
gulp.task('jstest', function() {
    return gulp.src([_src_+'js/**/*.js', '!'+_src_+'js/*.min.js']) //выберем файлы по нужному пути
        .pipe(jshint()) //прогоним через jshint
        .pipe(jshint.reporter('jshint-stylish')); //стилизуем вывод ошибок в консоль
});


// Сжимаем CSS
gulp.task('styles', ['sass'], function() {
    return gulp.src([_src_+_css_+'/*.css','!'+_src_+_css_+'/*.min.css','!'+_src_+_css_+'/fonts.css']) // Выбираем файл для минификации
        .pipe(cssnano()) // Сжимаем
        .pipe(rename({suffix: '.min'})) // Добавляем суффикс .min
        .pipe(gulp.dest(_src_+_css_)); // Выгружаем в папку app/css
});

gulp.task('build', ['clean', 'img', 'sass', 'styles', 'scripts'], function() {

/*     var buildCss2 = gulp.src([ // Переносим библиотеки в продакшен
        'app/css/main.css',
        'app/css/libs.min.css'
        ])
    .pipe(gulp.dest(_dist_ + 'css')) */
	
    var buildFonts = gulp.src(_src_ + 'libs/**/*') // Переносим библиотеки в продакшен
    .pipe(gulp.dest(_dist_ + 'libs'))
    
    var buildFonts = gulp.src(_src_ + 'fonts/**/*') // Переносим шрифты в продакшен
    .pipe(gulp.dest(_dist_ + 'fonts'))

     var buildJs = gulp.src(_src_ + 'js/scripts.min.js') // Переносим скрипты в продакшен
    .pipe(gulp.dest(_dist_ + 'js')) 

    var buildHtml = gulp.src(_src_ + '**/*.html') // Переносим HTML в продакшен
    .pipe(gulp.dest(_dist_))

    var buildCss = gulp.src([_src_+_css_+'/*.min.css', _src_+_css_+'/fonts.css']) // Переносим CSS в продакшен
    .pipe(gulp.dest(_dist_+_css_))
	
    var buildHtaccess = gulp.src(_src_ + '.htaccess') // Переносим htaccess в продакшен
    .pipe(gulp.dest(_dist_));

});


//WATCH
gulp.task('watch',['browser-sync'], function() {
    gulp.watch(_src_+'**/*.css', browserSync.reload); // Наблюдение за CSS файлами    
    gulp.watch(_src_+'**/*.html', browserSync.reload); // Наблюдение за HTML файлами      
    gulp.watch(_src_+'js/**/*.js', browserSync.reload);   // Наблюдение за JS файлами в папке js    
    gulp.watch(_src_+'sass/**/*.sass', ['sass', 'styles']); // Наблюдение за sass файлами в папке sass
});


gulp.task('clear', function () {
    return cache.clearAll();
}) 


gulp.task('default', ['watch']);
