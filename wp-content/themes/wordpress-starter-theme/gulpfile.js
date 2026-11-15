const { src, dest, watch, series, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const browserSync = require('browser-sync').create();
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const plumber = require('gulp-plumber');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

const config = require('./projectConfig.json');

const paths = {
  styles: {
    src: './assets/scss/main.scss',
    watch: './assets/scss/**/*.scss',
    dest: './assets/dist/'
  },
  scripts: {
    src: config.srcScripts,
    watch: './assets/scripts/*.js',
    dest: './assets/dist/'
  },
  php: ['**/*.php']
};

function styles() {
  return src(paths.styles.src)
    .pipe(plumber({
      errorHandler: function (err) {
        console.error(err.message);
        this.emit('end');
      }
    }))
    .pipe(sourcemaps.init())
    .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
    .pipe(autoprefixer({ cascade: false }))
    .pipe(rename({ suffix: '.min' }))
    .pipe(sourcemaps.write('.'))
    .pipe(dest(paths.styles.dest))
    .pipe(browserSync.stream());
}

function scripts() {
  return src(paths.scripts.src)
    .pipe(plumber({
      errorHandler: function (err) {
        console.error(err.message);
        this.emit('end');
      }
    }))
    .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(concat('main.min.js'))
    .pipe(sourcemaps.write('.'))
    .pipe(dest(paths.scripts.dest))
    .pipe(browserSync.stream());
}

function serve(done) {
  browserSync.init({
    proxy: config.devDomain,
    notify: false,
    open: false,
    port: 5050,
    files: paths.php,
    snippetOptions: {
      whitelist: ['/wp-admin/admin-ajax.php'],
      blacklist: ['/wp-admin/**']
    }
  });

  watch(paths.styles.watch, styles);
  watch(paths.scripts.watch, scripts);
  watch(paths.php).on('change', browserSync.reload);
  done();
}

exports.styles = styles;
exports.scripts = scripts;
exports.serve = serve;
exports.watch = series(parallel(styles, scripts), serve);
exports.default = exports.watch;