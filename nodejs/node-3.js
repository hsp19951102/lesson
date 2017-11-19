/*
web服务器
	web服务器是处理由http客户端发送的请求，根据请求返回相关的数据
	1、常见网络服务器
	Apache、Tomcat
	2、web服务器架构
	-客户端，包括由web浏览器、移动端浏览器或应用程序
	-服务器：用于处理客户端请求（服务器软件，比如Apache）
	-业务：根据前端请求，所需要做的数据处理逻辑(后台代码)
	-数据：数据库
	3、node创建web服务
	使用node搭建web服务需要引入http模块/url模块及querystring模块
*/
var http = require('http');
var fs = require('fs')
var url = require('url');
var query = require('querystring');
http.createServer(function(req,res){
	// 解析url，得到url中的路径
	var pathName = url.parse(req.url).pathname;
	console.log(pathName);
	fs.readFile(pathName.substr(1),function(err,data){
		if (err) {
			res.writeHead(404,{'Content-Type':"text/html;charset=utf-8"})
		}else{
			res.writeHead(200,{'Content-Type':"text/html;charset=utf-8"});
			console.log(data.toString());

			// 读取成功后，可以通过res的write方法写入页面中
			res.write(data.toString());
		}

		res.end();
	});
}).listen(8081);
console.log("running at http://127.0.0.1:8081/")