<!--  
php
	1、数据类型
	字符串、整型、浮点型、数组、对象
	1）字符串
	-strlen() 该函数用于获取字符串的长度，一个中文字符占三个长度
	-strpos() 该函数用于检索字符串内是否包含指定的子串
	2、运算符
	四则运算（略）
	注意，在php中四则运算中的字符串会自动转换成数字类型，如果无法转换，则会转换成0
	字符串拼接：使用“.”进行拼接，.=拼接赋值
	3、分支语句
	4、循环语句
	foreach循环（只适用于数组）
	5、函数（略）
	6、数组
	1）数组定义
	数组名=array(元素)
	或
	数组名[下标]=值
	可以通过count()函数获取数组的长度
	
	关联数组：数组的元素为键值对，元素的下标为关键字
	定义方式：
	$arr = array('key'=>'值');
	或
	$arr['key']='值';
	使用foreach遍历关联数组
	foreach(数组名 as $key => $value)

	其中$key表示数组元素中的关键字，$vaule表示关键字所对应的值
-->
<?php  
	$name = "张三，";
	$a = 10;

	$len = strlen($name);
	echo "$len";
	echo "<br>";
	$s = "abnsj2oisj";
	echo strpos($s, 'sj');
	echo "<br>";
	$b = "20";
	echo $b/$a;
	echo "<br>";

	echo "123"."abc"."89";
	echo "<br>";
	$b.="bcd";
	echo "$b <br>";

	$arr = array('a','b','c');
	$arr[10]='bax';
	echo $arr[12];//下标越界不会报错，只会提示该下标处的元素是一个未定义的
	echo "<br>";
	$s1[0] = 'abc';
	$s1[10] = '18290';
	echo $s1[10],count($s1);

	for ($i=0; $i < count($s1); $i++) { 
		echo "<br>",$s1[$i];
	}

	$arr1 = array('name'=>"张三",'age'=>10,'sex'=>"男");//三个元素
	echo "<br>",count($arr1),'<br>',$arr1['age'];

	// 关联数组的遍历，使用foreach
	foreach ($arr1 as $key => $value) {
		echo "<br>",$key."=".$value;
	}
?>