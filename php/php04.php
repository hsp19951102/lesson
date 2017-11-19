<!--  
php连接数据库

-->
<?php  
	// 创建连接 mysqli_connect('服务器IP地址',"数据库账号","密码");
	$con = mysqli_connect('localhost',"root","");
	// 判断连接状态
	if (mysqli_connect_errno($con)) {
		echo "连接数据库失败".mysqli_connect_error();
	}
	// 创建数据库:mysqli_query用于执行数据库操作语句
	mysqli_query($con,"create database if not exists my_db");//如果数据库不存在，则创建，my_db表示库名

	// 首先选择要操作的数据库
	mysqli_select_db($con,'my_db');
	// 创建表
	$res = mysqli_query($con,"create table if not exists table1 (
			name varchar(15),
			age int
		)");
	if (!$res) {
		echo "创建表失败".mysqli_error();
	}else {
		echo "创建成功";
	}
	mysqli_query($con,"set name 'UTF8'");
	// 增
	// mysqli_query($con,"insert into table1 (name, age) values ('lisi',10)");

	// 删除操作
	// mysqli_query($con,"delete from table1 where age > 10");
	mysqli_query($con,"delete from table1 where age > 10 and name='zhaoliu'");

	// 更新操作
	mysqli_query($con,"update table1 set name='abc' where age=10");

	// 查询操作
	$res1 = mysqli_query($con,"select * from table1");//$res1是查询出的每一条数据的结果集，一条数据包含了所有字段
	while ($row = mysqli_fetch_array($res1)) {
		echo "<br>",$row['name']."-".$row['age'];
	}

	//按条件查询
	$res2 = mysqli_query($con,"select * from table1 where age < 15");
	while ($row = mysqli_fetch_array($res2)) {
		echo "<br>",$row['name']."-".$row['age'];
	}

	// 按条件只查询出某些字段
	$res2 = mysqli_query($con,"select name from table1 where age < 15");
	while ($row = mysqli_fetch_array($res2)) {
		echo "<br>",$row['name'];
	}

	// 处理登录
	$name = $_REQUEST['username'];
	$pwd = $_REQUEST['password'];
	// 到数据库中查询是否有匹配用户名和密码的数据
	$res3 = mysqli_query($con,"select * from user where username='$name' and pwd='$pwd'");
	echo mysqli_fetch_array($res2);
	while ($row = mysqli_fetch_array($res2)) {
		echo "登录成功";
	}
?>