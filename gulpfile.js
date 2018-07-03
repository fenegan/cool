const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('sass', () => {
  gulp.src('assets/scss/*.scss')
  .pipe(sass())
  .pipe(gulp.dest('assets/css'));
});

gulp.task('watch', ['sass'], () => {
  gulp.watch('assets/scss/**/*.scss', ['sass']);
});