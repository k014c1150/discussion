<?php
$room_name = array();
//$room_time;
//$start_time;
$room_type = array();  // 0 = １５分　1=３０分 ２ = 一時間
$room_state = array(); // true = ディスカッション中 　false = 待機
$room_member = array();
$room_id = array();
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
		array_push($room_id,htmlspecialchars($raw->id));
		array_push($room_name, htmlspecialchars($raw->ROOM_NAME));
		array_push($room_state, htmlspecialchars($raw->ROOM_STATE));
		array_push($room_type, htmlspecialchars($raw->ROOM_TYPE));
		array_push($room_member,htmlspecialchars($raw->ROOM_MEMBER));
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
			<form action = "main.php" method = "post" >
				<table>
					<?php for($i = 0;count($room_id)>$i;$i++){ 
						$room_state_message = "";
						$room_disabled ="";
						if($room_state[$i]){ 
							$room_state_message = "ディスカッション中です";
							$room_disabled = "disabled";
						}else{ 
							$room_state_message = "
							待機中<br>				
							現在の参加人数:".$room_member[$i]."人";
						}?>
							<tr>
								<td>
									<?php echo '<button type = "submit"	name = "'.$room_name[$i].'" value = "'.$room_id[$i].'" onclick = "Onbuttonclick(this);"'.$room_disabled.'>'.$room_name[$i].'</button>'; ?>
									<input type ="hidden" name ="room_time" value = <?php echo $ROOM_TIME[$room_type[$i]] ?>>		
								</td>
								<td>
									<?php echo $room_state_message; ?>
								</td>
							</td>

							<?php }?>
						</table>
						<input type ="hidden" name = "name" value =<?php echo $name;?>>
					</form>
				</div>
			</div>

			<?php 
			echo 	"<script language = 'javascript' type = 'text/javascript'>";
			echo	"function Onbuttonclicked(button){";
			$room_add_member = $mysql -> query("UPDATE room SET ROOM_MEMBER = ROOM_MEMBER+1 WHERE id = ". button.value);
			echo	"}";
			echo    "</script>"
			?>
			<?php $mysql -> close(); ?>
		</body>
		</html>
