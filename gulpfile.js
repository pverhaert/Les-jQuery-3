var gulp = require('gulp');
var browserSync = require('browser-sync').create();
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');

gulp.task('browser-sync', function () {
    browserSync.init({
        startPath: '/index.html',
        server: {
            baseDir: "./public_html",
            directory: true
        }
    });
    gulp.watch('./scss/**/*.scss', gulp.series('sass'));
    gulp.watch('./**/*.{html,css,js,php}').on('change', browserSync.reload);
});

// Copy jQuery
gulp.task('js', function () {
    return gulp.src(['node_modules/jquery/dist/jquery.min.js'])
        .pipe(gulp.dest('./public_html/js'));
});

// Compile sass into CSS (/public_html/css/) & auto-inject into browsers
gulp.task('sass', function () {
    return gulp.src('./scss/**/*.scss')
        .pipe(plumber())
        // outputStyle: nested (default), expanded, compact, compressed
        .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
        .pipe(prefix("last 2 versions"))
        .pipe(gulp.dest('./public_html/css'))
        .pipe(browserSync.stream());
});

gulp.task('default', gulp.series('js', 'sass', 'browser-sync'));