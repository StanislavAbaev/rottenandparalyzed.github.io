let gulp = require("gulp"),
	minCss = require("gulp-clean-css"),
	imageResize = require('gulp-image-resize'),
	imagemin = require('gulp-imagemin');


gulp.task("min", function (done){
 gulp.src("site/css/*.css")
 .pipe(minCss())
 .pipe(gulp.dest('demo/css/'))
done();
});

gulp.task("resize", function(done){
	gulp.src("site/img/*.png")
	.pipe(imagemin())
	.pipe(gulp.dest("demo/img/"))
	done();
});
