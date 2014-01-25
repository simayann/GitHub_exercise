<?php
	/* mysql_connect()古い関数 非推奨
	$link = mysql_connect('localhost','root','');

	if(!$link){
			die('接続失敗！<br>'.mysql_error());
	}else{
		echo '接続成功';
	}
	*/

	$link = mysqli_connect('localhost','root','');
	if(!$link){
		die('接続失敗<br>'.mysqli_connect_error());
	}else{
		echo '接続成功！';
	}
？>