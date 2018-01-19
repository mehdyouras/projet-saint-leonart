
var gulp = require("gulp"),
image = require("gulp-imagemin"),
// pug = require("gulp-pug"),
sass = require("gulp-sass"),
autoprefixer = require("gulp-autoprefixer"),
csso = require("gulp-csso"),
babel = require("gulp-babel"),
concat = require("gulp-concat"),
browserSync = require('browser-sync');

var $    = require('gulp-load-plugins')();

var sassPaths = [
  'bower_components/normalize.scss/sass',
  'bower_components/foundation-sites/scss',
  'bower_components/motion-ui/src'
];

gulp.task('browser-sync', function() {
    browserSync({
        host: '192.168.10.10',
        proxy: "saint-leonart.app",
        files: ['*.php', '*.scss'],
        port: 3001,
        open: false,
    })
    // gulp.watch("*.php").on("change", browserSync.reload);

})


gulp.task('css', function() {
  return gulp.src('src/scss/app.scss')
    .pipe($.sass({
      includePaths: sassPaths,
      outputStyle: 'compressed' // if css compressed **file size**
    })
      .on('error', $.sass.logError))
    .pipe($.autoprefixer({
      browsers: ['last 2 versions', 'ie >= 9']
    }))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.stream());
});

// --- Task for images
gulp.task("images", function() {
gulp.src("src/img/**", !"src/img/*.db")
    .pipe(image([
        image.jpegtran({ progressive: true }),
        image.optipng({ optimizationLevel: 5 })
    ]))
    .pipe(gulp.dest("assets/img"));
});

// --- Task for PHP

gulp.task("php", function() {
gulp.src("src/**/*.php")
    .pipe(gulp.dest("."));
});

// // --- Task for pug
// gulp.task("html", function() {
// gulp.src(["src/pug/**/*.pug", "!src/pug/partials/**/*.pug"])
//     .pipe(pug({
//         pretty: false
//     }))
//     .pipe(gulp.dest("assets/"));
// });
// --- Task for styles
// gulp.task("css", function() {
// gulp.src("src/sass/**/*.scss")
//     .pipe(sass().on("error", sass.logError))
//     .pipe(autoprefixer())
//     .pipe(csso())
//     .pipe(gulp.dest("assets/css"));
// });
// --- Task for js
gulp.task("js", function() {
gulp.src("src/js/**/*.js")
    .pipe(babel({
        only : "app.js",
    }))
    .pipe(concat('app.js'))
    .pipe(gulp.dest("assets/js"));
gulp.src("node_modules/jquery/dist/jquery.slim.min.js").
    pipe(gulp.dest("assets/js"));
gulp.src("node_modules/bootstrap/dist/js/bootstrap.bundle.min.js").
    pipe(gulp.dest("assets/js"));
});

// -- Task for fonts
gulp.task("fonts", function() {
gulp.src("src/fonts/**")
    .pipe(gulp.dest("assets/fonts"));
});

// --- Watch tasks
gulp.task("watch", function() {
gulp.watch("src/img/**", ["images"]);
gulp.watch("src/scss/**", ["css"]);
gulp.watch("src/pug/**", ["html"]);
gulp.watch("src/js/**", ["js"]);
gulp.watch("src/*.php", ["php"]);
});
// --- Aliases
gulp.task("default", ["browser-sync", "css", "js", "images", "fonts","php"]);
gulp.task("work", ["default", "watch"]);