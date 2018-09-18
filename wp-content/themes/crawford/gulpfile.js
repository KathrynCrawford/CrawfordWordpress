var gulp = require('gulp');
var minifycss = require('gulp-cssnano');
var autoprefixer = require('gulp-autoprefixer');
var notify = require('gulp-notify');
var sass = require('gulp-ruby-sass');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
// var critical = require('critical');

gulp.task('css', function() {
    return sass('scss/style.scss')
        .pipe(sourcemaps.init())
        .pipe(autoprefixer())
        .pipe(concat('style.css'))
        .on('error', sass.logError)
        .pipe(minifycss())
        .pipe(sourcemaps.write(''))
        .pipe(gulp.dest('./scss'))
		    .pipe(notify({ message: 'Wait for it....wait for it!!!' }));
});

gulp.task('default', function() {
    gulp.watch('scss/**/*.scss',['css']);
});
// gulp.task('critical', ['build'], function (cb) {
//     critical.generate({
//         inline: true,
//         base: 'dist/',
//         src: 'css/styles.css',
//         dest: 'header.php',
//         minify: false,
//         width: 1900,
//         height: 1700
//     });
// });
