<!DOCTYPE> 
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css">
		<style></style>
		<title>メイン画面</title>
	<script type="text/javascript">
		var time=10;
		var sec=0;
		var mini=1;
		function set2fig(num) {
		   // 桁数が1桁だったら先頭に0を加えて2桁に調整する
		   var ret;
		   if( num < 10 ) { ret = "0" + num; }
		   else { ret = num; }
		   return ret;
		}
		function showClock2() {
		   var nowTime = new Date();
		   var nowHour = set2fig( nowTime.getHours() );
		   var nowMin = set2fig( nowTime.getMinutes() );
		   var nowSec = set2fig( nowTime.getSeconds() );
		   var msg = "現在時刻は、" + nowHour + ":" + nowMin + ":" + nowSec + " です。 11秒で遷移します";
		   document.getElementById("RealtimeClockArea2").innerHTML = msg;
		   document.getElementById("minite").innerHTML = mini;
		   time--;
		   
		   if(time==0){
			setTimeout("autoLink()",10000);
		   }
		   if(sec==60){
			sec=0;
			mini--;
		   }
		}
		function autoLink(){
			document.giziroku.submit();
		}
		setInterval('showClock2()',1000);
	</script>

	</head>
	<body>
	<?php
		/*foreach ($_POST["name"] as $key){
			$name = $key;
		}
		$room_name = $_POST["room_name"];
		$room_time= $_POST["room_type"];
		*/
		//ダミーデータ
		$name = array("foo", "bar", "hello", "world");
		$room_name = "room1";
		$room_time = "１５分";

		$room_state = array("-1","0","1"); // -1 = ディスカッション中 　0 = 待機　1以上　= 現在の待機人数
?>

		<div class=blue>
		<p>
			<div class=left><?php echo "$room_name"; ?></div>
			<div class=right>時間：<?php echo "$room_time"; ?>　残り時間：
		<span id="minite">※残り</span>分</div>
			<div class=left>参加者：<?php foreach ($name as $key){print $key." ";} ?></div>
		</p>
		</div>
		<p id="RealtimeClockArea2">※ここに時計が表示されます。</p>

		<p>議事録</p>
		<form action="dl.php" method="post" name="giziroku">
			<textarea name="memo" class="memo" rows="30" cols="125"></textarea>
		</form>
		</div>
	</body>
</html>
