<?php
function language($value){
	$keyfrom = "zacharyhu"; //申请APIKEY时，填表的网站名称的内容  ；注意： $keyFrom 需要是【连续的英文、数字的组合】
	$apikey = "821845801";  //从有道申请的APIKEY
	$qurl = 'http://fanyi.youdao.com/fanyiapi.do?keyfrom='.$keyfrom.'&key='.$apikey.'&type=data&doctype=json&version=1.1&q='.$value;
	$content = @file_get_contents($qurl);
	$data_arr = json_decode($content,true);
	$errorcode = $data_arr['errorCode'];
	$trans = '';
	if(isset($errorcode)){
		switch ($errorcode){
			case 0:
				$trans = $data_arr['translation']['0'];
				break;
			case 20:
				$trans = '要翻译的文本过长';
				break;
			case 30:
				$trans = '无法进行有效的翻译';
				break;
			case 40:
				$trans = '不支持的语言类型';
				break;
			case 50:
				$trans = '无效的key';
				break;
			default:
				$trans = '出现异常';
				break;
		}
	}
	return $trans;
}
echo language('世界你好');