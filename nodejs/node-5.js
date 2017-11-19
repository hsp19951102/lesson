/*
node操作mysql
首先，node要访问MySQL，需要安装mysql模块
使用npm install mysql
 */
// 先引入mysql模块
var mysql = require('mysql');
//创建连接，用于连接数据库
var connection = mysql.createConnection({
	host:"127.0.0.1",//数据库所在的主机地址，可以是ip也可以是域名
	user:"root",//数据库的用户名，默认root
	password:"",//密码，默认为空
	port:"3306",//端口号，默认3306
	database:"user"//需要连接的数据库的名字
});
// 连接数据库
connection.connect(function(err,res){
	if (err) {
		console.log('连接失败');
		return;
	}
	console.log('连接成功');
});
// 数据库增、删、该、查
//插入操作
//声明插入语句
var sql = "insert into student (name,pwd,email) values(?,?,?)";
//要插入的值
var values = ["王艺","123","11@11.com"];
// 执行操作
// connection.query(sql,values,function(err,res){
// 	if (err) {
// 		console.log('插入失败')
// 	}else{
// 		console.log('插入成功')
// 	}
// });

// 删除操作
// 删除语句
// var delSql = "delete from student where name=?";
// var delValue = ['lisi'];
// connection.query(delSql,delValue,function(){

// });

// 更新操作
// 更新语句
var upSql = "update student set name = ?,email = ? where pwd = 111";
var upValue = ['大黄',"a@query"];
connection.query(upSql,upValue,function(){

});

// 查询
var qStr = "select * from student";
connection.query(qStr,function(err,rows,fields){
	if (err) {

	}else{
		console.log(rows[1].name);
	}
})
// 条件查询
var qStr1 = "select * from student where name = ?";
var qValue = ['王艺'];
connection.query(qStr1,qValue,function(err,rows,fields){
	if (err) {

	}else{
		console.log(rows);
	}
})

// 查询某字段
var qStr2 = "select name from student where name = ?";
connection.query(qStr1,qValue,function(err,rows,fields){
	if (err) {

	}else{
		console.log(rows);
	}
})