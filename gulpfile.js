var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var flatten = require('gulp-flatten');
var header = require('gulp-header');
var package = require('./package.json');
var sourcemaps = require('gulp-sourcemaps');


var paths = {
    //input: ['src/**/*', 'atomic-docs/scss/*'],
    //output: 'dist/',
    input: ['atomic-docs/scss/**/*'],
    scripts: {
        input: 'src/js/*',
        lint: 'src/js/**',
        output: 'dist/js/'
    },
    styles: {
        input: 'src/sass/**/*.{scss,sass}',
        output: 'dist/css/'
    },
    svgs: {
        input: 'src/svg/*',
        output: 'dist/svg/'
    },
    images: {
        input: 'src/img/*',
        output: 'dist/img/'
    },
    static: {
        input: 'src/static/*',
        output: 'dist/'
    },
    test: {
        input: 'src/js/**/*.js',
        karma: 'test/karma.conf.js',
        spec: 'test/spec/**/*.js',
        coverage: 'test/coverage/',
        results: 'test/results/'
    },
    docs: {
        input: 'src/docs/*.{html,md,markdown}',
        output: 'docs/',
        templates: 'src/docs/_templates/',
        assets: 'src/docs/assets/**'
    },
    atomic_docs:{
        input: 'atomic-docs/scss/main.scss',
        output: 'atomic-docs/css/',
    }
};



// Process, lint, and minify Sass files
gulp.task('build:atomic', function() {

    

    return gulp.src(paths.atomic_docs.input)
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass({
            outputStyle: 'expanded',
            sourceComments: true
        }))
        .pipe(flatten())
        .pipe(prefix({
            browsers: ['last 2 version', '> 1%'],
            cascade: true,
            remove: true
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(paths.atomic_docs.output))
        // .pipe(rename({ suffix: '.min' }))
        // .pipe(minify({
        //     discardComments: {
        //         removeAll: true
        //     }
        // }))
        // .pipe(header(banner.min, { package : package }))
        // .pipe(gulp.dest(paths.styles.output))
        // .pipe(livereload());
});

gulp.task('listen', function () {
  //  livereload.listen();
    gulp.watch(paths.input, ['default']);
});


gulp.task('watch', [
    'listen',
    'default'
]);


gulp.task('compile', [
    // 'lint:scripts',
    // 'clean:dist',
    // 'build:scripts',
    // 'build:styles',
    'build:atomic',
    // 'build:images',
    // 'build:static',
    // 'build:svgs'
]);


gulp.task('default', [
    'compile',
   // 'docs'
]);


