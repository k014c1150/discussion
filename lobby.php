<?php
$room_name = array();
//$room_time;
//$start_time;
$room_type = array();  // 0 = １５分　1=３０分 ２ = 一時間
$room_state = array(); // -1 = ディスカッション中 　0 = 待機　1以上　= 現在の待機人数
$name = $_POST["name"];
$ROOM_TIME = array("15","30","60");

$mysql = new mysqli("localhost","root","","db");
if ($mysql->connect_error){
	print("接続失敗：" . $mysql->connect_error);
	exit();
}
$room_check_result = $mysql -> query("SELECT * FROM room");
if($room_check_result){
	$i = 0;
	while ($raw = $room_check_result -> fetch_object()){
		array_push($room_name, htmlspecialchars($raw->ROOM_NAME));
		array_push($room_state, htmlspecialchars($raw->ROOM_STATE));
		array_push($room_type, htmlspecialchars($raw->ROOM_TYPE));
	}
}
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
			<form action = "main.php" method = "post">
				<table>
					<?php for($i = 0;count($room_name)>$i;$i++){ ?>
					<?php if($room_state[$i] == -1){ ?>
					<tr>
						<td> 
							<button type="submit" name="example" value="<?php echo $room_name[$i]; ?>" disabled><?php echo $room_name[$i]; ?></button>
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
				<input type ="hidden" name = "name" value =<?php echo $name;?>>
			</form>
		</div>
	</div>
</body>
</html>
