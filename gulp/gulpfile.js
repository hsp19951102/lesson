var gulp = require('gulp');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minifyHtml = require('gulp-minify-html');

var concat = require('gulp-concat')

var imagemin = require('gulp-imagemin')

// 创建任务
gulp.task('hello',function() {
	console.log('你好，广陵学院');
});
// 压缩js
gulp.task('mintask',function(){
	gulp.src('./app/js/1.js')//需要压缩的文件的路径
	.pipe(uglify())//任务执行的操作，压缩
	.pipe(rename('1.min.js'))//重新命名，可以省略
	.pipe(gulp.dest('./dist/js'));//任务执行后，新文件存放的位置,如果文件夹不存在，会自动创建
});
// 压缩html
gulp.task('minHtml',function(){
	gulp.src('./app/html/1.html')
	.pipe(minifyHtml())
	.pipe(gulp.dest('dist/html'));
});

// 拼接js
gulp.task('jsconcat',function(){
	gulp.src('./app/js/1.js')//被合并的js文件路径
	.pipe(concat('two.js'))//合并后文件的名字
	.pipe(gulp.dest('dist/js'))
})

// 拼接——压缩——重命名
gulp.task('moreTask',function(){
	gulp.src('./app/js/*.js')//被合并的js文件路径
	.pipe(concat('two.js'))//合并后文件的名字
	.pipe(uglify())
	.pipe(rename('two.min.js'))
	.pipe(gulp.dest('dist/js'))
})

//图片压缩
gulp.task('imgMin',function(){
	gulp.src('./app/img/*')
	.pipe(imagemin())
	.pipe(gulp.dest('./dist/images'))
});

//创建一个总任务，通过一个任务，来同时执行多个操作
gulp.task('default',['imgMin','moreTask','minHtml'])