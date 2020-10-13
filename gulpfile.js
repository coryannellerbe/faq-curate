const gulp = require('gulp');
const sass = require('gulp-sass');
//const cleanCSS = require("gulp-clean-css");

const dest_path = './styles/css/';
const src_path = './styles/scss/';

function watchFiles() {
  gulp.watch('./**/*.scss').on('change', function (file) {
    var src = src_path + 'curate-styles.scss';
    console.log(file);
    console.log(dest_path);

    return (
      gulp
        .src(src)
        .pipe(sass()) // Using gulp-sass
        //.pipe(gulp.dest('../css'));
        //.pipe(cleanCSS())
        .pipe(gulp.dest(dest_path))
    );
  });
}

const watch = gulp.parallel(watchFiles);
const build = gulp.series(gulp.parallel(watchFiles));

exports.watch = watch;
exports.default = build;
