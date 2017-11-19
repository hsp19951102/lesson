/*
一、文件服务
	文件服务需要使用fs模块，该模块包含同步和异步两种方式
	1、文件读取
	首先引入fs模块
	创建一个json格式的文件
*/
var fs = require('fs');//引入文件模块
//异步读取：使用readFile，第一个参数表示要读取的文件路径，第二个参数是回调函数,回调
//函数包含俩参数，一个表示错误信息，一个表示读取的结果
fs.readFile("data.json",function(err,data){
	if (err) {
		console.log(err)
	}else{
		console.log(data.toString());
	}
});
fs.readFile("data1.json",function(err,data){
	if (err) {
		console.log(err)
	}else{
		console.log("data1:"+data.toString());
	}
});
console.log('hello');
//同步方式读取，使用readFileSync方法读取，同步会阻塞线程
//有一个参数，表示文件的路径
var data2 = fs.readFileSync('data.json');
console.log("同步data2-"+data2.toString());
console.log('-----');

// 文件的写入
//语法：fs.writeFile(文件名,数据,回调函数)；文件的写入是异步操作
//如果文件名不存在，则会创建；如果文件已存在，则内容会被覆盖
// fs.writeFile('my.text',"这是第二次写入",function(err){

// });
//实现文件的写入，需要保留原有的内容
//先读取
fs.readFile('my.text',function(err,data){
	//读取完成后，再将原内容与新内容拼接，最后写入
	fs.writeFile('my.text',data+"拼接新输入的内",function(){
		
	})
})
