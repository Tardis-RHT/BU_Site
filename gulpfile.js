var gulp = require('gulp');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var gcmq = require('gulp-group-css-media-queries');
var browserSync = require('browser-sync');
var connect = require('gulp-connect-php');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');

var paths = {
    css:['css/*.css','mods/*/*.css'],
    php:['*.php', 'mods/*/*.php'],
    // js:['js/*.js', 'mods/*/*.js'],
    dir:['./']
};
var plugins = [
    cssnext({
        browserslist: [
            // "> 1%",
            "Chrome >= 58",
            "Firefox >= 45",
            "Safari >= 9",
            "Opera >= 45",
            "IE 11",
            "Edge >= 15",
          ]
    })
];

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
        .pipe(cleanCSS()) 
        .pipe(gulp.dest('css/'))
        .pipe(browserSync.stream());
});

        // -->> Most comments are here in case we will need some html work:
// gulp.task('scripts', function() {  
//     return gulp.src(paths.js)
//         // .pipe(uglify())
//         .pipe(concat('script.js'))
//         .pipe(gulp.dest('js/'))
//         .pipe(browserSync.stream());
// });

// gulp.task('watch', ['css', 'html'], function() {
gulp.task('watch', ['css', 'connect-sync'], function() {
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
    // gulp.watch([paths.js], ['scripts']);
    // gulp.watch("*.html", ['html']).on('change', browserSync.reload);

});

gulp.task('default', ['watch']);