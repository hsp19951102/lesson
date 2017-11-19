<!--  
1、数组的运算
	1）+  联合，两个数组相加
	例如：a3=a1+a2
	a3[下标]=a1[下标];如果a1在该下标处没有值，则再去a2取，也就是a3[下标]=a2[下标]，知道都取不到值
	如果是关联数组，重复的key会被覆盖

	2）== 相等
	普通数组，内容和顺序一样，则为true
	关联数组：key及其对应值内容一样，则为true，不收顺序影响
	3）=== 全等
	普通数组，内容、类型和顺序一样，则为tru
	关联数组：key及其对应值内容、类型一样，且键值对顺序一样，则为true
2、超全局变量
	不需要使用global获取，可以在任意地方直接使用
	$_REQUEST，用于获取前端发送的请求参数
	$_GET，用于获取get请求的参数
	$_POST，获取post请求中的参数
	$_FILE，获取上传的文件
-->
<?php  
	$arr = array('a','b','dcd');
	$arr1 = array('b','c','1','ee');
	$arr2 = $arr+$arr1;
	echo count($arr2),'<br>';

	for ($i=0; $i < count($arr2); $i++) { 
		echo $arr2[$i],'<br>';
	}

	$arr3 = array('a'=>'123','b'=>"abc");
	$arr4 = array('b'=>"hhh",'c'=>"123");
	$arr5 = $arr3+$arr4;
	echo count($arr5);
	foreach ($arr5 as $key => $value) {
		echo "<br>",$key.":".$value;
	}

	$a1 = array(1,2);
	$a2 = array(1,2);
	echo "<br>",$a1==$a2;
	$a3 = array("a"=>'123',"b"=>"abx");
	$a4 = array("a"=>'abx',"b"=>"123");
	echo "<br>",$a3==$a4;

	$a11 = array(1,2);
	$a21 = array(1,"2");
	echo "<br>三等：",$a11===$a21;

	$a5 = array("a"=>'123',"b"=>"abx");
	$a6 = array("a"=>'123',"b"=>"abx");
	echo "<br>关联：",$a5===$a6;

	$pwd = $_REQUEST['password'];//此处中括号中的字符串，表示访问接口时要传递的参数名
	$pwd = $_REQUEST['username'];
	echo "<br>",$pwd;
?>