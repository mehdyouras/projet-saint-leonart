var gulp = require("gulp"),
    image = require("gulp-imagemin"),
    pug = require("gulp-pug"),
    sass = require("gulp-sass"),
    autoprefixer = require("gulp-autoprefixer"),
    csso = require("gulp-csso"),
    babel = require("gulp-babel"),
    concat = require("gulp-concat");

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

// --- Task for pug
gulp.task("html", function() {
    gulp.src(["src/pug/**/*.pug", "!src/pug/partials/**/*.pug"])
        .pipe(pug({
            pretty: false
        }))
        .pipe(gulp.dest("assets/"));
});
// --- Task for styles
gulp.task("css", function() {
    gulp.src("src/sass/**/*.scss")
        .pipe(sass().on("error", sass.logError))
        .pipe(autoprefixer())
        .pipe(csso())
        .pipe(gulp.dest("assets/css"));
});
// --- Task for js
gulp.task("js", function() {
    gulp.src("src/js/**/*.js")
        .pipe(babel({
            only : "script.js",
        }))
        .pipe(concat('script.js'))
        .pipe(gulp.dest("assets/js"));
    gulp.src("node_modules/jquery/dist/jquery.slim.min.js").
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
    gulp.watch("src/sass/**", ["css"]);
    gulp.watch("src/pug/**", ["html"]);
    gulp.watch("src/js/**", ["js"]);
    gulp.watch("src/*.php", ["php"]);
});
// --- Aliases
gulp.task("default", ["css", "html", "js", "images", "fonts","php"]);
gulp.task("work", ["default", "watch"]);