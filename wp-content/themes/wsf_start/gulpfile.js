var syntax        = 'sass'; // Syntax: sass or scss;

var gulp          = require('gulp'),
		gutil         = require('gulp-util' ),
		sass          = require('gulp-sass'),
		browserSync   = require('browser-sync'),
		concat        = require('gulp-concat'),
		uglify        = require('gulp-uglify'),
		cleancss      = require('gulp-clean-css'),
		rename        = require('gulp-rename'),
		autoprefixer  = require('gulp-autoprefixer'),
		notify        = require("gulp-notify"),
		rsync         = require('gulp-rsync');

gulp.task('browser-sync', function() {
	browserSync({
		proxy: 'http://dev.wsf.com.ua/',
		notify: false
		// open: false,
		// online: false, // Work Offline Without Internet Connection
		// tunnel: true, tunnel: "projectname", // Demonstration page: http://projectname.localtunnel.me
	})
});

// gulp.task('imagemin', function() {
// 	return gulp.src('app/img/**/*')
// 	.pipe(cache(imagemin()))
// 	.pipe(gulp.dist('dist/img'));
// })

gulp.task('styles', function() {
	return gulp.src('app/'+syntax+'/**/*.'+syntax+'')
	.pipe(sass({ outputStyle: 'expanded' }).on("error", notify.onError()))
	.pipe(rename({ suffix: '.min', prefix : '' }))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cleancss( {level: { 1: { specialComments: 0 } } })) // Opt., comment out when debugging
	.pipe(gulp.dest('app/css'))
	.pipe(browserSync.stream())
});

gulp.task('js', function() {
	return gulp.src([
		'./app/libs/jquery/dist/jquery.min.js',
		'./app/libs/jQuery.mmenu/dist/jquery.mmenu.all.js',
		'./app/libs/slick-carousel/slick/slick.min.js',
		'./app/libs/jQuery.equalHeights/jquery.equalheights.min.js',
		'./app/libs/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js',
		'./app/libs/plugins-scroll/plugins-scroll.js',
		'./app/libs/magnific-popup/jquery.magnific-popup.min.js',
		'./app/libs/fancybox/jquery.fancybox.min.js',
		'./app/libs/aos/aos.js',
		'./app/js/common.js', // Always at the end
		])
	.pipe(concat('scripts.min.js'))
	// .pipe(uglify()) // Mifify js (opt.)
	.pipe(gulp.dest('./app/js'))
	.pipe(browserSync.reload({ stream: true }))
});

gulp.task('rsync', function() {
	return gulp.src('./app/**')
	.pipe(rsync({
		root: '.app/',
		hostname: 'username@yousite.com',
		destination: 'yousite/public_html/',
		// include: ['*.htaccess'], // Includes files to deploy
		exclude: ['**/Thumbs.db', '**/*.DS_Store'], // Excludes files from deploy
		recursive: true,
		archive: true,
		silent: false,
		compress: true
	}))
});

gulp.task('watch', ['styles', 'js', 'browser-sync'], function() {
	gulp.watch('app/'+syntax+'/**/*.'+syntax+'', ['styles']);
	gulp.watch(['libs/**/*.js', 'app/js/common.js'], ['js']);
	gulp.watch('themes/wsf_start/**/*.php', browserSync.reload)
});

gulp.task('default', ['watch']);
