<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<link rel="stylesheet" type="text/css" href="main.css">
		<style>
		</style>
		<title>���r�[���</title>
	</head>
	<body>
	<?php	
		$name = $_POST["name"];
		$room_name = array("1","2","3");
		//$room_time;
		//$start_time;
		$room_type = array(2,2,1);  // 0 = �P�T���@1=�R�O�� �Q = �ꎞ��
		$room_state = array("-1","0","1"); // -1 = �f�B�X�J�b�V������ �@0 = �ҋ@�@1�ȏ�@= ���݂̑ҋ@�l��
	
		$ROOM_TIME = array("15","30","60");
?>
	<div class=room>
		<h1>Spechen</h1>
		<p allien = right> �悤�����A<?php echo "$name"; ?>����</p>
		<div container>		
		<table>
		<?php for($i = 0;count($room_name)>$i;$i++){ ?>
			<?php if($room_state[$i] == -1){ ?>
			<tr>
				<td> 
				<button type="submit" name="example" value="<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>
				</td>
				<td>
				�f�B�X�J�b�V�������ł��B<?php echo $ROOM_TIME[$room_type[$i]]; ?>����ɏI�����܂��B
				</td>
			</tr>
			<?php }else if($room_state[$i] == 0){ ?>
			<tr>
				<td>
				<button type = "submit"	name = "example" value = "<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>
				</td>
				<td>
				�ҋ@��
				</td>
			</tr>
			<?php }else { ?>
			<tr>
				<td>
				<button type = "submit"	name = "example" value = "<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>				
				</td>
				<td>
				�ҋ@��<br>				
				���݂̎Q���l���F<?php echo $room_state[$i]; ?>�l
				</td>
			</td>
			<?php  } ?>
		<?php }?>
		</table>
		</div>
	</div>
	</body>
</html>
