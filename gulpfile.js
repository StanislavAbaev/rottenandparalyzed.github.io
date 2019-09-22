let gulp = require('gulp'),
    // sass = require('gulp-sass'),
    browserSync = require('browser-sync'),
    uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    del = require('del'),
    autoprefixer = require('gulp-autoprefixer'),
    cleanCss = require('gulp-clean-css');

gulp.task('serve', function() {
    browserSync.init({
        server: {
            baseDir: "app/"
        }
    });
});

gulp.task("css", function(done){
	gulp.src('app/css/*.css')
	.pipe(cleanCss())
	.pipe(rename({suffix:"-min"}))
	.pipe(gulp.dest("app/min-css/"))
	.pipe(concat("concats-min.css"))
	.pipe(gulp.dest('app/min-css/'))
	done();
})
gulp.task('js', function(done){
	gulp.src('app/js/*.js')
	.pipe(uglify())
	.pipe(rename({suffix:"-min"}))
	.pipe(gulp.dest("app/min-js/"))
	done();
})
gulp.task("watch",function(done){
	gulp.watch('app/*.html').on("change",browserSync.reload)
	gulp.watch('app/css/*.css').on("change",browserSync.reload)
	gulp.watch('app/js/*.js').on("change",browserSync.reload)
	done();
})

gulp.task("default", gulp.parallel('serve','css','js','watch'))