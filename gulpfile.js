/* eslint-disable camelcase */
const {
  dest,
  parallel,
  series,
  src
} = require('gulp'),
  concat = require('gulp-concat'),
  del = require("del"),
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
  scss: './wp-content/themes/LevelUp/assets/scss/*.scss',
  aljs: [
    './wp-content/themes/LevelUp/js/*.js'
  ],
  pub: './wp-content/themes/LevelUp/dist/',
  css: './wp-content/themes/LevelUp/dist',
  allcss: './wp-content/themes/LevelUp/css/*.css',
  newcss: './wp-content/themes/LevelUp/css/',
  js: './wp-content/themes/LevelUp/dist'
}

// const clear = () => src('./dist', {read: false}).pipe(gcln());
const clear = () => del(Wlax.pub).then((paths) => {
  // console.log('Deleted files and folders:\n', paths.join('\n'));
});

// const allf = () => src(Wlax.all, { base: './wp-content/themes/LevelUp/'}).
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
  pipe(plumber()).
  pipe(rename('styles-all.min.css')).
  pipe(dest(Wlax.css));
// Объединение стилей CSS

const js = () => src(Wlax.aljs).
  pipe(concat('min')).
  pipe(rename('scripts-all.min.js')).
  pipe(dest(Wlax.js));
exports.clean = clear;
exports.styles = css;
exports.mstyles = allcss;
exports.scripts = js;
// exports.all = allf;

exports.build = series(clear, parallel(css, allcss, js));
exports.default = series(clear, parallel(css, allcss, js));

