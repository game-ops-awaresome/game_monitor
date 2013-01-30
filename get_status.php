<?php
define("MO_URL", 'http://10.48.179.115:88/');//检查端口状态的nginx_lua接口地址



function get_data($keyword){
	// 	echo $keyword." keyword";
	if (is_numeric($keyword)){
		echo $keyword."is numberic..<br>";
		return get_port_check($keyword);
	}else{//非数字变量
		//echo $keyword."is not a number..<br>";
		 $result .="翻译结果: ".language($keyword);
		//echo '<br> translate over.';
		return $result;
	}
}








//请求后端监控状态
function request_by_curl($remote_server,$uri){
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$remote_server.$uri);
//  curl_setopt($ch,CURLOPT_POSTFIELDS,'datapost='.$post_string);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_USERAGENT,"HU-web");
 curl_setopt ($ch, CURLOPT_TIMEOUT, 10 );
 $data = curl_exec($ch);
 if (curl_errno($ch)) {
 	echo 'Errno'.curl_error($ch);
 }
 curl_close($ch);
//return $data;
//print_r(var_dump($data));
 return json_decode($data,true);
 //print_r($data);
}


//获取翻译数据

function language($value){
	$keyfrom = "zacharyhu"; //申请APIKEY时，填表的网站名称的内容  ；注意： $keyFrom 需要是【连续的英文、数字的组合】
	$apikey = "821845801";  //从有道申请的APIKEY
	$qurl = 'http://fanyi.youdao.com/fanyiapi.do?keyfrom='.$keyfrom.'&key='.$apikey.'&type=data&doctype=json&version=1.1&q='.$value;
	$content = @file_get_contents($qurl);
	$data_arr = json_decode($content,true);
	$explains='';
	foreach ($data_arr['basic']['explains'] as $val) {
		$explains .=$val;
	}
	
	$errorcode = $data_arr['errorCode'];
	$trans = '';
 	print_r($data_arr);
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
	return $trans.',翻译:'.$explains.'' ;
}




//监控数据
function get_port_check($keyword){
	$URI='get_port_status?itid='.$keyword;
// 	echo $URI."<br>";
	$data_final=request_by_curl(MO_URL,$URI);
	//$data_final=iconv('GB2312', 'UTF-8//ignore', $data_final);
	$data_str = "";
	//echo var_dump($data_final)."var type";
	if ( $data_final == NULL || $data_final == ""){
		return $data_str = "对不起，无查询结果";
	}else{
		// 	return $data_final;
		$data_str ="id: ".$data_final['item_id']." ,";
		$data_str .="名称: ".$data_final['item_name']." ,";
		$data_str .="主机ip: ".$data_final['item_host']." ,";
		$data_str .="端口: ".$data_final['item_port']." ,";
		$data_str .="状态(1成功0失败): ".$data_final['success']." ,";
		$data_str .= "更新时间: ".$data_final['check_time']." ,";
		if (isset($data_final['item_game_id']) && $data_final['item_game_id'] != '0'){//存在gameId
			// 		foreach ($data_final as $key => $val){
			// 			echo  "foreach..<br>"  ;
			// 			$data_str .= "游戏名称: ".$data_final['item_name']." ,";
			$data_str .= "游戏ID: ".$data_final['gameID']." ,";
			$data_str .= "当前在线/最大在线: ".$data_final['online']." 人,";
			$data_str .= "总人次: ".$data_final['personTime']." ";
			// 		}
			return $data_str;
		}else {
			return $data_str;
		}
	}
	// 	return $data_str='0';	
}


?>