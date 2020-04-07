'use strict';
var gulp = require('gulp');
var stylus = require('gulp-stylus');
var concat = require('gulp-concat');
var watch = require('gulp-watch');

gulp.task('compress', function () {
	gulp.src('./assets/stylus/main.styl')
		.pipe(stylus({
			compress: true
		}))
		.pipe(gulp.dest('./assets/css/'));
});

gulp.task('concat', function() {
	return gulp.src([
				'./assets/css/base-theme.css',
				'./assets/css/icons-font.css',
				'./assets/css/main.css'
				])
		.pipe(concat('sk8-styles.css'))
		.pipe(gulp.dest('./'));
});

gulp.task('scripts', function() {
	return gulp.src('./assets/js/*.js')
		.pipe(concat('all.js'))
		.pipe(gulp.dest('./'));
});

gulp.task('watch', function() {
	gulp.watch(['./assets/stylus/main.styl', './assets/js/z-custom.js'], ['compress','scripts','concat']);
});

// Default gulp task to run
gulp.task('default', ['compress', 'scripts', 'concat', 'watch']);