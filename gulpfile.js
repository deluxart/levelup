/* eslint-disable camelcase */
const {
  dest,
  parallel,
  series,
  src
} = require('gulp'),
  concat = require('gulp-concat'),
  del = require("del"),
  // gcln = require('gulp-clean'),
  plumber = require('gulp-plumber'),
  rename = require('gulp-rename'),
  sass = require('gulp-sass'),
  cleanCSS = require('gulp-clean-css'),
  purge = require('gulp-css-purge');

const Wlax = {
  all: [
    './wp-content/themes/LevelUp/*.*',
    './wp-content/themes/LevelUp/fonts/*.*',
    './wp-content/themes/LevelUp/img/**/*.*',
    '!./wp-content/themes/LevelUp/**/*.scss',
    '!./wp-content/themes/LevelUp/*.scss',
    '!./wp-content/themes/LevelUp/css/*.css',
    '!./wp-content/themes/LevelUp/**/*.js'
  ],
  scss: './wp-content/themes/LevelUp/css/*.scss',
  // scss: './wp-content/themes/LevelUp/css/main.scss',
  // eslint-disable-next-line sort-keys
  aljs: [
    './wp-content/themes/LevelUp/js/*.js'
  ],
  pub: './wp-content/themes/LevelUp/min/',
  // eslint-disable-next-line sort-keys
  css: './wp-content/themes/LevelUp/min/css',
  allcss: './wp-content/themes/LevelUp/css/*.css',
  js: './wp-content/themes/LevelUp/min/js'
}

// const clear = () => src('./dist', {read: false}).pipe(gcln());
const clear = () => del(Wlax.pub).then((paths) => {
  console.log('Deleted files and folders:\n', paths.join('\n'));
});

// const allf = () => src(Wlax.all, { base: './wp-content/themes/LevelUp/'}).
// pipe(dest(Wlax.pub));



const css = () => src(Wlax.scss).
  pipe(concat('min')).
  pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError)).
  pipe(rename('all.min.css')).
  pipe(dest(Wlax.css));

// Объединение стилей CSS
const allcss = () => src(Wlax.allcss).
  pipe(concat('min')).
  pipe(cleanCSS({compatibility: 'ie8'})).
  pipe(plumber()).
  pipe(rename('all2.min.css')).
  pipe(dest(Wlax.css));
// Объединение стилей CSS


const js = () => src(Wlax.aljs).
  pipe(concat('min')).
  pipe(rename('scripts.min.js')).
  pipe(dest(Wlax.js));
exports.clean = clear;
exports.styles = css;
exports.mstyles = allcss;
exports.scripts = js;
// exports.all = allf;

// exports.build = series(clear, parallel(css, allcss, js, allf));
// exports.default = series(clear, parallel(css, allcss, js, allf));

exports.build = series(clear, parallel(css, allcss, js));
exports.default = series(clear, parallel(css, allcss, js));

