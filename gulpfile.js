var gulp = require('gulp');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var gcmq = require('gulp-group-css-media-queries');
var browserSync = require('browser-sync');
var connect = require('gulp-connect-php');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');
var autoprefixer = require('gulp-autoprefixer');

var paths = {
    css:['css/*.css','mods/*/*.css'],
    php:['*.php', 'mods/*/*.php'],
    js:['mods/*/*.js'],
    dir:['./']
};
var plugins = [
    cssnext({
        browserslist: [
            "Chrome >= 58",
            "Firefox >= 45",
            "Safari >= 9",
            "Opera >= 45",
            "IE 11",
            "Edge >= 15",
          ]
    })
];
        // -->> Most comments are here in case we will need some html work:
// gulp.task ('html', function() {
//     return gulp.src('*.html')
//         .pipe(browserSync.stream());
//   });

gulp.task('connect-sync', function() {
    connect.server({}, function() {
        browserSync({
            proxy: '127.0.0.1:8888'
        });
    });

    gulp.watch('**/*.php').on('change', function () {
        browserSync.reload();
    });
});

gulp.task('css', function () {
    return gulp.src('css/style.css')
        .pipe(postcss(plugins))
        .pipe(cleanCSS())
        .pipe(concat('stylemin.css'))
        .pipe(gcmq())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        })) 
        .pipe(cleanCSS()) 
        .pipe(gulp.dest('css/'))
        .pipe(browserSync.stream());
});

gulp.task('js', function() {  
    return gulp.src(paths.js)
        .pipe(concat('script.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js/'))
        .pipe(browserSync.stream());
});

// gulp.task('watch', ['css', 'html'], function() {
gulp.task('watch', ['css', 'js', 'connect-sync'], function() {
    // browserSync({
    //     server: {
    //         baseDir: paths.dir
    //     },
    //     port: 8888
    // }); 

    // connect.server({}, function() {
    //     browserSync({
    //         proxy: '127.0.0.1:8888'
    //     });
    // });

    gulp.watch([paths.php]).on('change', browserSync.reload);
    gulp.watch([paths.css], ['css']);
    gulp.watch([paths.js], ['js']);
    // gulp.watch("*.html", ['html']).on('change', browserSync.reload);

});

gulp.task('default', ['watch']);