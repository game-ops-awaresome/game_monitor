<?php
define("MO_URL", 'http://218.108.132.10/');
//php curl ����
/**
 * Curl�汾
 * ʹ�÷�����
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
 * $arr_result�����±꣺
 * personTime �ۼ��˴�
 * coin    ������Ϸ���ż�
 * online  ��������150/216  Ŀǰ/���
 * state  ״̬ +OK  ����״̬--����
 * serverID ������
 * timeout  ��ʱʱ��
 * gameID   ��Ϸ���
 * ����3��ֵ   max_online��cur_online��state(1�ɹ���0ʧ��)
 * 
 */
//

/*
 * �жϲ���ȡ�����������ָ���ǰ���ߺ������������
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
 * ����״̬
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