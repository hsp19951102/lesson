/*
node处理get和post请求
需要用到http、url及querystring模块
*/
var http = require('http');
var url = require('url');
var query = require('querystring');
var params = {};
http.createServer(function(request,response){
	response.writeHead(200,{"content-type":"text/json;charset=utf-8"});
	
	//判断请求方式(get/post),大写
	if (request.method == 'GET') {
		// 如果是get方式，直接解析url
		params = url.parse(request.url,true).query;//解析url中的参数，并形成对象
		console.log(params);
		returnData(response);
	}else{
		var postData = '';//声明变量用于接收参数
		// 添加data监听，用于处理接收到的参数，表示正在接收参数
		request.addListener('data',function(pData){
			postData += pData;
			console.log(pData);
		});
		//添加end监听，表示参数接收完毕
		request.addListener('end',function(){
			// 接收完毕后，将参数的字符串转换成js对象
			params = query.parse(postData);
			returnData(response);
		})
	}
	
}).listen(8081);
console.log("run at http://127.0.0.1:8081")
function returnData(response){
	// 如果用户名 = abc,密码==123，则登录成功，否则登录失败
	if (params.uname == "abc" && params.pwd == 123) {
		response.end("登录成功")
	}else{
		response.end("登录失败")
	}
	// response.end(JSON.stringify(params));//返回数据,end中只能放字符串
}