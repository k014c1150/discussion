<?php
	$name = $GET_["name"];
	$room_name[];
	$room_time[];
	$start_time[];
	$room_type[];  // 0 = �P�T���@1=�R�O�� �Q = �ꎞ��
	$room_state[]: // -1 = �f�B�X�J�b�V������ �@0 = �ҋ@�@1�ȏ�@= ���݂̑ҋ@�l��
	
	define("ROOM_TIME",array("15","30","60"));
	
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css">
		<style>
		</style>
		<title>���r�[���</title>
	</head>
	<body>
	<div class=room>
		<h1>Spechen</h1>
		<p allien = right> �悤�����A<?php echo "$name"; ?>����</p>
		<div container>
		<?php $i = 0;?>		
		<?php foreach($room_name[]){ ?>
			<?php if($room_state[$i] == -1){ ?>
				<button type="submit" name="example" value="<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>
				�f�B�X�J�b�V�������ł��B<?php echo "ROOM_TIME[$room_type]"; ?>����ɏI�����܂��B
			<?php }else if($room_state[$i] == 0){ ?>
				<button type = "submit"	name = "example" value = "<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>
				�ҋ@��
			<?php }else { ?>
				<button type = "submit"	name = "example" value = "<?php echo $room_name[$i]; ?>"><?php echo $room_name[$i]; ?></button>				
				�ҋ@��
				���݂̎Q���l���F<?php echo $room_state; ?>�l
			<?php } ?>
		</div>
	</div>
	</body>
</html>
