var gulp = require('gulp');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var gcmq = require('gulp-group-css-media-queries');
var browserSync = require('browser-sync');
var postcss = require('gulp-postcss');
var cssnext = require('postcss-cssnext');

var paths = {
    css:['css/*.css','mods/*/*.css'],
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

gulp.task ('html', function() {
    return gulp.src('*.html')
        .pipe(browserSync.stream());
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

// gulp.task('scripts', function() {  
//     return gulp.src('js/*')
//         .pipe(concat('scripts.js'))
//         .pipe(gulp.dest('js/'))
//         .pipe(browserSync.stream());
// });

gulp.task('watch', ['css', 'html'], function() {
    browserSync({
        server: {
            baseDir: paths.dir
        },
        port: 8080
    });

    gulp.watch([paths.css], ['css']);
    // gulp.watch(["js/*"], ['js']);
    gulp.watch("*.html", ['html']).on('change', browserSync.reload);

});

gulp.task('default', ['watch']);