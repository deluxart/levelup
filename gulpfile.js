/* eslint-disable no-console */
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
  sass = require('gulp-sass');

const Wlax = {
  all: [
    './wp-content/themes/LevelUp/*.*',
    './wp-content/themes/LevelUp/fonts/*.*',
    './wp-content/themes/LevelUp/img/**/*.*',
    '!./wp-content/themes/LevelUp/**/*.scss',
    '!./wp-content/themes/LevelUp/*.scss',
    '!./wp-content/themes/LevelUp/**/*.js'
  ],
  // scss: './src/**/*.scss',
  scss: './wp-content/themes/LevelUp/css/main.scss',
  // eslint-disable-next-line sort-keys
  aljs: [
    './wp-content/themes/LevelUp/js/*.js'
  ],
  pub: 'dist/',
  // eslint-disable-next-line sort-keys
  css: './dist/css',
  js: './dist/js'
};
// const clear = () => src('./dist', {read: false}).pipe(gcln());
const clear = () => del(Wlax.pub).then((paths) => {
  console.log('Deleted files and folders:\n', paths.join('\n'));
});

const allf = () => src(Wlax.all, {base: './src'}).
pipe(dest(Wlax.pub));

const css = () => src(Wlax.scss).
pipe(concat('dist')).
pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError)).
pipe(rename('all.min.css')).
pipe(dest(Wlax.css));

const js = () => src(Wlax.aljs).
pipe(concat('dist')).
pipe(plumber({errorHandler: console.log})).
pipe(rename('nd.bild.js')).
pipe(dest(Wlax.js));
exports.clean = clear;
exports.all = allf;
exports.styles = css;
exports.scripts = js;
exports.all = allf;

exports.build = series(clear, parallel(allf, css, js));
exports.default = series(clear, parallel(allf, css, js));
