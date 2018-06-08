var gulp = require('gulp'),
		stylus = require('gulp-stylus'),
		watch = require('gulp-watch'),
 		rename = require('gulp-rename'),
 		uglify = require('gulp-uglify'),
 		colors = require('colors'),
 		pump = require('pump');

 		// jshint = require('gulp-jshint');

var dirs = {
		css: 'css/',
		js:  'js/'
	}

// Lint Task
// gulp.task('lint', function() {
// 	return gulp.src('./js/*.js')
//     .pipe(jshint())
//     .pipe(jshint.reporter('default'));
// });	

gulp.task('stylus', function() {
	return gulp.src('./css/custom.styl')
		.pipe(stylus({
			compress: true,
		}))
		.pipe(rename('custom.min.css'))
		.pipe(gulp.dest('css/'));
});

gulp.task('compress', function (cb) {
	pump([
			gulp.src('./js/main.js'),
			uglify(),
			rename('main.min.js'),
			gulp.dest('js/')
		],
		cb
	);
}); 

gulp.task('watch', function() {
  gulp.watch('./css/*.styl', ['stylus']);
  gulp.watch('./js/*.js', ['compress']);

});

gulp.task('default', ['stylus','watch']);