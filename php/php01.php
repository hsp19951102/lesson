<!--  
php
	1、概念
	php是一种脚本语言，我们可以使用php实现与数据库的交互，搭建一个后台服务
	php可以与html进行混编，可以直接通过一个php文件展示web页面

	2、语法
	php脚本一<?php开头，以?>结尾,不能直接用浏览打开，需要服务

	1）变量
	在php中，变量以$开头，其后是变量的名字，变量名必须以字母或下划线开头，不能以数字开头，只能包含字母、数字、下划线，大小写敏感

	在php中，没有创建变量的命令，变量会在使用时创建

	变量的作用域
	作用域有三种不同的情况
	-局部
	-全局
	使用global关键字访问全局变量；同时，php在名为$GLOBALS的数组中，存储了所有的全局变量，下标为全局变量的名称，比如$GLOBALS['name']
	-静态
	php中，使用static表示一个静态变量
	正常情况下，在函数执行完毕后，会删除其作用域内所有的局部变量，如果我们需要保留某个变量不被删除，可以使用static关键字，以保证变量的生命周期

	2）echo和print
	echo用于输出一个或多个字符串(不带括号)，print只能输出一个
	echo是一个语言结构，有无括号都能用，echo 内容  或 echo (内容)
	echo输出变量，有无引号都行，echo 变量   或  echo '变量'
-->
<?php 
	// 创建变量
	$name = "张三";
	echo "hello world";
	echo "<a href='123'>超链接</a>";
	echo "$name";
	echo "<br>";
	$age = 20;//全局作用域
	function fun(){
		$y = 30;//局部变量
		global $age;//此处说明需要访问全局变量$age
		$num = $y+$age;//如果上一句代码省略，则此处会报错，因为该作用域中不存在$age
		echo "$num";
	}
	fun();
	echo "$age";
	echo "<br>";
	function fun1(){
		$GLOBALS['name'] = '李四';
	}
	fun1();
	echo "$name";

	if (1<2) {
		$a = 120;//与js一致，在if和for中的变量，不受其大括号的限制
	}
	echo "$a";
	echo "<br>";
	function fun2(){
		$x = 1;
		echo "$x";
		$x++;
	}
	fun2();
	echo "<br>";
	fun2();
	echo "<br>";
	fun2();
	echo "<br>";
	function fun3(){
		static $x = 2;//静态变量
		echo "$x";
		$x++;
	}
	fun3();
	echo "<br>";
	fun3();
	echo "<br>";
	fun3();

	$pwd = "123";
	echo "<br>";
	echo $pwd;
	echo ($pwd);
	echo '<br>',$pwd;//输出多个
	print('<br>');
	print 'ziduc';	
?>