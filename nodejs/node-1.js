/*
node.js
1、概念
	node.js是一个搭建在谷歌js解释器上的平台，主要用于搭建后台环境，同样是使用js语言
	node.js其实就是运行在后端的js；
	node.js最核心的特点就是模块(具有独立功能的，可单独提出来的代码块)化，
2、优势
	-构建js之上，开发人员了解一种语言就可以继续前后端同时开发
	-使用json数据格式
	-高效的事件轮询和异步I/O(输入输出)
3、node.js的第一个程序
	创建一个js文件，直接输出hello world!
	进入cmd，通过cd(切换路径)命令进入js所在的文件夹，通过node 文件名.js进行运行
4、第一个后台程序

 */
// console.log('hello world!')
// 首先载入http模块，通过require进行引入
var http = require('http');
/*使用createServer方法，创建一个服务器，然后通过该服务器对象的listen方法，设置监听
的端口号
*/
http.createServer(function(request,response){
	// 此处函数体，主要用于设置请求头及返回的内容
	// 发送头部
	// http状态码：200表示访问成功
	// 返回数据的类型
	response.writeHead(200,{'content-type':"text/plain;charset=utf-8"});
	//返回数据
	response.end("你好，大兄弟！1111");
}).listen(8081);//监听主机的8081端口，也就是程序运行后，可以通过http://localhost:8081/进行访问
