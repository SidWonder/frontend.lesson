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
const  gulp       	 = require('gulp'), 					      // Подключаем Gulp                                npm i --save-dev gulp
    browserSync  = require('browser-sync'), 			  // Подключаем Browser Sync                        npm i --save-dev browser-sync
    sass         = require('gulp-sass'), 				    // Подключаем Sass пакет,                         npm i --save-dev gulp-sass
    autoprefixer = require('gulp-autoprefixer'),		// Автоматическое добавление префиксов            npm i --save-dev gulp-autoprefixer
    plumber      = require("gulp-plumber"), 			  // Предохранитель для остановки галпа         	  npm i --save-dev gulp-plumber    
    notify       = require('gulp-notify'),
    imagemin     = require('gulp-imagemin'), 			  // Сжатие изображений                             npm i --save-dev gulp-imagemin
    pngquant     = require('imagemin-pngquant'), 		// Сжатие png                                     npm i --save-dev imagemin-pngquant
    cssnano      = require('gulp-cssnano'), 			  // Подключаем пакет для минификации CSS	          npm i --save-dev gulp-cssnano
    cache        = require('gulp-cache'), 				  // Отключение кеширования в режиме разработки     npm i --save-dev gulp-cache
    htmlmin      = require('gulp-htmlmin'),

    rename       = require('gulp-rename'), 				  // Переименование файлов                          npm i --save-dev gulp-rename
    del          = require('del'), 						      // Удаление файлов и папок                        npm i --save-dev del
    concat       = require('gulp-concat'), 				  // Конкатенация файлов                            npm i --save-dev gulp-concat

    uglify       = require('gulp-uglify-es').default, 		  // Сжатие JS                                      npm i --save-dev gulp-uglify
    jshint       = require("gulp-jshint"), 				  // Отслеживание ошибкок в js                      npm i --save-dev gulp-jshint

    _src_        = "work/day84/src/",
    _dist_       = "work/day84/dist/",
    _css_        = "css"; //Папка с стилями

//Выводим сообщение о ошибках
var plumberErrorHandler = { errorHandler: notify.onError({
    title: 'Gulp',
    message: 'Error: <%= error.message %>'
  })
};

// SASS
gulp.task('sass', function(){ // Создаем таск Sass
    gulp.src(_src_+'sass/*.+(scss|sass)') // Берем источник    
        .pipe(plumber(plumberErrorHandler))                         
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true })) // Создаем префиксы  
        .pipe(cssnano()) // Сжимаем
        .pipe(rename({suffix: '.min'})) // Добавляем суффикс .min
        .pipe(gulp.dest(_dist_+'css')) // Выгружаем результата в папку app/css
        .pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
});


// Browser-sync
gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync({ // Выполняем browserSync
        server: { // Определяем параметры сервера
            baseDir: _dist_,    // Директория для сервера - app    
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
        .pipe(gulp.dest(_dist_ + 'js')) // Выгружаем в папку app/js   
        .pipe(browserSync.reload({stream:true})); 
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
        .pipe(gulp.dest(_dist_+_css_)) // Выгружаем в папку app/css  
        .pipe(browserSync.reload({stream:true})); 
});



//Сжимаем html
gulp.task('html', function () {
    return gulp.src(_src_ + "/*.html")
        .pipe(htmlmin({ collapseWhitespace: true }))
        .pipe(gulp.dest(_dist_))
        .pipe(browserSync.reload({stream:true}));
});

gulp.task('copy', function() {

    var buildCss = gulp.src([_src_+_css_+'/*.min.css', _src_+_css_+'/fonts.css']) // Переносим CSS-min в продакшен
    .pipe(gulp.dest(_dist_+_css_))

    var buildFonts = gulp.src(_src_ + 'fonts/**/*') // Переносим шрифты в продакшен
    .pipe(gulp.dest(_dist_ + 'fonts'))
    
     var buildsJs = gulp.src(_src_ + 'js/*.min.js') // Переносим минимизированые скрипты в продакшен
        .pipe(gulp.dest(_dist_ + 'js'));
        
    var buildFonts = gulp.src(_src_ + 'libs/**/*') // Переносим библиотеки в продакшен
    .pipe(gulp.dest(_dist_ + 'libs'))
	
    var buildHtaccess = gulp.src(_src_ + '.htaccess') // Переносим htaccess в продакшен
    .pipe(gulp.dest(_dist_));

});


//WATCH 
gulp.task('watch', function() {
    gulp.watch(_src_+'sass/**/*.+(sass|scss|css)', ['sass', 'styles']); // Наблюдение за sass файлами в папке sass
    gulp.watch(_src_+'**/*.css', ['styles', 'clear'], browserSync.reload); // Наблюдение за CSS файлами    
    gulp.watch(_src_+'**/*.html', ['html'], browserSync.reload); // Наблюдение за HTML файлами      
    gulp.watch(_src_+'js/**/*.js', ['scripts', 'clear'], browserSync.reload),   // Наблюдение за JS файлами в папке js    
    gulp.watch(_src_+'libs/**/*.*', ['copy', 'clear'], browserSync.reload); 
    gulp.watch(_src_+'img/**/*.*', ['img', 'clear'], browserSync.reload); 
});


gulp.task('clear', function () {
    return cache.clearAll();
}) 


gulp.task('default', ['watch', 'browser-sync', 'clean', 'styles', 'scripts', 'html', 'copy', 'img']);
