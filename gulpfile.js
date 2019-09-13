/* eslint-disable camelcase */
const {
  dest,
  parallel,
  series,
  src
} = require('gulp'),
  concat = require('gulp-concat'),
  rename = require('gulp-rename'),
  sass = require('gulp-sass'),
  uglify = require('gulp-uglify'),
  cleanCSS = require('gulp-clean-css');


const Wlax = {
  // all: [
  //   './LevelUp/*.*',
  //   // './LevelUp/fonts/*.*',
  //   // './LevelUp/img/**/*.*',
  //   // '!./LevelUp/**/*.scss',
  //   '!./LevelUp/*.scss',
  //   '!./LevelUp/css/*.css',
  //   '!./LevelUp/**/*.js'
  // ],
  scss: './LevelUp/assets/scss/*.scss',
  aljs: './LevelUp/js/*.js',
  pub: './LevelUp/dist/',
  css: './LevelUp/dist',
  newcss: './LevelUp/css/',
  allcss: './LevelUp/css/*.css',
  js: './LevelUp/dist'
}

// const clear = () => src('./dist', {read: false}).pipe(gcln());
// const clear = () => del(Wlax.pub).then((paths) => {
//   console.log('Deleted files and folders:\n', paths.join('\n'));
// });

// const allf = () => src(Wlax.all, { base: './LevelUp/'}).
// pipe(dest(Wlax.pub));

const css = () => src(Wlax.scss).
  // pipe(concat('min')).
  pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError)).
  // pipe(rename('*.min.css')).
  pipe(dest(Wlax.newcss));

// Объединение стилей CSS
const allcss = () => src(Wlax.allcss).
  pipe(concat('min')).
  pipe(cleanCSS({compatibility: 'ie8'})).
  // pipe(plumber()).
  pipe(rename('styles-all.min.css')).
  pipe(dest(Wlax.css));
// Объединение стилей CSS


const js = () => src(Wlax.aljs).
  pipe(concat('min')).
  pipe(uglify()).
  pipe(rename('scripts-all.min.js')).
  pipe(dest(Wlax.js));


// exports.clean = clear;
exports.styles = css;
exports.mstyles = allcss;
exports.scripts = js;
// exports.all = allf;

exports.build = series(parallel(css, allcss, js));
exports.default = series(parallel(css, allcss, js));

