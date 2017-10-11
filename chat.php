<?php 
header('content-type:text/html; charset= utf-8');


	// $_GET['message'];
	// $arr = array(
	// 		'信不信一脚踢死你',
	// 		'你好(⊙o⊙)哦',
	// 		'O(∩_∩)O~',
	// 		'老地方见',
	// 		'哪凉快哪待着去,',
	// 		'滚'
	// 	);
	// echo $arr[array_rand($arr,1)];


	// $str=file_get_contents("info/message.json");
	// $arr=json_decode($str);
	// echo $arr[array_rand($arr,1)];

	
	// $message=$_GET["message"];
	// switch ($message) {
	// 	case 'hello':
	// 		$hello=array(
	// 			"hello",
	// 			"hei"
	// 		);
	// 		echo $hello[array_rand($hello,1)];
	// 		break;
	// 	case '中午去哪吃饭':
	// 		$eat=array(
	// 			"xxx",
	// 			"套餐",
	// 			"盖浇饭"
	// 		);
	// 		echo $eat[array_rand($eat,1)];
	// 		break;
	// 	case '美女':
	// 		$speak=array(
	// 			"滚",
	// 			"流氓",
	// 			"什么事",
	// 			"咋了"
	// 		);
	// 		echo $speak[array_rand($speak,1)];
	// 		break;
	// 	default:
	// 		echo "德玛西亚";
	// 		break;
	// }

	
	$message=$_GET["message"];
	switch ($message) {
		case 'hello':
			$str=file_get_contents("info/message.json");
			$arr=json_decode($str);
			echo $arr[array_rand($arr,1)];
			break;
		
		default:
			echo "德玛西亚";
			break;
	}
 ?>