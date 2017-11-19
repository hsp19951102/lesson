<?php  

	// 处理登录
	$name = $_REQUEST['username'];
	$pwd = $_REQUEST['password'];

	// 创建连接 mysqli_connect('服务器IP地址',"数据库账号","密码");
	$con = mysqli_connect('localhost',"root","");
	// 判断连接状态
	if (mysqli_connect_errno($con)) {
		echo "连接数据库失败".mysqli_connect_error();
	}
	// 首先选择要操作的数据库
	mysqli_select_db($con,'my_db');
	// 到数据库中查询是否有匹配用户名和密码的数据
	$res3 = mysqli_query($con,"select * from user where username='$name' and pwd='$pwd'");
	while ($row = mysqli_fetch_array($res3)) {
		echo "<br>","登录成功";
	}
?>