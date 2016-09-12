<?php
	$name = $GET_["name"];
	$room_name[];
	$room_time[];
	$start_time[];
	$room_type[];  // 0 = １５分　1=３０分 ２ = 一時間
	$room_state[]: // -1 = ディスカッション中 　0 = 待機　1以上　= 現在の待機人数
	
	define("ROOM_TIME",array("15","30","60"));
	
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css">
		<style>
		</style>
		<title>ロビー画面</title>
	</head>
	<body>
	<div class=room>
		<h1>Spechen</h1>
		<p allien = right> ようこそ、<?php echo "$name"; ?>さん</p>
		<div container>
		<?php $i = 0;?>		
		<?php foreach($room_name[]){ ?>
			<?php if($room_state[$i] == -1){ ?>
				<button type="submit" name="example" value="<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>
				ディスカッション中です。<?php echo "ROOM_TIME[$room_type]"; ?>分後に終了します。
			<?php }else if($room_state[$i] == 0){ ?>
				<button type = "submit"	name = "example" value = "<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>
				待機中
			<?php }else { ?>
				<button type = "submit"	name = "example" value = "<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>				
				待機中
				現在の参加人数：<?php echo $room_state; ?>人
			<?php } ?>
		</div>
	</div>
	</body>
</html>
