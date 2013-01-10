<?php
define("MO_URL", 'http://218.108.132.10/');
//php curl 方法
/**
 * Curl版本
 * 使用方法：
 * $post_string = "app=request&version=beta";
 * request_by_curl('http://host/restServer.php',$post_string);
 */
function request_by_curl($remote_server){
 $ch = curl_init();
 curl_setopt($ch,CURLOPT_URL,$remote_server);
//  curl_setopt($ch,CURLOPT_POSTFIELDS,'datapost='.$post_string);
 curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch,CURLOPT_USERAGENT,"HU-web");
 curl_setopt ($ch, CURLOPT_TIMEOUT, 10 );
 $data = curl_exec($ch);
 if (curl_errno($ch)) {
 	echo 'Errno'.curl_error($ch);
 }
 curl_close($ch);
//  return $data;
//  echo $data;
// var_dump($data);
// echo "<br>";
// var_dump($data);
// echo "start json decode<br>";
return json_decode($data,true);
// var_dump($data_arr);
// print_r($data_arr);
// return $data_arr;
}
 
$URI='game_port_check';
$remote_server=MO_URL.$URI;
// echo $remote_server;
$arr_result=request_by_curl($remote_server);
// print_r($arr_result);
/*
 * $arr_result数组下标：
 * personTime 累计人次
 * coin    入座游戏点门槛
 * online  在线人数150/216  目前/最大
 * state  状态 +OK  服务状态--正常
 * serverID 服务编号
 * timeout  超时时间
 * gameID   游戏编号
 * 重组3个值   max_online、cur_online、state(1成功、0失败)
 * 
 */
//

/*
 * 判断并获取在线人数，分隔当前在线和最大在线人数
 */
$arr_result['CUR_Online']='0';
$arr_result['MAX_Online']='0';
if (isset($arr_result['online'])){
// 	echo "</br>   the online data : ".$arr_result['online'];
	$Online_arr=explode('/', $arr_result['online']);
	$arr_result['CUR_Online']=$Online_arr[0];
	$arr_result['MAX_Online']=$Online_arr[1];
	echo "<br> current online : ".$arr_result['CUR_Online']."  max:".$arr_result['MAX_Online']." --- </br>";
}else {
	echo "have no online data";
}
/*
 * 服务状态
 */
if (isset($arr_result['state'])){
	if ($arr_result['state'] == "+OK"){
// 		echo "</br>state  is  just ok ";
		$arr_result['state']='1';
	}else {
		echo "</br>server start failed";
		$arr_result['state']='0';
	}
}else {
	echo "no data for state<us></br>";
}

// print_r($arr_result);
foreach ($arr_result as $k => $v) {
	echo "--------begin---------</br>";
	echo "the key :".$k." has a value : ".$v;
	echo "</br>--------end-----------</br>";
}