const gulp = require('gulp');
const cleanCSS = require('gulp-clean-css');
const jsmin = require('gulp-jsmin');
const htmlmin = require('gulp-htmlmin');
const tinify = require('gulp-tinify');


// Зжати файли CSS

gulp.task('minify-css', () => {
  return gulp.src('src/css/*.css')
    .pipe(cleanCSS())
    .pipe(gulp.dest('build/css/'))
});

// Перенести зжаті файли JS

gulp.task('move-js', () => {
  return gulp.src('src/js/*.min.js')
    .pipe(gulp.dest('build/js'))
});

// Зжати файли JS та перенести

gulp.task('minify-js', () => {
  return gulp.src(['src/js/*.js', '!src/js/*.min.js'])
    .pipe(jsmin())
    .pipe(gulp.dest('build/js'))
});

// Зжати файли HTML та перенести

gulp.task('htmlmin', () => {
  return gulp.src('src/*.html')
    .pipe(htmlmin({ collapseWhitespace: true }))
    .pipe(gulp.dest('build/'))
});

// Перенести Шрифти

gulp.task('moveFonts', () => {
  return gulp.src('src/fonts/*/*.*')
    .pipe(gulp.dest('build/fonts'))
})

// Перенести та зжати зображення

gulp.task('imagemin', () => {
  return gulp.src('src/img/**/*.*')
    .pipe(tinify('SgQwgzm7dLqw045j57n78XbcW4gTxZWG'))
    .pipe(gulp.dest('build/img'));
})

// Перенести  php

gulp.task('movephp', () => {
  return gulp.src('src/phpmailer/*.php')
    .pipe(gulp.dest('build/phpmailer'))
})


gulp.task('build', gulp.series('minify-css', 'move-js', 'minify-js', 'htmlmin', 'moveFonts', 'imagemin', 'movephp'));