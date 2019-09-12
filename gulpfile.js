let gulp = require("gulp"),
	minCss = require("gulp-clean-css"),
	imageResize = require('gulp-image-resize'),
	imagemin = require('gulp-imagemin'),
	jsmin = require('gulp-uglyfly');


gulp.task("min", function (done){
 gulp.src("site/css/*.css")
 .pipe(minCss())
 .pipe(gulp.dest('site/css/'))
done();
});
gulp.task("minjs", function(done){
	gulp.src("site/js/*.js")
	.pipe(jsmin())
	.pipe(gulp.dest("site/js/"))
	done();
	});

gulp.task("resize", function(done){
	gulp.src("site/img/*.png")
	.pipe(imagemin())
	.pipe(gulp.dest("site/img/"))
	done();
});
