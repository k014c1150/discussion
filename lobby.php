<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<link rel="stylesheet" type="text/css" href="main.css">
		<style>
		</style>
		<title>ロビー画面</title>
	</head>
	<body>
	<?php	
		$name = $_POST["name"];
		$room_name = array("1","2","3");
		//$room_time;
		//$start_time;
		$room_type = array(2,2,1);  // 0 = １５分　1=３０分 ２ = 一時間
		$room_state = array("-1","0","1"); // -1 = ディスカッション中 　0 = 待機　1以上　= 現在の待機人数
	
		$ROOM_TIME = array("15","30","60");
?>
	<div class=room>
		<h1>Spechen</h1>
		<p allien = right> ようこそ、<?php echo "$name"; ?>さん</p>
		<div container>		
		<table>
		<?php for($i = 0;count($room_name)>$i;$i++){ ?>
			<?php if($room_state[$i] == -1){ ?>
			<tr>
				<td> 
				<button type="submit" name="example" value="<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>
				</td>
				<td>
				ディスカッション中です。<?php echo $ROOM_TIME[$room_type[$i]]; ?>分後に終了します。
				</td>
			</tr>
			<?php }else if($room_state[$i] == 0){ ?>
			<tr>
				<td>
				<button type = "submit"	name = "example" value = "<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>
				</td>
				<td>
				待機中
				</td>
			</tr>
			<?php }else { ?>
			<tr>
				<td>
				<button type = "submit"	name = "example" value = "<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>				
				</td>
				<td>
				待機中<br>				
				現在の参加人数：<?php echo $room_state[$i]; ?>人
				</td>
			</td>
			<?php  } ?>
		<?php }?>
		</table>
		</div>
	</div>
	</body>
</html>
